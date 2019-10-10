<?php



class Blackjack{

    public $cards = array();
    public $score = 0;
    public $player = "player";
    public $dealer = "dealer";
    const maxvalue = 21;


    public function Hit(){
        $hit = rand(1,11);
        $this->score = $hit;
        $_SESSION['score'] += $hit;


        $totaladd = $hit + $_SESSION['score'];


        if ($totaladd > self::maxvalue){
            die('Game Over'.'<br>'.'your final score is '.$totaladd);
        }
        else{
            echo 'total: '.$totaladd."<br>";
        }



        $this->stackofCards($hit);
        echo "your card:";
        return $hit;
    }


    public function stackofCards($val){
        $this->cards = [];
        array_push($this->cards, $val);
    }



    public function Stand(){


    }

    public function Surrender(){
        unset($_SESSION['player']);
        unset($_SESSION['dealer']);
        $_SESSION['score'] = 0;
        return 'Dealer wins';
    }


}
