<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
$conexao = mysqli_connect('localhost:3306', 'root', '', 'product');

class ModelProduct extends Model
{
    protected $table='product';
}


