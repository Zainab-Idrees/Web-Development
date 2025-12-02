<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class register_model extends Model
{
    /**
     * Laravel automatically table name ko model ke naam se guess karta hai.
     * Model name: register_model → Table Laravel expects: register_models
     * 
     * Lekin humara actual table ka naam: register_user
     * Isliye hum manually table name define kar rahe hain.
     */
    protected $table = "register_user";

    /**
     * Agar aap mass assignment (Model::create) use karna chahte ho,
     * to $fillable ya $guarded define karna better hai:
     * 
     * protected $fillable = ['username', 'email', 'password'];
     */
}
