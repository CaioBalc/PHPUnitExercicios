<?php
class MyClass {
    public int $materialID;
    public string $tipoMaterial;
    protected bool $disableOriginalConstructor = false;

    public function __construct(int $materialID, string $tipoMaterial) {
        $this->materialID = $materialID;
        $this->tipoMaterial = $tipoMaterial;
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

    public function returnMaterial() {
        return self::class;
    }
}