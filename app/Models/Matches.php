<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    //
    protected $table = 'matches';

    public static function getList($params)
    {
        $query = Matches::select('*');
        if ($params['filter_id_show'] != '') {
            $query->where('is_show', '=', $params['filter_id_show']);
        }
        $query->orderBy('match_date');
        $result = $query->paginate(LIMIT_ROW);

        return $result;
    }
}
