<?php
    
    class Dados {
        private $nome;
        private $sexo;
        private $email;
        private $origem;
        private $interesses;
    
        public function __set($atribute, $valor){
           $this->$atribute = $valor;
        }

        public function __get($atributo) {
            return $this->$atributo;
        }
       
    }
    // print_r($_GET);
    $dd = new Dados();
    $dd->__set('nome', $_GET['nome']);
    $dd->__set('sexo', $_GET['sexo']);
    $dd->__set('email', $_GET['email']);
    $dd->__set('origem', $_GET['origem']);
    $dd->__set('interesses', $_GET['interesses']);
    
    //manipulação dos dados do array interreses
    $txt_interesses;

    foreach($dd->__get('interesses') as $interessesSeleciondas){
        $txt_interesses .= $interessesSeleciondas . ", ";
    }

    //transformando os atributos com os valores em um array
    $dados = array (
        'nome' => $dd->__get('nome'),
        'sexo' => $dd->__get('sexo'),
        'email' => $dd->__get('email'),
        'origem' => $dd->__get('origem'),
        'interesses' => $txt_interesses
    );
    
    //  print_r($dado);
    echo json_encode($dados);


    
?>