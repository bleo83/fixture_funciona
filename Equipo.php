<?php



class Equipo {



    var $pais;

    var $bandera;

    var $ptos;

    var $difGol;

    var $gf;

    var $ordenado;



    function __construct($equipo) {

        $this->pais = $equipo[0];

        $this->ptos = $equipo[1];

        $this->difGol = $equipo[2];

        $this->gf = $equipo[3];

    }



    /* function calcularPtos($gf,$difGol){

      $this->$gf=$this->$gf+$gf;

      $this->$gc=$this->$gc+$gc;

      if($gf>$gc){

      $this->$ptos=$this->$ptos+3;

      }else{

      if($gf==$gc){

      $this->$ptos=$this->$ptos+1;

      }



      }

     */



    function setPais($nombre) {

        $this->$pais = $nombre;

    }



    function setPtos($ptos) {

        $this->$ptos = $ptos;

    }



    function setDifGol($difGol) {

        $this->$difGol = $difGol;

    }



    function setGf($ptos) {

        $this->$gf = $gf;

    }



    function esMejorQue($otroEquipo) {

        if ($this->ptos > $otroEquipo->ptos) {

            return true;

        } else {

            if ($this->ptos == $otroEquipo->ptos) {

                if ($this->difGol > $otroEquipo->difGol) {

                    return true;

                } else {

                    if ($this->difGol == $otroEquipo->difGol) {

                        if ($this->gf > $otroEquipo->gf) {

                            return false;

                        } else {

                            return false;

                        }

                    } else {

                        return false;

                    }

                }

            } else {

                return false;

            }

        }

    }



}



class Tabla {



    var $equipos;

    var $aux;



    function __construct($tabla) {

        $this->equipos = array(new Equipo($tabla[0]), new Equipo($tabla[1]), new Equipo($tabla[2]), new Equipo($tabla[3]));

        for ($i = 0; $i < 4; $i++) {

            for ($j = 0; $j < 3; $j++) {

                if ($this->equipos[$j]->esMejorQue($this->equipos[$j + 1]) != true) {

                    $aux = $this->equipos[$j];

                    $this->equipos[$j] = $this->equipos[$j + 1];

                    $this->equipos[$j + 1] = $aux;

                }

            }

        }

    }



    function getEquiposORD() {

        return array($this->equipos[0]->pais, $this->equipos[1]->pais, $this->equipos[2]->pais, $this->equipos[3]->pais);

    }



}



class Grupo {



    public $pais1;

    public $pais2;

    public $pais3;

    public $pais4;



    function __construct($pais1, $pais2, $pais3, $pais4) {

        $this->pais1 = new Equipo($pais1);

        $this->pais2 = new Equipo($pais2);

        $this->pais3 = new Equipo($pais3);

        $this->pais4 = new Equipo($pais4);

    }



}



class Fixture {



    public static $equipo1a = array("1a", "Rusia", "bandera/Rusia.png");

    public static $equipo2a = array("2a", "Arabia Saudita", "bandera/ArabiaSaudita.png");

    public static $equipo3a = array("3a", "Egipto", "bandera/Egipto.png");

    public static $equipo4a = array("4a", "Uruguay", "bandera/Uruguay.png");

    public static $equipo1b = array("1b", "Portugal", "bandera/Portugal.png");

    public static $equipo2b = array("2b", "España", "bandera/España.png");

    public static $equipo3b = array("3b", "Marruecos", "bandera/Marruecos.png");

    public static $equipo4b = array("4b", "Iran", "bandera/Iran.png");

    public static $equipo1c = array("1c", "Francia", "bandera/Francia.png");

    public static $equipo2c = array("2c", "Australia", "bandera/Australia.png");

    public static $equipo3c = array("3c", "Perú", "bandera/Perú.png");

    public static $equipo4c = array("4c", "Dinamarca", "bandera/Dinamarca.png");

    public static $equipo1d = array("1d", "Argentina", "bandera/Argentina.png");

    public static $equipo2d = array("2d", "Islandia", "bandera/Islandia.png");

    public static $equipo3d = array("3d", "Croacia", "bandera/Croacia.png");

    public static $equipo4d = array("4d", "Nigeria", "bandera/Nigeria.png");

    public static $equipo1e = array("1e", "Brasil", "bandera/Brasil.png");

    public static $equipo2e = array("2e", "Suiza", "bandera/suiza.png");

    public static $equipo3e = array("3e", "Costa Rica", "bandera/Costa Rica.png");

    public static $equipo4e = array("4e", "Serbia", "bandera/Serbia.png");

    public static $equipo1f = array("1f", "Alemania", "bandera/Alemania.png");

    public static $equipo2f = array("2f", "México", "bandera/Mexico.png");

    public static $equipo3f = array("3f", "Suecia", "bandera/Suecia.png");

    public static $equipo4f = array("4f", "Corea del Sur", "bandera/korea.png");

    public static $equipo1g = array("1g", "Bélgica", "bandera/Alemania.png");

    public static $equipo2g = array("2g", "Panamá", "bandera/Panama.png");

    public static $equipo3g = array("3g", "Túnez", "bandera/Tunez.png");

    public static $equipo4g = array("4g", "Inglaterra", "bandera/Inglaterra.png");

    public static $equipo1h = array("1h", "Polonia", "bandera/Polonia.png");

    public static $equipo2h = array("2h", "Senegal", "bandera/senegal.png");

    public static $equipo3h = array("3h", "Colombia", "bandera/Colombia.png");

    public static $equipo4h = array("4h", "Japón", "bandera/Japon.png");



    static function equipoCod($cod) {

        $todos = array(Fixture::$equipo1a, Fixture::$equipo2a, Fixture::$equipo3a, Fixture::$equipo4a, Fixture::$equipo1b, Fixture::$equipo2b, Fixture::$equipo3b, Fixture::$equipo4b, Fixture::$equipo1c, Fixture::$equipo2c, Fixture::$equipo3c,

            Fixture::$equipo4c, Fixture::$equipo1d, Fixture::$equipo2d, Fixture::$equipo3d, Fixture::$equipo4d, Fixture::$equipo1e, Fixture::$equipo2e, Fixture::$equipo3e, Fixture::$equipo4e, Fixture::$equipo1f, Fixture::$equipo2f, Fixture::$equipo3f, Fixture::$equipo4f,

            Fixture::$equipo1g, Fixture::$equipo2g, Fixture::$equipo3g, Fixture::$equipo4g, Fixture::$equipo1h, Fixture::$equipo2h, Fixture::$equipo3h, Fixture::$equipo4h);

        for($i=0;$i<32;$i++){

            if ($todos[$i][0] == $cod) {

                return $todos;

            }

        }

    }



}



?>