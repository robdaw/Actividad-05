<?php
/**
 * Clase creada por Roberto Jesús Sánchez Camacho
 * clase ejemplo de definicion
 */
class ClaseViolin
{

  // Declaración de una propiedad
  public $color = 'marron' . "<br>";
  public $tamanyo = "4/4" . "<br>";
  public $precio = 1000 . "<br>";
  public $tensores = 1 . "<br>";

  // Setters
  public function setcolor($cambiarColor){
    $this->color = $cambiarcolor;
  }

  public function setTamanyo($CambiarTamanyo){
    $this->tamaño = $CambiarTamanyo;
  }

  public function setPrecio($CambiarPrecio){
    $this->precio =$Cambiarprecio;
  }

  public function setTensores($CambiarTensores){
    $this->tensores =$CambiarTensores;
  }

  //Getters
  public function getColor() {
    echo $this->color;
      return $this->color;
  }
  public function getTamanyo() {
    echo $this->tamanyo;
      return $this->tamanyo;
  }
  public function getPrecio() {
    echo $this->precio;
      return $this->precio;
  }
  public function getTensores() {
  	echo $this->tensores;
      return $this->tensores;
  }

}

?>
