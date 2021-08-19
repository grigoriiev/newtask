<?php
declare(strict_types=1);

namespace App;


/**
 * Class Ferme
 * @package App
 */
class Ferme
{

    /**
     * @var
     */
    public int $eggs=0;

    /**
     * @var
     */
    public int $litersMilk=0;

    /**
     * @var array
     */
    public array $cows=[];

    /**
     * @var array
     */
    public array $chickens=[];

    /**
     * @param Cow $cow
     */
    public function addToCow(Cow $cow){

        $this->cows[]= $cow;

    }

    /**
     * @param Chicken $chicken
     */
    public function addToChicken(Chicken $chicken){
        $this->chickens[]= $chicken;
    }

    /**
     *
     */
    public function collectionEggs(){

        foreach ( $this->chickens as $key =>$value){

            if($this->chickens[$key]->registerNumber) {

                $this->eggs += $this->chickens[$key]->eggs;

                $this->chickens[$key]->eggs = null;
            }
        }

    }

    /**
     *
     */
    public function collectionLitersMilk(){

        foreach ( $this->cows as $key =>$value){

            if($this->cows[$key]->registerNumber) {

                $this->litersMilk += $this->cows[$key]->litersMilk;

                $this->cows[$key]->litersMilk = null;
            }
        }

    }

    /**
     * @return string
     */
    public function countEggs(): string
    {

        return sprintf("Общее кол-во  собранных шт. яиц %u",$this->eggs);
    }

    /**
     * @return string
     */
    public function countLitersMilk(): string
    {


        return sprintf("Общее кол-во литров молока %u",$this->litersMilk);
    }

}