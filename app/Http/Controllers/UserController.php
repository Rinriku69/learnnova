<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use GuzzleHttp\Psr7\ServerRequest;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Psr\Http\Message\ServerRequestInterface;

class UserController extends SearchableController
{
    const int MAX_ITEMS = 5;

    #[\Override]
    function getQuery(): Builder | Relation
    {
        return User::orderBy('email');
    }

    #[\Override]
    function filter(
        Builder|Relation $query,
        array $criteria,
    ): Builder|Relation {

        if (!empty($criteria['term'])) {
            $query->where(function ($q) use ($criteria) {
                $q->where('email', 'LIKE', '%' . $criteria['term'] . '%')
                    ->orWhere('name', 'LIKE', '%' . $criteria['term'] . '%');
            });
        }
        if (!empty($criteria['role'])) {
            $query->where('role', $criteria['role']);
        }
        return $query;
    }

    #[\Override]
    function find(string $code): Model
    {
        return User::where('id', $code)
            ->orwhere('email', $code)
            ->firstOrFail();
    }

    function list(
        ServerRequestInterface $request
    ): View {
        Gate::authorize('list', User::class);
        $criteria = $this->prepareCriteria($request->getQueryParams());
        $query = $this->search($criteria);
        return view('users.list', [
            'users' => $query->paginate(self::MAX_ITEMS),
            'criteria' => $criteria,
        ]);
    }
    function view(string $userID): View
    {
        $user = User::where('id', $userID)
            ->first();
        Gate::authorize('view', User::class);
        return view('users.view', [
            'user' => $user
        ]);
    }
    function selvesview(): View
    {
        $email = Auth::user()->email;
        $user = User::where('email', $email)
            ->firstorfail();


        return view('users.selve.view', [
            'user' => $user
        ]);
    }
    function createForm(): View
    {
        Gate::authorize('create', User::class);
        return view('users.create-form');
    }
    function create(ServerRequestInterface $request): RedirectResponse
    {
        $data = $request->getParsedBody();
        Gate::authorize('create', User::class);
        $user = new User();
        $user->fill($data);
        $user->email = $data['email'];
        $user->role = $data['role'];
        $user->save();
        return redirect()->route('users.list')
            ->with('status', 'User ' . $user->name . ' was created');
    }

    function delete(string $user): RedirectResponse
    {
        $user = $this->find($user);
        Gate::authorize('delete', $user);
        $user->delete();

        return redirect(
            session()->get('bookmarks.user.view', route('users.list'))
        )
            ->with('status', 'User ' . $user->name . ' was Deleted');
    }

    function UpdateForm(string $user): View
    {

        $user = $this->find($user);
        Gate::authorize('update', $user);

        return view('users.updateForm', [
            'user' => $user,

        ]);
    }

    function update(
        ServerRequestInterface $request,
        string $user,
    ): RedirectResponse {

        $data = $request->getParsedBody();
        $user = $this->find($user);
        Gate::authorize('update', $user);
        $password = $user->password;

        $user->fill($data);
        if ($user->email !== Auth::user()->email) {
            $user->role = $data['role'];
        }
        if ($data['password'] !== null) {
            $user->password = $data['password'];
        }else {
            $user->password = $password;
        }

        $user->save();


        return redirect()->route('users.view', [
            'userID' => $user->id,
        ])->with('status', 'User ' . $user->name . ' was updated');
    }

    function selvesUpdateForm(): View
    {
        $user = auth::user();



        return view('users.selve.update', [
            'user' => $user,

        ]);
    }

    function selvesUpdate(
        ServerRequestInterface $request,
        string $user,
    ): RedirectResponse {

        $data = $request->getParsedBody();
        $user = $this->find($user);

        $password = $user->password;
        $user->fill($data);
        

        
        if ($data['password'] !== null) {
            $user->password = $data['password'];
        }else {
            $user->password = $password;
        }

        $user->save();


        return redirect()->route(
            'users.selves.view'
        )->with('status', 'User ' . $user->name . ' was updated');
    }
}
