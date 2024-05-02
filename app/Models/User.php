<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    // si hiciera falta indicarle a que tabla hacer referencia --> protected $table = "users";

    /**
     * The attributes that are mass assignable.
     * que campos del modelo en funcion de la tabla a la que hacer referencia van a poder ser cumplimentados
     * @var array<int, string>
     */
    protected $fillable = [
        'nickname',
        'email',
        'password',
        'id_rol'
    ];

    /**
     * The attributes that should be hidden for serialization.
     * para oculatar datos cuando serializamos ejemplo cuando estamos haciendo una api y no queremos pasar la passwd de un user
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    //que campos vamos a proteger es decir los que no van a poder ser cumplimentados
    protected $guarder;
}
