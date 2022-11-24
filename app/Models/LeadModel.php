<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadModel extends Model
{
    use HasFactory;
    protected $table = "lead_models";

    protected $fillable = [
        "first_name", "last_name", "phone_number", "emai;"
    ];
}
