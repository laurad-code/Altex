<?php 

class HomePageCest
{
    public function _before(AltexTester $I)
    {
        $I->amOnPage('home/');
        //  $I->click('.Promo2-headerLink');//click pe inapoi in site - versiunea Altex Blackfriday de iarna
    }

    // tests

    public function mainMenuTest(AltexTester $I)
    {
        //$I->wait(3);//wait-ul este pentru incarcarea paginii originale - versiunea Altex Blackfriday de iarna
        $I->seeElement('.HomeSlider-carousel.owl-theme.owl-carousel.owl-loaded.owl-drag');
        $I->seeElement('.cms-home .MainMenu-trigger--products, .MainMenu-item.is-active .MainMenu-trigger');
        $I->seeLink('Telefoane, Tablete', 'https://altex.ro/telefoane-tablete/cpl/');
        $I->seeLink('Laptop, Desktop, IT, Birotica', 'https://altex.ro/laptop-desktop-it/cpl/');
        $I->seeLink('Gaming, Jocuri', 'https://altex.ro/gaming-jocuri/cpl/');
        $I->seeLink('TV, Audio-Video, Foto', 'https://altex.ro/tv-audio-video-foto/cpl/');
        $I->seeLink('Electrocasnice mari', 'https://altex.ro/electrocasnice-mari-clima/cpl/');
        $I->seeLink('Electrocasnice mici, Vesela', 'https://altex.ro/electrocasnice-mici-vesela/cpl/');
        $I->seeLink('Climatizare, Incalzire locuinta', 'https://altex.ro/aer-conditionat-climatizare/cpl/');
        $I->seeLink('Curatenie, Intretinere casa', 'https://altex.ro/curatenie-intretinere-casa/cpl/');
        $I->seeLink('Bauturi, Cafea', 'https://altex.ro/apa-espresso-cafea-suc/cpl/');
        $I->seeLink('Cosmetice, Ingrijire personala', 'https://altex.ro/cosmetice-ingrijire-personala/cpl/');
        $I->seeLink('Copii, LEGO, Rechizite', 'https://altex.ro/bebelusi-copii-jucarii/cpl/');
        $I->seeLink('Casa, Sanitare, Bricolaj', 'https://altex.ro/casa-iluminat-bricolaj/cpl/');
        $I->seeLink('Anvelope, Electronica auto', 'https://altex.ro/auto-moto-anvelope/cpl/');
        $I->seeLink('Trotinete, Biciclete, Sport', 'https://altex.ro/trotinete-biciclete-sport/cpl/');

        //Sidemenu homepage
        $I->seeLink('Promotii', 'https://altex.ro/promo/');
        $I->seeLink('Branduri', 'https://altex.ro/branduri/');
        $I->seeLink('Suport clienti', 'https://altex.ro/suport-clienti/');
        $I->seeLink('Magazine', 'https://altex.ro/magazine/');
        $I->seeLink('Fundatia Altex', 'https://altex.ro/donatie-impreuna/');
        $I->seeLink('Finantare', 'https://altex.ro/home/#');
    }

    //ofertele zilei

    public function dailyOffersTest(AltexTester $I)
    {
        //$I->scrollTo('#oferte-zilnice');
        $I->wait(2);
        $I->seeElement('#oferte-zilnice h3');
        $I->seeElement('#oferte-zilnice img', ['width' => '140'], ['height' => '140']);
        $I->seeElement('#oferte-zilnice .Price-int');
        $I->seeElement('#oferte-zilnice h2');
    }

    //promotii

    public function promotionsTest(AltexTester $I)
    {
        $I->wait(2);
        $I->scrollTo('#promotii');
        $I->seeElement('#promotii h3');
        $I->seeElement('#oferte-zilnice img',['width'=>'140'],['height'=>'140']);
        $I->seeElement('#oferte-zilnice .Price-current');
        $I->seeElement('#oferte-zilnice h2');
        $I->seeElement('#promotii .text-black',['text'=>'Vezi mai multe produse']);
    }

    //oferte

    public function offersTabsTest(AltexTester $I)
    {
        $I->wait(2);
        $I->scrollTo('#oferte');
        $I->seeElement('#oferte .Tabs');
        $I->seeElement('.Tabs-navList .Tabs-navEntry.js-trigger-toggle.is-active');
        $I->seeElement('.Tabs-trigger.js-trigger');
        $I->seeElement('#oferte .text-black', ['text' => 'Vezi mai multe produse']);
    }
    //imagini

    public function imagesTest(AltexTester $I)
    {
        $I->seeElement('a.block.mr-0.mb-6');
        $I->seeElement('a.block', ['title' => 'Descopera cele mai noi produse Huawei la cele mai atractive preturi']);
    }


}
