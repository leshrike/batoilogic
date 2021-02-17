<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

/**
 *
 * @OA\Schema(
 * 
 * required={"id,title"},
 * @OA\Xml(name="user"),
 * @OA\Property(property="id", type="integer", readOnly="true", example="1"),
 * @OA\Property(property="name", type="string", readOnly="true", example="Sandra Walter"),
 * @OA\Property(property="email", type="string", readOnly="true", example="example@batoilogic.com"),
 * @OA\Property(property="password", type="string", readOnly="true"),
 * @OA\Property(property="role", type="string", readOnly="true",description="Specifies the role of the user in the app", example="admin"),
 * @OA\Property(property="remember_token", type="string", readOnly="true",  description="token for API autherntication"),
 * @OA\Property(property="profile_photo_path", type="string", readOnly="true",  description="location where th user's profile photo can be found"),
 * @OA\Property(property="email", type="string", readOnly="true", example="Big Sad Street"),
 * )
 * 
 * Class User
 * 
 */

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function address(){

        return $this->hasMany('\App\Models\address');
    }

    public function orders(){

        return $this->hasMany('\App\Models\order');
    }
}
