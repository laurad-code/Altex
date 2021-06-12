<?php 

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
        $I->seeLink('Resigilate','https://altex.ro/laptopuri/cpl/filtru/resigilate-8691/yes/');
        $I->seeLink('In stoc furnizor','https://altex.ro/laptopuri/cpl/filtru/in-stoc-furnizor-6635/yes/');
        $I->seeLink('Noutati','https://altex.ro/laptopuri/cpl/filtru/noutati-5218/noutati/');
        $I->seeLink('Precomanda','https://altex.ro/laptopuri/cpl/filtru/precomanda-5217/precomanda/');
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
}
