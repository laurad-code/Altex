<?php 

class FooterCest
{
    public function _before(AltexTester $I)
    {
        $I->amOnPage('/');
        $I->clickWithLeftButton('.is-hidden-in-mobile-app button.p-1 ');
        //$I->click('.Promo2-headerLink');//click pe inapoi in site - versiunea Altex Blackfriday de iarna
    }

    // tests
    public function testPricePerformanceRatio(AltexTester $I)
    {
        //$I->wait(3);//wait-ul este pentru incarcarea paginii originale - versiunea Altex Blackfriday de iarna
        $I->scrollTo('.bg-black');
        $I->seeElement('.bg-black');
        $I->see('Cel mai bun raport calitate-pret', '.bg-black .flex-initial .text-yellow-text');
        $I->seeElement('.bg-black .text-white');
        $I->seeNumberOfElements('.mr-2.flex-none a' , 2);
    }

    public function testCompanySection(AltexTester $I)
    {
        //$I->wait(3);//wait-ul este pentru incarcarea paginii originale - versiunea Altex Blackfriday de iarna
        $I->see('Despre Altex' , '.Footer-label > div:nth-child(1)');
        $I->seeLink('Despre noi', 'https://altex.ro/despre-noi/');
        $I->seeLink('Cariere', 'https://altex.ro/cariere/');
        $I->seeLink('Branduri disponibile', 'https://altex.ro/branduri/');
        $I->seeLink('Categorii produse', 'https://altex.ro/harta-site/');
        $I->seeLink('Protectia mediului', 'https://altex.ro/ecotic/pag/');
        $I->seeLink('Vanzari corporate', 'https://altex.ro/vanzari-corporate/pag/');
        $I->seeLink('Tax free', 'https://altex.ro/tax-free/pag/');
    }

    public function testCustomerSuportSection(AltexTester $I)
    {
        $I->wait(3);//wait-ul este pentru incarcarea paginii originale - versiunea Altex Blackfriday de iarna
        $I->see('Suport clienti' , '.Footer-label > div:nth-child(2)');
        $I->seeLink('Articole suport', 'https://altex.ro/suport-clienti/');
        $I->seeLink('Contact', 'https://altex.ro/contact/');
        $I->seeLink('Returneaza produse', 'https://altex.ro/cont/retururi/');
        $I->seeLink('Reteaua de magazine Altex', 'https://altex.ro/magazine/');
    }

    public function testLegalInformationSection(AltexTester $I)
    {
        //$I->wait(3);//wait-ul este pentru incarcarea paginii originale - versiunea Altex Blackfriday de iarna
        $I->see('Informatii legale' , '.Footer-label > div:nth-child(3)');
        $I->seeLink('Termeni si conditii', 'https://altex.ro/termeni-conditii/pag/');
        $I->seeLink('Politica cookie-uri', 'https://altex.ro/politica-utilizare-cookie/pag/');
        $I->seeLink('Informatii privind DEEE', 'https://altex.ro/informatii-privind-deee/pag/');
        $I->seeLink('A.N.P.C.', 'http://www.anpc.gov.ro/');
        $I->seeLink('Protectia datelor cu caracter personal', 'https://altex.ro/protectia-datelor-caracter-personal/pag/');
        $I->seeLink('ODR', 'https://ec.europa.eu/consumers/odr');
    }

    public function testCommunicationSection(AltexTester $I)
    {
        $I->wait(3);//wait-ul este pentru incarcarea paginii originale - versiunea Altex Blackfriday de iarna
        $I->see('Contact', '.Footer-label > div:nth-child(4)');
        $I->see('Telefon: 021 / 9196','.Footer-list>p');
        $I->see('Fax: 021 / 319.99.39','.Footer-list>p');
        $I->see('Urmareste-ne','.Footer-label > div:nth-child(5)');
        $I->seeElement('.float-left.mr-2.text-gray-1700:nth-of-type(1)', ['href' => 'https://www.facebook.com/AltexRomania/','target' =>'_blank']);
        $I->seeElement('.float-left.mr-2.text-gray-1700:nth-of-type(2)', ['href' => 'https://twitter.com/altexro','target' =>'_blank']);
        $I->seeElement('.float-left.mr-2.text-gray-1700:nth-of-type(3)', ['href' => 'https://ro.linkedin.com/company/altex-romania','target' =>'_blank']);
        $I->seeElement('.float-left.text-gray-1700:nth-of-type(4)', ['href' => 'https://www.youtube.com/user/AltexRomania','target' =>'_blank']);
        $I->seeLink('Abonare newsletter', 'https://altex.ro/newsletter/abonare/?referrer=footer');
        $I->see('Cel mai mic pret din Romania! Daca gasesti in alta parte mai ieftin primesti de doua ori diferenta.
','.my-5 .text-white.text-xs');
        $I->see('S.C. ALTEX ROMANIA S.R.L. este inregistrata cu numarul 600 / 2006 in registrul de evidenta a prelucrarilor de date cu caracter personal','.mt-5 p');
    }
}

