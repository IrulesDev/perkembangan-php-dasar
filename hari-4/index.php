<?php
    // class Fruit {
    //     public $name;
    //     public $color;
      
    //     function __construct($name, $color) {
    //       $this->name = $name;
    //       $this->color = $color;
    //     }
    //     function __destruct() {
    //       echo "The fruit is {$this->name} and the color is {$this->color}."."\n";
    //     }
    //   }
      
    //   $apple = new Fruit("Apple", "red");


    //perhatikan stirinya!
    // class handphone{
    //     public $merk;
    //     public $seri;
    //     public $warna;

    //     function __construct($merkC,$seriC,$warnaC){
    //         $this->merk = $merkC;
    //         $this->seri = $seriC;
    //         $this->warna = $warnaC;
    //     }
    //     function __destruct(){
    //         echo "handphoneku merknya $this->merk,berseri $this->seri,dan berwarna $this->warna";
    //     }
    // }

    // $smartphone = new handphone("xiaomi","redmi note","biru laut");


    //inheritn
    class motor{
        public $merk;
        public $tahun;

        function __construct($merk1,$tahun1){
            $this->merk = $merk1;
            $this->tahun = $tahun1;
        }
        function message(){
            echo "mutorku $this->merk tahun $this->tahun";
        }
    }
    class gl100 extends motor {
        function exis(){
            echo "bapakku nelayan juragan peternakan";
        }
    }
    $keluargaku = new gl100("gl100", 1996);
    $keluargaku->exis();
    echo "   ";
    $keluargaku->message();