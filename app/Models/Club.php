<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Club extends Model {
    use HasFactory;
    protected $table = 'clubs'; // say eloquent about our DB
}
