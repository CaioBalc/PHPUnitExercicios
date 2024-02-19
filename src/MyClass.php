<?php

class MyClass{
    public $methods = [];
    public $materialID = [];
    public $tipoMaterial = [];
    public function __construct(MaterialID $materialID, TipoMaterial $tipoMaterial){
        $this->materialID = $materialID;
        $this->tipoMaterial = $tipoMaterial;
    }
    public function addMethod($method) {
        $this->methods[] = $method;
    }

    public function hasMethod($method) {
        return in_array($method, $this->methods);
    }

    public function setMaterialID($materialID) {
        $this->materialID = $materialID;
    }
    public function getMaterialID() {
        return $this->materialID;
    }

    public function setTipoMaterial($tipoMaterial) {
        $this->tipoMaterial = $tipoMaterial;
    }
    public function getTipoMaterial() {
        return $this->tipoMaterial;
    }
    /*
    public $dados = [];
    function insert($materialID, $tipoMaterial, $quantidadeKg){
        $this->dados[] = [
            'MaterialID' => $materialID,
            'TipoMaterial' => $tipoMaterial,
            'QuantidadeKg' => $quantidadeKg
        ];
    }

    public function getDados() {
        return $this->dados;
    }

    public function __construct($arg1, $arg2)
    {
        
    }

    public function method1()
    {
        
    }
*/

}
/*
$bancoDeDados = new MyClass();
$bancoDeDados->insert(1, 'Plástico', 50);
$bancoDeDados->insert(2, 'Papel', 100);
*/