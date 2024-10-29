<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class tb_users extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasUuids;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // Specify the custom table name
    protected $primaryKey = 'userId';
    protected $keyType = 'string';
    public $incrementing = false; // Disable auto-incrementing

    protected $fillable = [
        'userId',
        'userName',
        'userEmail',
        'userPassword',
        'userAddress',
        'userPhone',
        'userDateOfBirth',
        'userRole',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'userPassword',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'userPassword' => 'hashed',
    ];

    public function getAuthPassword()
    {
        return $this->userPassword; // Tell Laravel to use the 'userPassword' column for authentication
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($user) {
            $user->userId = (string) Str::uuid(); // Generate UUID when creating a user
        });
    }
}
