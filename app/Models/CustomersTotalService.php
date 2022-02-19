<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomersTotalService extends Model
{
    use HasFactory;
    protected $table = 'customers_total_services';
    protected $fillable = ['user_id'];
}
