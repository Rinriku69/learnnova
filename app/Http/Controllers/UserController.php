<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use Exception;
use GuzzleHttp\Psr7\ServerRequest;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Psr\Http\Message\ServerRequestInterface;
use Throwable;

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
                    ->orWhere('name', 'LIKE', '%' . $criteria['term'] . '%')
                    ->orWhere('role', 'LIKE', '%' . $criteria['term'] . '%');
            });
        }

        return $query;
    }
 
    /* #[\Override]
    function applyWhereToFilterByTerm(Builder $query, string $word): void
    {
        $query
        ->where('email', 'LIKE', "%{$word}%")
        ->orWhere('name', 'LIKE', "%{$word}%")
        ->orWhere('role', 'LIKE', "%{$word}%");
    } */

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
    

    function delete(string $user): RedirectResponse
    {
        $user = $this->find($user);
        Gate::authorize('delete', $user);
        try {
            $user->delete();

            return redirect(
                session()->get('bookmarks.user.view', route('users.list'))
            )
                ->with('status', 'User ' . $user->name . ' was Deleted');
        } catch (QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'alert' => $excp->errorInfo[2],
            ]);
        }
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
        try {
            $password = $user->password;

            $user->fill($data);
            if ($user->email !== Auth::user()->email) {
                $user->role = $data['role'];
            }
            if ($data['password'] !== null) {
                $user->password = $data['password'];
            } else {
                $user->password = $password;
            }

            $user->save();


            return redirect()->route('users.view', [
                'userID' => $user->id,
            ])->with('status', 'User ' . $user->name . ' was updated');
        } catch (QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'alert' => $excp->errorInfo[2],
            ]);
        }catch (Exception $excp) {
            return redirect()->back()->withInput()->withErrors([
                'alert' => $excp->getMessage(),
            ]);
        }catch (Throwable $excp) {
            return redirect()->back()->withInput()->withErrors([
                'alert' => $excp->getMessage(),
            ]);
        }
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
       
    ): RedirectResponse {

        $data = $request->getParsedBody();
        $userID = Auth::user()->id;
        $user = User::where('id',$userID)->firstorfail();
        try {
            $password = $user->password;
            $user->fill($data);



            if ($data['password'] !== null) {
                $user->password = $data['password'];
            } else {
                $user->password = $password;
            }

            $user->save();


            return redirect()->route(
                'users.selves.view'
            )->with('status', 'User ' . $user->name . ' was updated');
        } catch (QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'alert' => $excp->errorInfo[2],
            ]);
        }catch (Exception $excp) {
            return redirect()->back()->withInput()->withErrors([
                'alert' => $excp->getMessage(),
            ]);
        }catch (Throwable $excp) {
            return redirect()->back()->withInput()->withErrors([
                'alert' => $excp->getMessage(),
            ]);
        }
    }
}
