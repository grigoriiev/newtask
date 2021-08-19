<?php


namespace AppUnitTests;


use App\Chicken;
use App\Ferme;
use PHPUnit\Framework\TestCase;

class ChickenTestCase extends TestCase
{

    public function testInit():void
    {

        $ferme = new Ferme();

        $chicken=new Chicken($ferme);

        $state=true;

        if($chicken->eggs<0 && $chicken->eggs>1){

        $state=false;

        }
        self::assertTrue($state);

        self::assertTrue($chicken->registerNumber);

        self::assertSame($chicken->ferme,$ferme);
    }



    public function testAddRegisterNumber():void
    {

        $ferme = new Ferme();

        $chicken=new Chicken($ferme);

        $chicken->addRegisterNumber(1);

        self::assertSame($chicken->registerNumber,1);


    }

    public function testAddEggs():void
    {

        $ferme = new Ferme();

        $chicken=new Chicken($ferme);

        $chicken->addEggs(1);

        self::assertSame($chicken->eggs,1);


    }

    public  function  testClone():void
    {

        $ferme = new Ferme();

        $chicken= new Chicken($ferme);

        $chickenClone= clone $chicken;

        $state=true;

        if($chickenClone->eggs<0 && $chickenClone->eggs>1){

            $state=false;

        }
        self::assertTrue($state);

        self::assertTrue($chickenClone);

        self::assertSame($chickenClone->ferme,$ferme);
      }






















}