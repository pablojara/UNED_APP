<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    
    // Table Name
    protected $table = 'sellers';
    // Primary key 
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

}
