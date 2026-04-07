<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista(){
        return (object) [
            'nome'=>'Marconi',
            'tel'=>'12345678'
        ];
    }
}
