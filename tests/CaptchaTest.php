<?php


use MyanmarCaptcha\Captcha;

class CaptchaTest extends \PHPUnit\Framework\TestCase {

    /**
     * @var Captcha
     */
    private $captcha;

    public function setUp() {
        $this->captcha = new Captcha();
    }

    /**
     *
     */
    public function testOptions() {
        $this->captcha->width(200)
            ->textColor("#FF0000")
            ->backgroundColor("#00FF00")
            ->horizontalLines(5)
            ->disableDistortion()
            ->disableEffects()
            ->fontSize(20)
            ->verticalLines(5)
            ->invert()
            ->dots(19)
            ->height(50);
        $this->captcha->build();
    }

    public function testGetInterventionImage() {
        $canvas = $this->captcha->build();
        $this->assertTrue($canvas->getCanvas() instanceof \Intervention\Image\Image);
    }
}