<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    const USER_FOREIGN_KEY = 'user_id';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name', 'full_name', 'provider_user_id', 'provider', 'email', 'password', 'avatar', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

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
