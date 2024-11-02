<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    public $primaryKey = 'id';

    protected $fillable = ['firstname', 'lastname', 'email', 'phonenumber', 'address', 'city'];

    public function manager()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
