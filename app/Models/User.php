<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

}
