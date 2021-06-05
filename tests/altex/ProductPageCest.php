<?php 

class ProductPageCest
{
    public function _before(AltexTester $I)
    {
        $I->amOnPage('sapun-dove-cream-oil-100g/cpd/CRM9167012/');
        //  $I->click('.Promo2-headerLink'); // click pe inapoi in site - versiunea Altex Blackfriday de iarna
    }

    public function testingMainMenuFromProductPage(AltexTester $I)
    {
        $I->seeElement('div.MainMenu.static  ul.MainMenu-list.relative');
        $I->seeElement('.MainMenu-trigger--products');
        $I->clickWithLeftButton('.MainMenu-trigger--products');
        $I->wait(1);
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
        $I->seeElement('.u-heading-uppercase');
        $I->seeElement('.mt-2 .font-bold');
        $I->seeElement('.gallery-container');
        $I->seeElement('.product-shop div.Price-current:first-child');
        $I->seeElement('.product-shop .Status');
        $I->seeElement('.mb-3 button.bg-primary');
        $I->seeElement('.mb-3 button.bg-white');
        $I->seeElement('div.AddToButtons .flex-1:nth-child(1)');
        $I->seeElement('div.AddToButtons div.flex-1:last-of-type');
        $I->seeElement('#description');
        $I->seeElement('#additional');
        $I->seeElement('#reviews');
        $I->seeElement('#questions');

    }

    public function testOtherVisitorsAlsoBought(AltexTester $I)
    {
        $I->scrollTo('.my-12 + div');
        $I->seeElement('.my-12 + div h3');
        $I->seeElement('.my-12 + div .border.rounded');
        $I->seeElement('.my-12 + div .mb-3');
        $I->seeElement('.my-12 + div .Status--inStock');
        $I->seeElement('.my-12 + div .text-sm ');
        $I->seeElement('.my-12 + div .Price--discount');
        $I->seeElement('.my-12 + div .mt-2');
    }

   public function testSeenRecently(AltexTester $I)
   {
       $I->clickWithLeftButton('.my-12 + div .mx-auto.mb-3');
       $I->wait(3);
       $I->moveBack();
       $I->wait(2);

       $I->scrollTo('.my-12 + div + div');

       $I->seeElement('.my-12 + div + div  h3');
       $I->seeElement('.my-12 + div + div .mb-2');
       $I->seeElement('.my-12 + div + div .mb-3');
       $I->seeElement('.my-12 + div + div h2');

   }
}

