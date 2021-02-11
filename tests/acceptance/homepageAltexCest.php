<?php 

class homepageAltexCest
{
    public function tryToTest(AcceptanceTester $I)
    {
        $I ->amOnPage('/');
        $I ->seeElement('.Header-logo');
    }
}
