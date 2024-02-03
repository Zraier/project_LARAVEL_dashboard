<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class admin extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_admin';
    protected $guarded = [];

    public static function getAdminsWithUsers($username)
    {
        return DB::table('admins')
        ->join('users', 'admins.username', '=', 'users.username')
        ->where('admins.username', $username)
        ->select('admins.*')
        ->first();
    }
}
