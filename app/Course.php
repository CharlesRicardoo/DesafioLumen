<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Course extends Model{

    protected $fillable = ['nome', 'descricao', 'conteudo', 'preco'];
    //protected $guard   =[];


}