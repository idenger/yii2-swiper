<?php
/**
 * Created by PhpStorm.
 * User: Роман
 * Date: 02.05.2015
 * Time: 23:08
 */

namespace romkaChev\yii2\swiper\tests\unit\swiper\assets;


use romkaChev\yii2\swiper\assets\SwiperAsset;
use romkaChev\yii2\swiper\tests\unit\BaseTestCase;

class SwiperAssetBaseTest extends BaseTestCase
{
    public function testMain()
    {
        SwiperAsset::register( \Yii::$app->getView() );
    }
}
