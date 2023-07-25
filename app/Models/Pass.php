<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pass extends Model
{
    use HasFactory;
    
    protected $table = 'passes';

    protected $fillable = [
        "pass_number",
        "full_name",
        "profile_image",
        "contact_number",
        "email",
        "cnic_no",
        "category",
        "destination",
        "from_date",
        "to_date",
        "cost",
        "from_location",
        "status",
    ];
}
