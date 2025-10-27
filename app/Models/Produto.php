<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';

    protected $fillable = array('nome', 'descricao', 'valor', 'quantidade'); // especifica quais atributos podem ser populados 

    protected $guarded = ['id']; //impedir que o usuário altere o id do produto
}
