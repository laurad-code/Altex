<?php 

class HeaderCest
{
    public function _before(AltexTester $I)
    {
        $I->amOnPage('home/');
       // $I->click('.Promo2-headerLink');//click pe inapoi in site - versiunea Altex Blackfriday de iarna
    }

    // tests

    public function logoAndSearchBoxTest(AltexTester $I)
    {
        //$I->wait(3);//wait-ul este pentru incarcarea paginii originale - versiunea Altex Blackfriday de iarna
        $I->seeElement('.Header-logo.block.bg-no-repeat ');
        $I->seeElement('input', ['type'=>'text', 'placeholder'=>'Cauta produsul dorit']);
        $I->seeElement('.jsx-1338515218.absolute',['type'=>'submit']);

    }

    public function myAccountAndMyBasketTest(AltexTester $I)
    {
        //$I->wait(3);//wait-ul este pentru incarcarea paginii originale - versiunea Altex Blackfriday de iarna
        $I->seeElement('.SessionComponent .float-left .SessionContTrigger',['href'=>'https://altex.ro/cont/']);
        $I->click('.SessionComponent .float-left .SessionContTrigger');
        $I->seeElement('input',['name'=>'email','type'=>'email','placeholder'=>'Introdu adresa de email']);
        $I->seeElement('input',['type'=>'password','name'=>'password','label'=>'Parola']);
        $I->seeElement('.pt-4 button',['type'=>'submit']);
        $I->seeLink('Recuperare parola','https://altex.ro/cont/parola-uitata/');
        $I->seeLink('Inregistrare','https://altex.ro/cont/intra/');
        $I->seeLink('Cosul meu','https://altex.ro/cos-cumparaturi/');
        $I->clickWithLeftButton('.SessionComponent .SessionCosTrigger');
        $I->see('Nu exista produse.','.text-center.py-6');

    }
}
