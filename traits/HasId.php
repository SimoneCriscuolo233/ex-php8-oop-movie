<?php

trait HasId {
    public $id;

    public function setId() {
        // Genera un ID casuale
        $this->id = uniqid('movie-');
    }

    public function getId() {
        return $this->id;
    }
}
?>