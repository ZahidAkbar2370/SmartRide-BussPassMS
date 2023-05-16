<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = "settings";

    protected $fillable = [
        "about_us",
        "contact_number",
        "contact_email",
        "address",
    ];

    public function userAddress()
    {
        # code...
    }
}
