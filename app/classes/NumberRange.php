<?php


namespace App\classes;


class NumberRange
{

    public $firstNumber;
    public $lastNumber;
    public $result;
    public $x;

    public function __construct($data){
        $this->firstNumber = $data['first_number'];
        $this->lastNumber = $data['last_number'];

    }

    public function index(){
//        for($this->x=0; $this->x<=100; $this->x++){
//            echo $this->x.' <br />';
//        }

        for($this->x= $this->firstNumber; $this->x <= $this->lastNumber; $this->x++){
//            $this->result = $this->x;
            echo $this->x.' ';
        }
    }










}