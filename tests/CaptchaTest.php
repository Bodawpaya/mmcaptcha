<?php


use MyanmarCaptcha\Captcha;
use MyanmarCaptcha\CaptchaString;

class CaptchaTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Captcha
     */
    private $captcha;

    public function setUp() {
        $this->captcha = new Captcha(new CaptchaString);
    }

    public function testOptions() {
        $this->captcha->width(200)
            ->textColor("#FF0000")
            ->backgroundColor("#00FF00")
            ->horizontalLines(5)
            ->disableDistortion()
            ->disableEffects()
            ->fontSize(20)
            ->fontPath(__DIR__.'/../src/assets/mon3.ttf')
            ->verticalLines(5)
            ->invert()
            ->dots(100)
            ->height(50);
        $this->captcha->build();
    }

    public function testGetInterventionImage() {
        $canvas = $this->captcha->build();
        $this->assertTrue($canvas->getCanvas() instanceof \Intervention\Image\Image);
    }
}