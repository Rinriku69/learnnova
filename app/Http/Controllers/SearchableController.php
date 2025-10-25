<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Http\Request;

abstract class SearchableController extends Controller
{
    abstract protected function getQuery(): Builder | Relation;

    function prepareCriteria(array $criteria): array
    {
        return [
            'term' => null,
            ...$criteria,
        ];
    }

    function applyWhereToFilterByTerm(Builder $query, string $word): void
    {
        $query
        ->where('code', 'LIKE', "%{$word}%")
        ->orWhere('name', 'LIKE', "%{$word}%");
    }
     function filter(Builder|Relation $query, array $criteria,): Builder|Relation
    {
        return
            $this->filterByTerm($query, $criteria['term']);
    }

    function filterByTerm(Builder|Relation $query, ?string $term): Builder|Relation
    {
        if (!empty($term)) {
            foreach (\preg_split('/\s+/', \trim($term)) as $word) {
                $query->where(function (Builder $innerQuery) use ($word) {
                    $this->applyWhereToFilterByTerm($innerQuery, $word);
                });
            }
        }
        return $query;
    }
    function search(array $criteria): Builder
    {
        $query = $this->getQuery();

        return $this->filter($query, $criteria);
    }
    // For easily searching by code.
    function find(string $code): Model
    {
        return
            $this->getQuery()
            ->where('code', $code)->firstOrFail();
    }
}
