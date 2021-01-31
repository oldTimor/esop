<?php
/**
 * Created by PhpStorm.
 * User: 小小徐
 * Date: 2021/1/30
 * Time: 21:32
 */

class TimorTest extends TestCase
{
    /**
     * @test
     */
    public function common()
    {
        $ret = true;
        $this->assertTrue($ret);
    }
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider()
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 2]
        ];
    }

}