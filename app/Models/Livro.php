<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = ["nome", "autor", "editora", "ano", "anunciante", "valor", "endereco_imagem"];
}
