<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    
    protected $table = 'employees';
    protected $fillable = [
        'name',
        'store_id',
        'position_id',
        'address',
        'email',
        'contact',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    
}
