<?php 

class HomePageCest
{
    public function _before(AltexTester $I)
    {
        $I->amOnPage('home/');
        //  $I->click('.Promo2-headerLink');//click pe inapoi in site - versiunea Altex Blackfriday de iarna
    }

    // tests

    public function testingMainMenusCarouselElements(AltexTester $I)
    {
        $I->seeElement('.slick-list');
        $I->seeElement('.slick-next');
        $I->seeElement('.slick-prev');
        $I->seeElement('.slick-dots');

    }

    public function testingMainMenusElementsPresence(AltexTester $I)
    {
        //$I->wait(3);//wait-ul este pentru incarcarea paginii originale - versiunea Altex Blackfriday de iarna
        $I->seeElement('.MainMenu-item:nth-of-type(1)');
        $I->seeElement('.MainMenu-item:nth-of-type(2)');
        $I->seeLink('Promotii','https://altex.ro/promo/');
        $I->seeElement('.MainMenu-item:nth-of-type(3)');
        $I->seeLink('Branduri','https://altex.ro/branduri/');
        $I->clickWithLeftButton('.MainMenu-item:nth-of-type(4)');
        $I->seeElement('.MainMenu-item:nth-of-type(4) .MainMenu-submenu');
        $I->seeLink('Rate online Credex','https://altex.ro/solutii-finantare/credit-online/');
        $I->seeLink('Credit in magazin','https://altex.ro/solutii-finantare/credit-consum-traditional/');
        $I->seeLink('Carduri de credit','https://altex.ro/solutii-finantare/sisteme-rate-valabile-pentru-posesorii-cardurilor-credit/');
        $I->seeLink('Aplicatia mobila Credex','https://altex.ro/credex-mobil-app/pag/');
        $I->seeElement('.MainMenu-item:nth-of-type(5)');
        $I->seeLink('Suport clienti','https://altex.ro/suport-clienti/');
        $I->seeElement('.MainMenu-item:nth-of-type(6)');
        $I->seeLink('Magazine','https://altex.ro/magazine/');
        $I->seeElement('.MainMenu-item:nth-of-type(7)');
        $I->seeLink('Altex Travel','https://www.altextravel.ro/');


        //Sidemenu homepage

       $I->clickWithLeftButton('.MainMenu-item:nth-of-type(1)');
       $I->seeElement('.MainMenu-item:nth-of-type(1) .MainMenu-submenu');
       $I->clickWithLeftButton('.MainMenu-item:nth-of-type(1) .MainMenu-submenu .ProductsMenu-item:nth-of-type(1)');
       $I->seeElement('#ProductsMenu-categoriiList-0');
       $I->clickWithLeftButton('.MainMenu-item:nth-of-type(1) .MainMenu-submenu .ProductsMenu-item:nth-of-type(2)');
       $I->seeElement('#ProductsMenu-categoriiList-1');
       $I->seeElement('.MainMenu-item:nth-of-type(1) .MainMenu-submenu .ProductsMenu-item:nth-of-type(3)');
        $I->seeElement('.MainMenu-item:nth-of-type(1) .MainMenu-submenu .ProductsMenu-item:nth-of-type(4)');
        $I->seeElement('.MainMenu-item:nth-of-type(1) .MainMenu-submenu .ProductsMenu-item:nth-of-type(5)');
        $I->seeElement('.MainMenu-item:nth-of-type(1) .MainMenu-submenu .ProductsMenu-item:nth-of-type(6)');
        $I->seeElement('.MainMenu-item:nth-of-type(1) .MainMenu-submenu .ProductsMenu-item:nth-of-type(7)');
        $I->seeElement('.MainMenu-item:nth-of-type(1) .MainMenu-submenu .ProductsMenu-item:nth-of-type(8)');
        $I->seeElement('.MainMenu-item:nth-of-type(1) .MainMenu-submenu .ProductsMenu-item:nth-of-type(9)');
        $I->seeElement('.MainMenu-item:nth-of-type(1) .MainMenu-submenu .ProductsMenu-item:nth-of-type(10)');
        $I->seeElement('.MainMenu-item:nth-of-type(1) .MainMenu-submenu .ProductsMenu-item:nth-of-type(11)');
        $I->seeElement('.MainMenu-item:nth-of-type(1) .MainMenu-submenu .ProductsMenu-item:nth-of-type(12)');
        $I->seeElement('.MainMenu-item:nth-of-type(1) .MainMenu-submenu .ProductsMenu-item:nth-of-type(13)');
        $I->seeElement('.MainMenu-item:nth-of-type(1) .MainMenu-submenu .ProductsMenu-item:nth-of-type(14)');
    }


    public function testingBannerUnderCarousel(AltexTester $I)
    {
        $I->seeLink('Transport pana la usa ta la orice produs','https://altex.ro/termeni-conditii-livrare/pag/');
        $I->seeLink('Te-ai razgandit? Poti returna produsul in 14 zile','https://altex.ro/renuntarea-cumparare/pag/');
        $I->seeLink('Primesti de 2 ori diferenta la orice produs','https://altex.ro/altex-dublul-diferentei-online/pag/');
        $I->seeLink('Protejeaza-ti investitia cu extragarantie.','https://altex.ro/extragarantie/pag/');
    }

        //ofertele zilei

  public function testingDailyOffers(AltexTester $I)
     {
        //$I->scrollTo('#oferte-zilnice');
        $I->wait(2);
        $I->seeElement('#oferte-zilnice .leading-32');
        $I->seeNumberOfElements('#oferte-zilnice .flex-wrap .Products-item','10');
        $I->seeElement('#oferte-zilnice .Products-item:nth-of-type(1)');
        $I->seeElement('#oferte-zilnice .Products-item:nth-of-type(1) .font-semibold');
        $I->seeElement('#oferte-zilnice .Products-item:nth-of-type(1) .absolute:nth-of-type(1)');
        $I->seeElement('#oferte-zilnice .Products-item:nth-of-type(1) img');
        $I->seeElement('#oferte-zilnice .Products-item:nth-of-type(1) h2');
        $I->seeElement('#oferte-zilnice .Products-item:nth-of-type(1) .text-green');
        $I->seeElement('#oferte-zilnice .Products-item:nth-of-type(1) span.flex.items-center');
        $I->seeElement('#oferte-zilnice .Products-item:nth-of-type(1) .text-base ');
        $I->seeElement('#oferte-zilnice .Products-item:nth-of-type(1) .Price-current ');
    }

//tab oferte

    public function testingOffersTabs(AltexTester $I)
    {
        $I->wait(2);
        $I->scrollTo('#oferte');
        $I->seeElement('#oferte .cursor-pointer:nth-of-type(1)');
        $I->seeElement('#oferte .cursor-pointer:nth-of-type(2)');
        $I->seeElement('#oferte .cursor-pointer:nth-of-type(3)');
        $I->seeElement('#oferte .cursor-pointer:nth-of-type(4)');
        $I->seeElement('#oferte .cursor-pointer:nth-of-type(5)');
        $I->seeElement('.hidden #tabpanel_0 .Products-item:nth-child(1)');
        $I->seeElement('.hidden #tabpanel_0 .Products-item:nth-child(2)');
        $I->seeElement('.hidden #tabpanel_0 .Products-item:nth-child(3)');
        $I->seeElement('.hidden #tabpanel_0 .Products-item:nth-child(4)');
        $I->seeElement('.hidden #tabpanel_0 .Products-item:nth-child(5)');



    }
    //promotii

    public function testingPromotionsSection(AltexTester $I)
    {
        $I->wait(2);
        $I->scrollTo('#promotii');
        $I->seeElement('#promotii > h2');
        $I->seeElement('#promotii .Products-item:nth-of-type(1)');
        $I->seeElement('#promotii .Products-item:nth-of-type(1) > a');
        $I->seeElement('#promotii .Products-item:nth-of-type(1) .appearance-none:nth-of-type(1)');
        $I->seeElement('#promotii .Products-item:nth-of-type(1) .appearance-none:nth-of-type(2)');
        $I->seeElement('#promotii .Products-item:nth-of-type(1) .flex-col img');
        $I->seeElement('#promotii .Products-item:nth-of-type(1) .flex-col h2');
        $I->seeElement('#promotii .Products-item:nth-of-type(1) .flex-col .text-green');
        $I->seeElement('#promotii .Products-item:nth-of-type(1) .flex-col > span');
        $I->seeElement('#promotii .Products-item:nth-of-type(1) .flex-col > .mt-auto');
        $I->seeElement('#promotii .Products-item:nth-of-type(2)');
        $I->seeElement('#promotii .Products-item:nth-of-type(3)');
        $I->seeElement('#promotii .Products-item:nth-of-type(4)');
        $I->seeElement('#promotii .Products-item:nth-of-type(5)');
        $I->seeElement('#promotii .Products-item:nth-of-type(6)');
        $I->seeElement('#promotii .Products-item:nth-of-type(7)');
        $I->seeElement('#promotii .Products-item:nth-of-type(8)');
        $I->seeElement('#promotii .Products-item:nth-of-type(9)');
        $I->seeElement('#promotii .Products-item:nth-of-type(10)');
    }


    //preFooterSection

    public function testingPreFooterSection(AltexTester $I)
    {
        $I->seeElement('.container > .block:nth-of-type(1)');
        $I->seeElement('.container > .flex-col > a:nth-of-type(1) > img');
        $I->seeElement('.container > .flex-col > a:nth-of-type(2) > img');
        $I->seeElement('.rounded.bg-newsletterYellow');
    }


}
