<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    use HasFactory;

    protected $fillable = ['ip_address', 'apartment_id'];

    // Nascondi i campi soft delete
    protected $dates = ['deleted_at'];

    public function apartment(){
        return $this->belongsTo(Apartment::class);
    }
}
