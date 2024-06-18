<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname', 'lastname', 'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    
    // modelo da classe user
    public function getUsers(string|null $search = null)
    {
       $user = $this->where(function ($query) use ($search){
            if ($search){
                $query->where('username', $search);
                $query->orwhere('firstname', 'LIKE', "%{$search}%");
            }
        })->get();    

        return $user;
    }  
    // Este metodo permite concatenar o nome
    /**
     * @return string
     */
    public function getFullNameAttribute()
    {
        return $this->firstname. ' '. $this->lastname;
    }
}
