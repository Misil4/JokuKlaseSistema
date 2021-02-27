<?php
class Ventana
{
  // Solo es alcanzable o leido desde la misma clase que se declara, como el private, pero
  // las clases son heredables y pueden usar sus propiedades y metodos
  protected $resolucion_x,
            $resolucion_y,
            $pantalla,
            $score,
            $lives;

  // Inicializamos las propiedades con la funcion init
  // $this es una pseudo-variable que está disponible cuando una clase se instancia. La clase instanciada es un objeto, y $this hace referencia a ese objeto.
	function initpantalla() 
	{
		$this -> pantalla = new Pantalla(); // Se utiliza new para crear una instancia de clase. Se crea un objeto a no ser que el objeto tenga un constructor definido. Las clases tienen que definirse antes de instanciarse 
    $this -> resolucion_x = 1366;
    $this -> resolucion_y = 768;
    $this -> score = 0;
    $this -> lives = 5;
    echo "Ventana OK";
  }


}
class Pantalla 
{

	protected $enemigo,
						$jugador,
						$objetos;
	
  function initunits()
	{
    $this -> enemigo = new enemigo();
    $this -> jugador = new jugador();
    echo "Unidades OK";

  }

 }

class Sprite
{
  protected $Identificador,
            $Direccion,
            $Posicion_X,
            $Posicion_Y,
 			   		$numero_de_frame = 60;

	//Metodos
	public function update()
        {
            $this->Borrar_Personaje();
            $this->Mover_Personaje();
            $this->draw();
            echo "Personaje actulizado";
        }

	private function Borrar_Personaje()
        {
            echo "Jugador borrado <br>";
        }

        private function Mover_Personaje()
        {
            $this->Posicion_X++;
            $this->Posicion_Y++;
            echo "Actualizamos coordenadas: 
                Xpos: " . $this->Posicion_X . " Ypos: " . $this->Posicion_Y . "<br>";
        }

        private function draw()
        {
            echo "Jugador dibujado en nueva posición <br>";
        }  
}

class Jugador extends Sprite
{
	function __construct() 
  {
            $this -> Identificador = 1;
            $this -> Posicion_X = 45;
            $this -> Posicion_Y = 35;
            $this -> numero_de_frame = 65;
  }
        private function getID() 
        {
          return $Identificador;
        }		
      private function getPosicionX() 
        {
          return $Posicion_X;
        }
      private  function getPosicionY() 
        {
          return $Posicion_Y;
        }
        private function getNFrames() 
        {
          return $numero_de_frame;
        }
        public function InitSprite() {
          getID();
          getPosicionX
        }
  }
  class Enemigo extends Sprite 
  {
    private $velocidad,
            $lanza_hachas,
            $N_golpes_morir,
            $Puntuacion;

  function __construct() 
  {
    $this -> Identificador = 2;
    $this -> Posicion_X = 100;
    $this -> Posicion_Y = 120;
    $this -> numero_de_frame = 65;
    $this -> velocidad = 50;
    $this -> lanza_hachas = true;
    $this -> N_golpes_morir = 3;
    $this -> Puntuacion = 40;
  }
  }
  class Hacha extends Sprite 
  {
    private $velocidad;
        function __construct() 
    {
      $this -> Identificador = 3;
      $this -> Posicion_X = 105;
      $this -> Posicion_Y = 125;
      $this -> numero_de_frame = 70;
      $this -> velocidad = 45;
    }
  }
  class Graficos {
    private $altura,
            $Anchura,
            $color;

            function __construct() {
              $this -> altura = 20;
              $this -> Anchura = 30;
              $this -> color = "red";
            }
  }
  class Nivel extends Graficos 
  {
    private $Tiles,
            $blocks;

            function __construct() 
            {
              $this -> Tiles = 16*16;
              $this -> blocks = 16*16;
            }
  }

?>