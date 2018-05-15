<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    //
    protected $table = 'teams';

    public static function getTeamByGroupId($groupId)
    {
        $query = Teams::select('*')
            ->where('group_id', '=', $groupId)
            ->orderBy('point', 'DESC');
        $result = $query->paginate(LIMIT_ROW);

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

    public static function getFlagJpg($name)
    {
        $flagName = '';
        switch ($name) {
            case 'Russia':
                $flagName = 'rusia.jpg';
                return $flagName;
                break;
            case 'Saudi Arabia':
                $flagName = 'arabia.jpg';
                return $flagName;
                break;
            case 'Egypt':
                $flagName = 'egypt.jpg';
                return $flagName;
                break;
            case 'Uruguay':
                $flagName = 'uruguay.jpg';
                return $flagName;
                break;
            case 'Morocco':
                $flagName = 'morocco.jpg';
                return $flagName;
                break;
            case 'Iran':
                $flagName = 'iran.jpg';
                return $flagName;
                break;
            case 'Portugal':
                $flagName = 'portugal.jpg';
                return $flagName;
                break;
            case 'Spain':
                $flagName = 'spain.jpg';
                return $flagName;
                break;
            case 'France':
                $flagName = 'france.jpg';
                return $flagName;
                break;
            case 'Australia':
                $flagName = 'australia.jpg';
                return $flagName;
                break;
            case 'Argentina':
                $flagName = 'argentina.jpg';
                return $flagName;
                break;
            case 'Iceland':
                $flagName = 'iceland.jpg';
                return $flagName;
                break;
            case 'Peru':
                $flagName = 'peru.jpeg';
                return $flagName;
                break;
            case 'Denmark':
                $flagName = 'denmark.jpg';
                return $flagName;
                break;
            case 'Croatia':
                $flagName = 'croatia.jpg';
                return $flagName;
                break;
            case 'Nigeria':
                $flagName = 'nigeria.jpg';
                return $flagName;
                break;
            case 'Costa Rica':
                $flagName = 'costa-rica.jpg';
                return $flagName;
                break;
            case 'Serbia':
                $flagName = 'serbia.jpg';
                return $flagName;
                break;
            case 'Germany':
                $flagName = 'germany.jpg';
                return $flagName;
                break;
            case 'Mexico':
                $flagName = 'mexico.jpg';
                return $flagName;
                break;
            case 'Brazil':
                $flagName = 'brazil.jpg';
                return $flagName;
                break;
            case 'Switzerland':
                $flagName = 'switzerland.jpg';
                return $flagName;
                break;
            case 'Sweden':
                $flagName = 'sweden.jpg';
                return $flagName;
                break;
            case 'Korea Republic':
                $flagName = 'corea.jpg';
                return $flagName;
                break;
            case 'Belgium':
                $flagName = 'belgium.jpg';
                return $flagName;
                break;
            case 'Panama':
                $flagName = 'panama.jpg';
                return $flagName;
                break;
            case 'Tunisia':
                $flagName = 'tunisia.jpg';
                return $flagName;
                break;
            case 'England':
                $flagName = 'england.jpg';
                return $flagName;
                break;
            case 'Colombia':
                $flagName = 'colombia.jpg';
                return $flagName;
                break;
            case 'Japan':
                $flagName = 'japan.jpg';
                return $flagName;
                break;
            case 'Poland':
                $flagName = 'poland.jpg';
                return $flagName;
                break;
            case 'Senegal':
                $flagName = 'senegal.jpg';
                return $flagName;
                break;
        }

        return $flagName;
    }
}
