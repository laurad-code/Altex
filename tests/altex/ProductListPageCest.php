<?php

use Facebook\WebDriver\WebDriverElement;

class ProductListPageCest
{
    public function _before(AltexTester $I){

        $I->amOnPage('laptopuri/cpl/');
    }

    public function testIfBreadcrumbsExists(AltexTester $I)
    {
        $I->seeElement('.Breadcrumbs');
    }

    public function testThePresenceOfFilters(AltexTester $I)
    {
        $I->seeElement('#catalog-filters-container');
        $I->seeElement("#catalog-filters-container > ul> li:nth-of-type(1) > h3");
        $I->seeElement('#catalog-filters-container > ul> li:nth-of-type(1) > .mb-8 > li:nth-of-type(1)');
        $I->seeElement('#catalog-filters-container > ul> li:nth-of-type(1) > .mb-8 > li:nth-of-type(1) > .Filters-trigger');
        $I->seeElement('#catalog-filters-container > ul> li:nth-of-type(1) > .mb-8 > li:nth-of-type(1) > .Filters-trigger > span:nth-of-type(2)');
        $I->seeElement('#catalog-filters-container > ul> li:nth-of-type(1) > .mb-8 > li:nth-of-type(1) > .Filters-trigger > span:nth-of-type(2) > span:nth-of-type(2)');
        $I->seeElement('#catalog-filters-container > ul> li:nth-of-type(1) > .mb-8 > li:nth-of-type(2)');
        $I->seeElement('#catalog-filters-container > ul> li:nth-of-type(1) > .mb-8 > li:nth-of-type(3)');
        $I->seeElement('#catalog-filters-container > ul> li:nth-of-type(1) > .mb-8 > li:nth-of-type(4)');
        $I->seeElement('#catalog-filters-container > ul> li:nth-of-type(1) > .mb-8 > li:nth-of-type(5)');
        $I->seeElement('#catalog-filters-container > ul> li:nth-of-type(1) > .mb-8 > li:nth-of-type(6)');
        $I->seeElement('#catalog-filters-container > ul> li:nth-of-type(2) > h3');
        $I->seeElement('#catalog-filters-container > ul> li:nth-of-type(2) > .mb-8 > li:nth-of-type(1)');
        $I->seeElement('#catalog-filters-container > ul> li:nth-of-type(2) > .mb-8 > li:nth-of-type(2)');
        $I->seeElement('#catalog-filters-container > ul> li:nth-of-type(2) > .mb-8 > li:nth-of-type(3)');
        $I->seeElement('#catalog-filters-container > ul> li:nth-of-type(2) > .mb-8 > li:nth-of-type(4)');
        $I->seeElement('#catalog-filters-container > ul> li:nth-of-type(2) > .mb-8 > li:nth-of-type(5)');
        $I->seeElement('#catalog-filters-container > ul> li:nth-of-type(2) > .mb-8 > li:nth-of-type(6)');
        $I->seeElement('#catalog-filters-container > ul> li:nth-of-type(2) > .mb-8 > li:nth-of-type(7)');
        $I->seeElement('#catalog-filters-container > ul> li:nth-of-type(3) > button');
    }

    public function testCheckedFilters(AltexTester $I)
    {
        $I->wait(3);
        $I->clickWithLeftButton('#catalog-filters-container > ul > li:nth-of-type(1) > .mb-8 > li:nth-of-type(1) > .Filters-trigger');
        $I->wait(2);
        $I->seeElement('ul.flex-wrap .mr-2');
        $I->seeElement('ul.flex-wrap > li >a.text-red-brand');
    }

    public function testThePresenceOfSortingTab(AltexTester $I)
    {
        $I->seeElement('div.ulg-u-display-none');
        $I->seeElement('//body/div[@id=\'__next\']/div[@class=\'u-container\']/main[@class=\'lg-u-space-pb-20\']/div[@class=\'u-clearfix\']/div[contains(@class,\'lg-u-float-right lg-u-size-8of10\')]/div/div[@class=\'u-container-reset u-border-t-solid\']/div[@class=\'Toolbar u-clearfix\']/div[@class=\'u-display-iblock ulg-u-display-none\']/div/div[@class=\'u-display-iblock\']/div[1]/div[1]/select[1]');
        $I->see('Sorteaza dupa','.u-display-iblock');
        $I->see('Vezi','.u-display-iblock');
        $I->see('Arata','.u-display-iblock');
        $I->see('Pagina','.u-display-iblock');
    }

    public function testTheFunctionalityOfFirstSortingTab(AltexTester $I)
    {
        $bestSoldFirstProductName = $I->grabTextFrom('.Products-item:nth-of-type(1) .Product-nameHeading');

        $I->selectOption('.Form-select select', array('text' => 'Pret descrescator'));
        $I->wait(2);
        $I->dontSee($bestSoldFirstProductName, '.Products-item:nth-of-type(1) .Product-nameHeading');
        $I->seeInCurrentUrl('desc');

        $I->selectOption('.Form-select select', array('text' => 'Pret crescator'));
        $I->wait(2);
        $I->dontSee($bestSoldFirstProductName, '.Products-item:nth-of-type(1) .Product-nameHeading');
        $I->seeInCurrentUrl('asc');

        $I->selectOption('.Form-select select', array('text' => 'Nume'));
        $I->wait(2);
        $I->dontSee($bestSoldFirstProductName, '.Products-item:nth-of-type(1) .Product-nameHeading');
        $I->seeInCurrentUrl('/name/');

        $I->selectOption('.Form-select select', array('text' => 'Cel mai mare discount'));
        $I->wait(2);
        $I->dontSee($bestSoldFirstProductName, '.Products-item:nth-of-type(1) .Product-nameHeading');
        $I->seeInCurrentUrl('/best_deal/');
    }

    public function testTheElementsOfAProduct(AltexTester $I)
    {


    }

    public function testLoadMoreProductsButton(AltexTester $I)
    {
        $I->scrollTo('.text-center button.leading-none');
        $I->seeNumberOfElements('.Products-item','24');
        $I->clickWithLeftButton('.text-center button.leading-none');
        $I->wait(2);
        $I->scrollTo('.text-center button.leading-none');
        $I->seeNumberOfElements('.Products .Products-item','48');


    }

}
