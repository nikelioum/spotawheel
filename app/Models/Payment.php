<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Client;

class Payment extends Model
{
    use HasFactory; 

    
    //relation with Clients
    public function client()
    {
        return $this->belongsTo(Client::class);
    }


}
