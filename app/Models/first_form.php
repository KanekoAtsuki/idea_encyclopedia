<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class first_form extends Model
{
    use HasFactory;

    protected $table="first_form";

    protected $guarded=[
        "id",
        "created_at",
        "updated_at"
    ];
}
