<?php
declare(strict_types=1);

namespace App;


/**
 * Class Chicken
 * @package App
 */
class Chicken
{

    /**
     * @var string
     */
    public string $registerNumber;

    /**
     * @var int
     */
    public  $eggs;

    /**
     * @var Ferme
     */
    public Ferme $ferme;

    /**
     * Chicken constructor.
     * @param Ferme $ferme
     */
    public function __construct(Ferme $ferme){

        $this->registerNumber=uniqid();

        $this->eggs=rand(0,1);

        $this->ferme= $ferme;

        $this->ferme->addToChicken($this);


    }

    /**
     * @param $registerNumber
     */
    public function addRegisterNumber($registerNumber){

        $this->registerNumber=$registerNumber;
    }

    /**
     * @param $eggs
     */
    public function addEggs($eggs){

        $this->eggs=$eggs;
    }

    /**
     *
     */
    public function __clone(){

        $this->registerNumber = uniqid();

        $this->eggs = rand(0,1);

        $this->ferme->addToChicken($this);
    }


}