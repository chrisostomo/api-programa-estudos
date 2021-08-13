<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Questao extends Eloquent
{
    protected $table = 'tb_questao';


    public function getOrgaosDisponiveis()
    {
        return $this->join('tb_orgao', 'tb_orgao.id_orgao', '=', 'tb_questao.id_orgao')
        ->select('tb_orgao.*')
        ->groupBy(['tb_orgao.id_orgao'])
        ->get();   
    }

    public function getBancasDisponiveis($id_orgao){
        return $this->join('tb_banca', 'tb_banca.id_banca', '=', 'tb_questao.id_banca')
        ->where('id_orgao', '=', $id_orgao)
        ->select('tb_banca.*')
        ->groupBy(['tb_banca.id_banca'])
        ->get();   
    }

    public function getQuestoes($id_orgao,$id_banca)
    {
        return $this->select()
        ->where('id_orgao', '=', $id_orgao)
        ->where('id_banca', '=', $id_banca)
        ->get(); 
    }

}