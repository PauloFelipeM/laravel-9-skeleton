<?php

namespace App\Models;

use App\Mail\GenericMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;
use Rennokki\QueryCache\Traits\QueryCacheable;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable, QueryCacheable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
        'google_id',
        'facebook_id',
        'linkedin_id',
    ];

    protected $cacheFor = 3600;

    protected static $flushCacheOnUpdate = true;

    protected $hidden = [
        'password',
        'remember_token',
        'google_id',
        'facebook_id',
        'linkedin_id',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'name' => 'string',
        'email' => 'string',
    ];

    public function setPasswordAttribute($pass): void
    {
        $this->attributes['password'] = Hash::make($pass);
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims(): array
    {
        return [];
    }

    public function sendPasswordResetNotification($token): void
    {
        $params = http_build_query([
            'token' => $token,
            'login' => $this->login,
        ]);

        $url = url(env('FRONT_URL') . '/reset-password?') . $params;

        $expiresIn = config('auth.passwords.' . config('auth.defaults.passwords') . '.expire');
        $user = $this;

        GenericMail::sendMail(
            $this->getEmailForPasswordReset(),
            'Notificação de redefinição de senha',
            'emails.auth.reset-password',
            compact('url', 'expiresIn', 'user')
        );
    }
}
