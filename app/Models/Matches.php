<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    //
    protected $table = 'matches';

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_matches', 'match_id', 'user_id');
    }

    public static function getList($params)
    {
        $query = Matches::select('*');
        if ($params['filter_is_show'] != '') {
            $query->where('is_show', '=', $params['filter_is_show']);
        }
        if ($params['filter_status'] != '') {
            $query->where('status', '=', $params['filter_status']);
        }
        $query->orderBy('match_date');
        $result = $query->paginate(LIMIT_ROW);

        return $result;
    }

    public static function getToDayMatch()
    {
        $query = Matches::select('*')
            ->where('is_show', '=', 1)
            ->orderBy('match_date');
        $result = $query->get();

        return $result;
    }

    public static function getFlag($name)
    {
        $flagName = '';
        switch ($name) {
            case 'Russia':
                $flagName = 'rusia.png';
                return $flagName;
                break;
            case 'Saudi Arabia':
                $flagName = 'arabia.png';
                return $flagName;
                break;
            case 'Egypt':
                $flagName = 'egy.png';
                return $flagName;
                break;
            case 'Uruguay':
                $flagName = 'uru.png';
                return $flagName;
                break;
            case 'Morocco':
                $flagName = 'mar.png';
                return $flagName;
                break;
            case 'Iran':
                $flagName = 'irn.png';
                return $flagName;
                break;
            case 'Portugal':
                $flagName = 'por.png';
                return $flagName;
                break;
            case 'Spain':
                $flagName = 'esp.png';
                return $flagName;
                break;
            case 'France':
                $flagName = 'fra.png';
                return $flagName;
                break;
            case 'Australia':
                $flagName = 'aus.png';
                return $flagName;
                break;
            case 'Argentina':
                $flagName = 'arg.png';
                return $flagName;
                break;
            case 'Iceland':
                $flagName = 'isl.png';
                return $flagName;
                break;
            case 'Peru':
                $flagName = 'per.png';
                return $flagName;
                break;
            case 'Denmark':
                $flagName = 'den.png';
                return $flagName;
                break;
            case 'Croatia':
                $flagName = 'cro.png';
                return $flagName;
                break;
            case 'Nigeria':
                $flagName = 'nga.png';
                return $flagName;
                break;
            case 'Costa Rica':
                $flagName = 'costa-rica.png';
                return $flagName;
                break;
            case 'Serbia':
                $flagName = 'srb.png';
                return $flagName;
                break;
            case 'Germany':
                $flagName = 'ger.png';
                return $flagName;
                break;
            case 'Mexico':
                $flagName = 'mex.png';
                return $flagName;
                break;
            case 'Brazil':
                $flagName = 'bra.png';
                return $flagName;
                break;
            case 'Switzerland':
                $flagName = 'sui.png';
                return $flagName;
                break;
            case 'Sweden':
                $flagName = 'swe.png';
                return $flagName;
                break;
            case 'Korea Republic':
                $flagName = 'kor.png';
                return $flagName;
                break;
            case 'Belgium':
                $flagName = 'bel.png';
                return $flagName;
                break;
            case 'Panama':
                $flagName = 'pan.png';
                return $flagName;
                break;
            case 'Tunisia':
                $flagName = 'tun.png';
                return $flagName;
                break;
            case 'England':
                $flagName = 'eng.png';
                return $flagName;
                break;
            case 'Colombia':
                $flagName = 'colombia.png';
                return $flagName;
                break;
            case 'Japan':
                $flagName = 'japan.png';
                return $flagName;
                break;
            case 'Poland':
                $flagName = 'pol.png';
                return $flagName;
                break;
            case 'Senegal':
                $flagName = 'sen.png';
                return $flagName;
                break;
        }

        return $flagName;
    }
}
