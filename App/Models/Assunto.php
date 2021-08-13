<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Assunto extends Eloquent
{
    protected $table = 'tb_assunto';


    public function getAssuntos($ids){
        return $this->select()
        //->whereIn('id_assunto',$ids)
        ->get();

    }

}

