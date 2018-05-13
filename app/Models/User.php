<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status', 'luckystar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function matches()
    {
        return $this->belongsToMany(Matches::class, 'users_matches', 'user_id', 'match_id');
    }

    public static function getList($params = array())
    {
        $query = User::where('email', 'LIKE', "%{$params['email']}%");
        if ($params['filter_status'] != '') {
            $query->where('status', '=', $params['filter_status']);
        }
        $result = $query->orderBy('created_at', 'DESC');
        $result = $query->paginate(LIMIT_ROW);

        return $result;
    }

    public static function getUserRanking()
    {
        $users = DB::table('users_matches AS um')
            ->select('um.user_id',
                    DB::raw('COUNT(um.user_id) AS total_match_predict'),
                    DB::raw('SUM(um.point) AS total_point'),
                    DB::raw('SUM(um.win_match) AS total_win_match'),
                    DB::raw('SUM(um.win_score) AS total_win_score'),
                    'u.name',
                    'u.email',
                    'u.luckystar'
              )
            ->rightJoin('users AS u', 'u.id', '=', 'um.user_id')
            ->groupBy('u.name', 'u.email', 'u.luckystar', 'um.user_id')
            ->orderBy('total_point', 'DESC')
            ->get();

        return $users;
    }
}
