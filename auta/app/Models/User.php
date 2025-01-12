<?php
/*
* Tento soubor User.php je model, který vznikl automaticky při instalaci Jetstream 
* Tento model je speciální, protože Laravel Jetstream přidává veškerou základní autentifikaci a správu uživatelů, jako je registrace, přihlášení, 
* dvoufaktorová autentifikace a správa profilového obrázku.
*/
namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable // dědí z třídy Authenticatable, která je základní třída poskytovaná Laravelm obsahující všechny metody pro autentifikaci uživatelů
{ // třída se postará o to, jakým způsobem bude uživatel ověřován při přihlášení
    
    // tento model používá několik traitů, což jsou kousky kódu, které poskytují různé funkce
    use HasApiTokens; // umožňuje generovat a ověřovat API tokeny pro autentifikaci

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory; //používá se pro vytváření uživatelů v databázi, což je užitečné například při testování
    use HasProfilePhoto; // umožňuje uživatelům mít profilový obrázek 
    use Notifiable; // umožňuje uživateli přijímat notifikace
    use TwoFactorAuthenticatable; // umožňuje dvoufaktorovou autentifikaci

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ // určuje, které atributy bezpečně hromadně přiřadit např. při registraci Laravel automaticky "napustí" pole v databázi jen těmito atributy
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [ // tato pole budou skrytá při serializaci modelu, např. při převodu na JSON; to je důležité pro bezpečnost (např. se neukazuje heslo nebo tokeny)
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [ // tato pole jsou přidávána do výsledného modelu při serializaci; v tomto případě URL pro profilový obrázek uživatele
        'profile_photo_url',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        // funkce přetypuje pole na určité formáty při práci s databází nebo při serializaci modelu 
        // email_verified_at je převedeno na datetime (formát času)
        // password je převedeno na hashed (hash hesla)
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
