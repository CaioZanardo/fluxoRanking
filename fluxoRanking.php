<?php

interface iLog{
    public function logar($objetoTolog);
}

class User{
    
    protected $login;

    public function __construct($login){
        $this->login = $login;
    }

    //Redefine o método pai
    function exibirUser(){
        echo 'Atributo login: ', $this->login, '<br>', '<br>'; 
    }
}

class ModosDeJogo extends User{
    
    protected $pontosMatch3;
    protected $pontosQuiz;

    public function __construct($login, $pontosMatch3, $pontosQuiz){
        $this->login = $login;
        $this->pontosMatch3 = $pontosMatch3;
        $this->pontosQuiz = $pontosQuiz;
    }

    //Redefine o método pai
    function exibirModosDeJogo(){
        echo 'Atributos Modo De Jogo: ' ,'login: ', $this->login, ' - ';
        echo 'Pontos Match-3: ', $this->pontosMatch3, ' - ';
        echo 'Pontos Quiz: ', $this->pontosQuiz, '<br>', '<br>';
    }
}

class Ranking extends ModosDeJogo implements iLog{

    private $posicao;
    private $recompensa;

    public function __construct($login, $pontosMatch3, $pontosQuiz, $posicao, $recompensa){
        $this->login = $login;
        $this->pontosMatch3 = $pontosMatch3;
        $this->pontosQuiz = $pontosQuiz;
        $this->posicao = $posicao ;
        $this->recompensa = $recompensa;
    }

    //Redefine o método pai
    function exibirTodosDados(){
        echo 'login: ', $this->login , ' - ',
        'Posição: ', $this->posicao, ' - ',
        'Pontos Match-3: ', $this->pontosMatch3, ' - ',
        'Pontos Quiz: ', $this->pontosQuiz, ' - ',
        'Recompensas: ', $this->recompensa, '<br>', '<br>';
    }


    public function logar($objetoTolog){
    echo 'Aqui será gerado o log', var_dump($objetoTolog);
}
}

$Ranking = new Ranking('CaioZanardo', '1', '999.99', '999.99', '1.000 Eco Coins');
$Ranking->exibirUser();
$Ranking->exibirModosDeJogo();
$Ranking->exibirTodosDados();
$Ranking->logar($Ranking);

// André Spinelli Cintra - RM 551016
//Augusto de Oliveira Laurino - RM 93498
//Caio Felipe Britto Zanardo da Silva - RM 95125
//Gabriel Wilke Azevedo - RM 95211
//Guilherme de Lucas Garcia - RM 94392