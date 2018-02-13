<?php

namespace App;

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
        'name', 'email', 'password', 'verifyToken'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function VerifyUserTokenByEmail($email, $token) {
        $findUser = User::where([
            'email' => $email,
            'verifyToken' => $token
        ])->first();
        if ($findUser) {
            $user = User::find($findUser->id);
            $user->id = $findUser->id;
            $user->verifyToken = NULL;
            $user->status = 1;
            $user->save();
    
            return $user;
        } else {
            return null;
        }
    }
}
