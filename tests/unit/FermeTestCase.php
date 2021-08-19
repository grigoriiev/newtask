<?php


namespace AppUnitTests;


use App\Chicken;
use App\Cow;
use App\Ferme;
use PHPUnit\Framework\TestCase;

class FermeTestCase extends TestCase
{

public function testAddChicken():void
{

    $ferme = new Ferme();

    $chicken=new Chicken($ferme);

    self::assertSame($chicken->ferme,$ferme);
}

public function testAddCow():void
{

    $ferme = new Ferme();

    $cow = new Cow($ferme);

    self::assertSame($cow->ferme, $ferme);


}

public function testCollectionEggs():void
{

    $ferme = new Ferme();

    $chicken= new Chicken($ferme);

    $ferme->collectionEggs();

    self::assertNull( $ferme->chickens[0]->eggs);

}

    public function testCollectionLitersMilk():void
    {

        $ferme = new Ferme();

        $cow= new Cow($ferme);

        $ferme->collectionLitersMilk();

        self::assertNull( $ferme->cows[0]->litersMilk);


    }
    public function testCountLitersMilk():void
    {

        $ferme = new Ferme();

        $cow= new Cow($ferme);

        $ferme->collectionLitersMilk();

        $string=$ferme->countLitersMilk();

        self::assertSame("Общее кол-во литров молока {$ferme->litersMilk}", $string);
    }

    public function testCountEggs():void
    {

        $ferme = new Ferme();

        $cow= new Chicken($ferme);

        $ferme->collectionEggs();

        $string=$ferme->countEggs();

        self::assertSame("Общее кол-во  собранных шт. яиц {$ferme->eggs}", $string);


    }


}