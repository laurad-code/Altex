<?php 

class NewsletterCest
{
    private const NEWSLETTER_EMAIL = 'test@newsletter.tld';

    private const GO_BACK_FORM_BUTTON = 'div.bg-newsletterYellow div.w-32 button';


  //  public function _before(AltexTester $I)

    // tests
    public function testingNewsletterFormHomepage(AltexTester $I)
    {
        $I->amOnPage('home/');
        $I->seeElement('.hidden .bg-newsletterYellow');

        //the newsletter form is available in more than one page. you could move this test to another cest like newsletterCest
        // you could also test the unsubscribe page in the newsletter cest

        $I->submitForm(
            '.bg-newsletterYellow form',
            [
                'email' => self::NEWSLETTER_EMAIL
            ],
            'div.bg-newsletterYellow .leading-none.rounded.text-xs.text-black'
        );
        $I->seeElement(self::GO_BACK_FORM_BUTTON);
    }

    public function testingSubscribingFromNewsletterPage(AltexTester $I)
    {
        $I->amOnPage('newsletter/abonare/');
        $I->seeElement('div.bg-newsletterYellow form div.w-full input.text-black');
        $I->seeElement('div.bg-newsletterYellow form div.w-full button.text-black');
        $I->submitForm('.bg-newsletterYellow form',[
            'email'=>self::NEWSLETTER_EMAIL
            ],
            'div.bg-newsletterYellow form div.w-full button.text-black'
            );
        //$I->wait(4);
        //$I->seeElement('.text-center .leading-none');

    }

    public function testingUnsubscribingFromNewsletterPage(AltexTester $I)
    {
        $I->amOnPage('newsletter/dezabonare/');
        $I->seeElement('div.bg-newsletterYellow form');
        $I->seeElement('div.bg-newsletterYellow button.leading-none');
        $I->submitForm('.bg-newsletterYellow form',
            [
                'email'=>self::NEWSLETTER_EMAIL
            ],
            'div.bg-newsletterYellow button.leading-none');

        //dupa dezabonare apare un pop-up care dispare prea repede pentru a l gasi in html si este hidden-activat doar la dezabonare

    }
}
