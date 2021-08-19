<?php
declare(strict_types=1);

namespace App;


/**
 * Class Cow
 * @package App
 */
class Cow
{

    /**
     * @var string
     */
    public string $registerNumber;

    /**
     * @var int
     */
    public $litersMilk;

    /**
     * @var Ferme
     */
    public Ferme $ferme;

    /**
     * Cow constructor.
     * @param Ferme $ferme
     */
    public function __construct(Ferme $ferme){

        $this->registerNumber=uniqid();

        $this->litersMilk=rand(8,12);

        $this->ferme= $ferme;

        $this->ferme->addToCow($this);

    }

    /**
     * @param $registerNumber
     */
    public function addRegisterNumber($registerNumber){

        $this->registerNumber=$registerNumber;
    }

    /**
     * @param $litersMilk
     */
    public function addLitersMilk($litersMilk){

        $this->litersMilk=$litersMilk;
    }

    /**
     *
     */
    public function __clone(){

        $this->registerNumber = uniqid();

        $this->litersMilk = rand(8,12);

        $this->ferme->addToCow($this);
    }



}