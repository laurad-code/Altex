<?php 

class FooterCest
{
    public function _before(AltexTester $I)
    {
        $I->amOnPage('/');
    }

    // tests
    public function testPricePerformanceRatio(AltexTester $I)
    {
        $I->seeElement('.Footer .bg-gray-lighter');
        $I->see('Cel mai bun raport calitate-pret.', '.Footer .bg-gray-lighter strong');
        $I->see('Conform sondajului Best Buy Award 2019/2020 efectuat de organizatia iCertias.' , '.Footer .bg-gray-lighter p:nth-child(2)');
        $I->seeNumberOfElements('.Footer .bg-gray-lighter a' , 2); $I->amOnPage('/');
    }

    public function testCompanySection(AltexTester $I)
    {
        $I->see('Companie' , '.lg-u-size-3of12:nth-child(1)');
        $I->seeLink('Despre noi', 'https://altex.ro/despre-noi/pag/');
        $I->seeLink('Cariere', 'https://altex.ro/cariere/');
        $I->seeLink('Branduri disponibile', 'https://altex.ro/branduri/');
        $I->seeLink('Categorii produse', 'https://altex.ro/harta-site/');
        $I->seeLink('Protectia mediului', 'https://altex.ro/ecotic/pag/');
        $I->seeLink('Vanzari corporate', 'https://altex.ro/vanzari-corporate/pag/');
        $I->seeLink('Tax free', 'https://altex.ro/tax-free/pag/');
    }

    public function testCustomeSuportSection(AltexTester $I)
    {
        $I->see('Suport clienti' , '.lg-u-size-3of12:nth-child(2)');
        $I->seeLink('Articole suport', 'https://altex.ro/suport-clienti/');
        $I->seeLink('Contact', 'https://altex.ro/contact/');
        $I->seeLink('Returneaza produse', 'https://altex.ro/cont/retururi/');
        $I->seeLink('Reteaua de magazine Altex', 'https://altex.ro/magazine/');
    }

    public function testLegalInformationSection(AltexTester $I)
    {
        $I->see('Informatii legale' , '.lg-u-size-3of12:nth-child(3)');
        $I->seeLink('Termeni si conditii', 'https://altex.ro/termeni-conditii/pag/');
        $I->seeLink('Politica cookie-uri', 'https://altex.ro/politica-utilizare-cookie/pag/');
        $I->seeLink('Informatii privind DEEE', 'https://altex.ro/informatii-privind-deee/pag/');
        $I->seeLink('A.N.P.C.', 'http://www.anpc.gov.ro/');
        $I->seeLink('Protectia datelor cu caracter personal', 'https://altex.ro/protectia-datelor-caracter-personal/pag/');
        $I->seeLink('ODR', 'https://ec.europa.eu/consumers/odr');
    }

    public function testCommunicationSection(AltexTester $I)
    {
        $I->see('Comunicare', '.lg-u-size-3of12:nth-child(4)');
        $I->seeLink('Abonare newsletter', 'https://altex.ro/newsletter/abonare/?referrer=footer');
        $I->seeElement('.SocialV2-facebook', ['href' => 'https://www.facebook.com/AltexRomania/','target' =>'_blank']);
        $I->seeElement('.SocialV2-twitter', ['href' => 'https://twitter.com/altexro','target' =>'_blank']);
        $I->seeElement('.SocialV2-linkedin', ['href' => 'https://ro.linkedin.com/company/altex-romania','target' =>'_blank']);
        $I->seeElement('.SocialV2-youtube', ['href' => 'https://www.youtube.com/user/AltexRomania','target' =>'_blank']);
    }
}

