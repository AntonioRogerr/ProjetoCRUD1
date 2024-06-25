<?php

namespace App\Models\Facade;

use App\Models\Contato;
use FontLib\TrueType\Collection;
use Illuminate\Support\Collection as SupportCollection;
use Illuminate\Support\Facades\DB;

class ContatosDB {

    public static function getById($id)
    {
        $contatos = Contato::where('id', $id)->first();

        // if ($contatos) {
        //     $dataFormatada = date('d,n,Y', strtotime($contatos->data));
        //     // $dataFormatada conterá a data no formato dd,nn,yyyy
        
        //     // Se você quiser adicionar a data formatada de volta ao objeto $contatos, você pode fazer assim:
        //     $contatos->data_formatada = $dataFormatada;
        // }
        return $contatos;
        
    }

    public static function gridContatos()
    {
        $contatos = Contato::all()->map(function ($contato) {
        // Formata a data no formato dd,mm,yyyy
            $contato->data_nascimento = date('d/m/Y', strtotime($contato->data_nascimento));
             
        // Formata o número de telefone diretamente no código
            $telefone = $contato->telefone;
            $telefone_formatado = '(' . substr($telefone, 0, 2) . ') ' . substr($telefone, 2, 5) . '-' . substr($telefone, 7, 4);
            $contato->telefone = $telefone_formatado;
            return $contato;
        });

        return $contatos;
    }

}

