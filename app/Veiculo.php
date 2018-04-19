<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    public $modelo = '';
    public $marca = '';
    public $cor = '';
    public $ano = '';
    public $anoModelo = '';
    public $placa = '';
    public $dataConsulta = '';
    public $uf = '';
    public $municipio = '';
    public $chassi = '';
    public $situacao = '';    

    public function __construct($dados)
    {
        //dd($dados["modelo"]);
        $this->modelo = $dados["modelo"];
        $this->marca = $dados['marca'];
        $this->cor = $dados['cor'];
        $this->ano = $dados['ano'];
        $this->anoModelo = $dados['anoModelo'];
        $this->placa = $dados['placa'];
        $this->dataConsulta = $dados['data'];
        $this->uf = $dados['uf'];
        $this->municipio = $dados['municipio'];
        $this->chassi = $dados['chassi'];
        $this->situacao = $dados['situacao'];
        
    }
}
