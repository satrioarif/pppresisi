<?php

namespace App\Database;

use Illuminate\Database\Query\Grammars\SqlServerGrammar as BaseSqlServerGrammar;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Str;

class SqlServer2008Grammar extends BaseSqlServerGrammar
{
    /**
     * Compile a select query into SQL.
     *
     * @param  \Illuminate\Database\Query\Builder  $query
     * @return string
     */
    public function compileSelect(Builder $query)
    {
        if (! $query->offset) {
            return parent::compileSelect($query);
        }

        if (is_null($query->columns)) {
            $query->columns = ['*'];
        }

        $components = $this->compileComponents($query);

        return $this->compileAnsiOffset($query, $components);
    }

    /**
     * Compile the components into a SQL Server 2008 offset format.
     */
    protected function compileAnsiOffset(Builder $query, $components)
    {
        $constraint = $this->compileRowConstraint($query);

        $sql = $this->concatenate([
            $this->compileAnsiOffsetSelect($components),
            'from (',
            $this->compileAnsiOffsetRowNumber($components),
            ') as temp_table where row_num '.$constraint
        ]);

        return $sql;
    }

    protected function compileAnsiOffsetSelect($components)
    {
        return 'select '.implode(', ', ['*']).' ';
    }

    protected function compileAnsiOffsetRowNumber($components)
    {
        $orders = $components['orders'] ?? 'order by (select 0)';
        
        $sql = $components['columns'].', row_number() over ('.$orders.') as row_num';

        foreach (['from', 'joins', 'wheres', 'groups', 'havings'] as $component) {
            if (isset($components[$component])) {
                $sql .= ' '.$components[$component];
            }
        }

        return $sql;
    }

    protected function compileRowConstraint($query)
    {
        $start = $query->offset + 1;

        if ($query->limit > 0) {
            $finish = $query->offset + $query->limit;

            return "between {$start} and {$finish}";
        }

        return ">= {$start}";
    }

    /**
     * Compile the "offset" portions of the query.
     */
    protected function compileOffset(Builder $query, $offset)
    {
        return '';
    }

    /**
     * Compile the "limit" portions of the query.
     */
    protected function compileLimit(Builder $query, $limit)
    {
        return '';
    }
}
