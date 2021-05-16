<?php 

class HeaderCest
{
    public function _before(AltexTester $I)
    {
        $I->amOnPage('home/');
       // $I->click('.Promo2-headerLink');//click pe inapoi in site - versiunea Altex Blackfriday de iarna
    }

    // tests

    public function logoSearchAndMottoTest(AltexTester $I)
    {
        //$I->wait(3);//wait-ul este pentru incarcarea paginii originale - versiunea Altex Blackfriday de iarna
        $I->seeElement('.Header-logo', ['title'=>'Electronice si electrocasnice - 2x Diferenta*']);
        $I->seeElement('input', ['type'=>'text', 'placeholder'=>'Cauta produsul dorit']);
        $I->seeElement('.leading-none.rounded.text-usm.text-black',['type'=>'submit']);
        $I->click('.text-red-brand');
        $I->wait(2);
        $I->amOnUrl('https://altex.ro/suport-clienti/servicii-2x-diferenta/');
    }

    public function myAccountAndMyBasketTest(AltexTester $I)
    {
        //$I->wait(3);//wait-ul este pentru incarcarea paginii originale - versiunea Altex Blackfriday de iarna
        $I->seeElement('.jsx-2454436330.SessionContTrigger.text-usm',['href'=>'https://altex.ro/cont/']);
        $I->click('.jsx-2454436330.SessionContTrigger.text-usm');
        $I->seeElement('input',['name'=>'email','type'=>'email','placeholder'=>'E-mail']);
        $I->seeElement('input',['type'=>'password','name'=>'password','placeholder'=>'Parola']);
        $I->seeElement('.leading-none.rounded.text-xs.text-black',['type'=>'submit']);
        $I->seeLink('Inregistrare','https://altex.ro/cont/intra/');
        $I->seeLink('Cosul meu','https://altex.ro/cos-cumparaturi/');

    }
}
