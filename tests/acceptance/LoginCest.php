<?php


use tests\fixtures\UserFixture;
use yii\helpers\Url;



class LoginCest
{
    function _before(AcceptanceTester $I)
    {
        $I->haveFixtures([
            'user' => [
                'class' => UserFixture::class,
                'dataFile' => codecept_data_dir() . 'user.php'
            ]
        ]);
    }

    public function ensureThatLoginWorks(AcceptanceTester $I)
    {
        $I->wantTo('ensure that Login is working');
        $profile = $I->grabFixture('user', 'user1');
        $I->amOnPage(Url::toRoute('/site/login'));
        $I->see('Login', 'h1');

        $I->amGoingTo('try to login with correct credentials');
        $I->fillField('input[name="LoginForm[username]"]', $profile->username);
        $I->fillField('input[name="LoginForm[password]"]', $profile->password_hash);
        $I->click('login-button');
        $I->wait(2); // wait for button to be clicked

        $I->expectTo('see user info');
        $I->see('Logout');
    }
}
