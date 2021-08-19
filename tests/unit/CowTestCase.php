<?php


namespace AppUnitTests;



use App\Cow;
use App\Ferme;
use PHPUnit\Framework\TestCase;

class CowTestCase extends TestCase
{
    public function testInit():void
    {

        $ferme = new Ferme();

        $cow = new Cow($ferme);

        $state = true;

        if ($cow->litersMilk < 8 && $cow->litersMilk > 12) {

            $state = false;

        }
        self::assertTrue($state);

        self::assertTrue($cow->registerNumber);

        self::assertSame($cow->ferme, $ferme);
    }


    public function testAddRegisterNumber():void
    {

        $ferme = new Ferme();

        $cow = new Cow($ferme);

        $cow->addRegisterNumber(1);

        self::assertSame($cow->registerNumber, 1);


    }

    public function testClone():void
    {

        $ferme = new Ferme();

        $cow = new Cow($ferme);

        $cowClone = clone $cow;

        $state = true;

        if ($cowClone->litersMilk < 8 && $cowClone->litersMilk > 12) {

            $state = false;

        }
        self::assertTrue($state);

        self::assertTrue($cowClone);

        self::assertSame($cowClone->ferme, $ferme);
    }

}