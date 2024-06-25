<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'sobrenome',
        'data_nascimento',
        'telefone',
        'email',
    ];    

    // public function getIdadeAttribute()
    // {
    //     $dataNascimento = new \DateTime($this->attributes['data_nascimento']);
    //     $hoje = new \DateTime();
    //     $idade = $hoje->diff($dataNascimento);
    //     return $idade->y; // Retorna apenas os anos da diferença
    // }

      // Mutator para o campo 'nome'
      public function setNomeAttribute($value)
      {
          $this->attributes['nome'] = ucwords(strtolower($value));
      }
  
      // Mutator para o campo 'sobrenome'
      public function setSobrenomeAttribute($value)
      {
          $this->attributes['sobrenome'] = ucwords(strtolower($value));
      }
}
