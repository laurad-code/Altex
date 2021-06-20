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
        $I->seeLink('Promotii','https://altex.ro/laptopuri/cpl/filtru/promotii-3803/promotii/');
        $I->seeLink('In stoc','https://altex.ro/laptopuri/cpl/filtru/in-stoc-5182/in-stoc/');
        $I->see('Pret','.Filters-name');
        $I->see('Brand','.Filters-name');
        $I->see('Categorie','.Filters-name');
        $I->see('Sistem operare','.Filters-name');
        $I->see('Dimensiune ecran (inch)','.Filters-name');
        $I->see('Rezolutie','.Filters-name');
        $I->see('Format ecran','.Filters-name');
        $I->see('Ecran Touch','.Filters-name');
        $I->see('Producator procesor','.Filters-name');
        $I->see('Tip procesor','.Filters-name');
        $I->see('Capacitate RAM (GB)','.Filters-name');
        $I->see('Tip stocare','.Filters-name');
        $I->see('Capacitate stocare (GB)','.Filters-name');
        $I->see('Tip placa video','.Filters-name');
        $I->see('Procesor grafic','.Filters-name');
        $I->see('Memorie video','.Filters-name');
        $I->see('Unitate optica','.Filters-name');
        $I->see('Tastatura iluminata','.Filters-name');
        $I->see('Greutate (kg)','.Filters-name');
        $I->see('Culoare','.Filters-name');
        $I->seeElement('.Button.Button--block');
    }

    public function testCheckedFilters(AltexTester $I)
    {
        $I->clickWithLeftButton('.Filters-group:nth-of-type(1) .filter-option:nth-of-type(1) .Filters-trigger.js-trigger-catalog-apply-filters');
        $I->wait(2);
        $I->see('Filtre aplicate','.Filters-name');
        $I->seeLink('Sterge tot','https://altex.ro/laptopuri/cpl/');
        $I->seeLink('General: Promotii','https://altex.ro/laptopuri/cpl/');
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
        $bestSoldFirstProductPrice = $I->grabTextFrom('.Products-item:first-child span.Price-int');

        $I->selectOption('.js-trigger-catalog-toolbar-apply-filters', array('text' => 'Pret crescator'));
        $I->wait(2);
        $I->dontSee($bestSoldFirstProductPrice, '.Products-item:first-child span.Price-int');
        $I->seeInCurrentUrl('asc');

        $I->selectOption('.js-trigger-catalog-toolbar-apply-filters', array('text' => 'Pret descrescator'));
        $I->wait(2);
        $I->dontSee($bestSoldFirstProductPrice, '.Products-item:first-child span.Price-int');
        $I->seeInCurrentUrl('desc');

        $I->selectOption('.js-trigger-catalog-toolbar-apply-filters', array('text' => 'Nume'));
        $I->wait(2);
        $I->dontSee($bestSoldFirstProductPrice, '.Products-item:first-child span.Price-int');
        $I->seeInCurrentUrl('/name/');

        $I->selectOption('.js-trigger-catalog-toolbar-apply-filters', array('text' => 'Cel mai mare discount'));
        $I->wait(2);
        $I->dontSee($bestSoldFirstProductPrice, '.Products-item:first-child span.Price-int');
        $I->seeInCurrentUrl('/best_deal/');
    }

    public function testTheFunctionalityOfSecondSortingTab(AltexTester $I)
    {

        $I->selectOption('.u-space-mr-20:nth-child(2) .js-trigger-catalog-toolbar-apply-filters',array('text'=>'Lista'));
        $I->seeOptionIsSelected('.u-space-mr-20:nth-child(2) .js-trigger-catalog-toolbar-apply-filters','Lista');
        $I->waitForElementVisible('main.lg-u-space-pb-20 div.u-clearfix .Products-item .Product-list-center');
    }

    public function testTheFunctionalityOfThirdSortingTab(AltexTester $I)
    {

        $I->selectOption('.u-space-mr-20:last-child .js-trigger-catalog-toolbar-apply-filters',array('text'=>'24'));
        $I->seeOptionIsSelected('.u-space-mr-20:last-child .js-trigger-catalog-toolbar-apply-filters','24');
        $I->seeNumberOfElements('.Product','24');

        $I->selectOption('.u-space-mr-20:last-child .js-trigger-catalog-toolbar-apply-filters',array('text'=>'36'));
        $I->wait(2);
        $I->seeOptionIsSelected('.u-space-mr-20:last-child .js-trigger-catalog-toolbar-apply-filters','36');
        $I->seeNumberOfElements('.Product','36');

        $I->selectOption('.u-space-mr-20:last-child .js-trigger-catalog-toolbar-apply-filters',array('text'=>'48'));
        $I->seeOptionIsSelected('.u-space-mr-20:last-child .js-trigger-catalog-toolbar-apply-filters','48');
        $I->seeNumberOfElements('.Product','48');
    }

    public function testPageSortingTab(AltexTester $I)
    {
        $bestSoldFirstProductPrice = $I->grabTextFrom('.Products-item:first-child span.Price-int');

        $I->clickWithLeftButton('.Toolbar-next');
        $I->wait(2);
        $I->dontSee($bestSoldFirstProductPrice,'.Products-item:first-child span.Price-int');
//        $I->seeOptionIsSelected('.u-display-iblock.Toolbar-pager:first-of-type .js-trigger-catalog-toolbar-apply-filters','2 / 18');


    }

}
