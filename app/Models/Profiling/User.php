<?php

namespace App\Models\Profiling;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use App\Models\AbstractModel;

class User extends AbstractModel
{
    use Notifiable;
    use Authenticatable;

    /** 
     * The attributes that are mass assignable.
     * 
     * @var array
    */
    protected $fillable = [
        'first_name',
        'last_name',
        'email', 
        'username', 
        'password', 
        'phone_number', 
        'extension',
        'created_at', 
        'updated_at', 
        'department_id',
        'village_id',
    ];

    /** 
     * The attributes that should be hidden for arrays.
     * 
     * @var array
    */
    protected $hidden = [
        'password', 
        'remember_token',
    ];

    /** 
     * @var string[]
    */
    protected $casts = [
        // 'status' => UserStatus::class,
    ];

    /**
     * @param $value
     */
    public function setPasswordAttribute($value): void
    {
        $this->attributes['password'] = Hash::make($value);
    }

    /**
     * @return bool
     */
    public function tokenExpired()
    {
        if (Carbon::parse($this->attributes['api_token_expire_date']) < Carbon::now()) {
            return true;
        }

        return false;
    }
}
