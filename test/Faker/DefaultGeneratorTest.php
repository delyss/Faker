<?php

namespace Faker\Test;

use Faker\DefaultGenerator;
use Faker\Provider\bg_BG\Person;

class DefaultGeneratorTest extends \PHPUnit_Framework_TestCase
{
    public function testGeneratorReturnsNullByDefault()
    {
        $generator = new DefaultGenerator;
        $this->assertSame(null, $generator->value);
    }

    public function testGeneratorReturnsDefaultValueForAnyPropertyGet()
    {
        $generator = new DefaultGenerator(123);
        $this->assertSame(123, $generator->foo);
        $this->assertNotSame(null, $generator->bar);
    }

    public function testGeneratorReturnsDefaultValueForAnyMethodCall()
    {
        $generator = new DefaultGenerator(123);
        $this->assertSame(123, $generator->foobar());
    }

    public function testCompare()
    {
        $pyLastName = ['Yılmaz', 'Yıldırım', 'Türk', 'Yorulmaz', 'Erdoğan', 'Çorlu', 'Sakarya',
            'Demir', 'Yaman', 'Manço', 'Aksu', 'Akçay', 'Akar', 'Bilir', 'Bilgin',
            'Yüksel', 'Eraslan', 'Aslan', 'Arslan', 'Hançer', 'Hayrioğlu', 'Şama',
            'Ergül', 'Arsoy', 'Kısakürek', 'Gülen', 'Seven', 'Şafak', 'Dumanlı',
            'Ertaş', 'Güçlü', 'Soylu', 'Zorlu', 'Fırat', 'Duran', 'Durmuş', 'Durdu',
            'Zengin', 'Tevetoğlu', 'Mansız', 'Şener', 'Şensoy', 'Ülker', 'Tarhan',
            'Sezer', 'Demirel', 'Gül', 'Korutürk', 'İnönü', 'Öcalan', 'Çetin',
            'Sezgin', 'Alemdar', 'Karadeniz', 'Akdeniz', 'Bilge', 'Akgündüz',
            'Akçay', 'Çamurcuoğlu', 'İhsanoğlu', 'Akça'];
        $ownArr = \Faker\Provider\tr_TR\Person::$lastName;
        $a = array_diff($pyLastName, $ownArr);
//        var_dump($a);
        $result = '';
        foreach ($a as $name) {
            $result .= '\'' . $name . '\',';
        }
        var_dump($result);
    }
}
