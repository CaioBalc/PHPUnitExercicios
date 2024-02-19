<?php
class MyClass {
    public int $materialID;
    public string $tipoMaterial;

    public function __construct(int $materialID, string $tipoMaterial){
        $this->materialID = $materialID;
        $this->tipoMaterial = $tipoMaterial;
    }

    public function addMethods($method) {
        $this->methods[] = $method;
    }
    public function getMethods() {
        return $this->methods;
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
}