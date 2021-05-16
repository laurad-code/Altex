<?php 

class ProductPageCest
{
    public function _before(AltexTester $I)
    {
        $I->amOnPage('/');
        //  $I->click('.Promo2-headerLink');//click pe inapoi in site - versiunea Altex Blackfriday de iarna
    }

    // tests
    public function goingToProductPage(AltexTester $I)
    {
        $I->click('https://altex.ro/aparat-de-ras-braun-series-7-70-s4200-acumulator-autonomie-50-min-easyclick-argintiu/cpd/RAS770/');
    }
}
