<?php 

class ProductPageCest
{
    public function _before(AltexTester $I)
    {
        $I->amOnPage('/');
        $I->amOnPage('sapun-dove-cream-oil-100g/cpd/CRM9167012/');
        //  $I->click('.Promo2-headerLink');//click pe inapoi in site - versiunea Altex Blackfriday de iarna
    }

    // tests
    public function goingToProductPage(AltexTester $I)
    {
        $I->wait(2);
        $I->seeElement('div.MainMenu.static  ul.MainMenu-list.relative');

    }

    public function testingMainMenuFromProductPage(AltexTester $I)
    {
        $I->seeElement('.MainMenu-trigger--products');
        $I->clickWithLeftButton('.MainMenu-trigger--products');
        $I->seeElement('.MainMenu-submenu.ProductsMenu');
        $I->seeLink('Promotii','https://altex.ro/promo/');
        $I->seeLink('Branduri','https://altex.ro/branduri/');
        $I->clickWithLeftButton('li.MainMenu-item:nth-child(4)');
        $I->seeElement('.MainMenu-submenu.List');
        $I->seeLink('Suport clienti','https://altex.ro/suport-clienti/');
        $I->seeLink('Magazine','https://altex.ro/magazine/');
        $I->seeLink('Fundatia Altex','https://altex.ro/donatie-impreuna/');

    }
    public function testingBreadcrumbsFromProductPage(AltexTester $I)
    {
        $I->seeElement('.Breadcrumbs.u-container-full');
        $I->seeLink('Acasa','https://altex.ro/');
        $I->seeLink('Cosmetice, Ingrijire personala','https://altex.ro/cosmetice-ingrijire-personala/cpl/');
        $I->seeLink('Ingrijirea corpului','https://altex.ro/produse-ingrijirea-corpului/cpl/');
        $I->seeLink('Sapun','https://altex.ro/sapunuri/cpl/');
        $I->seeElement('.Breadcrumbs-listItem');

    }
    public function testingProductImageElements(AltexTester $I){



    }
}

