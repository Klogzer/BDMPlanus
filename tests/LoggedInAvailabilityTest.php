<?php

namespace App\Tests\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoggedInAvailabilityTest extends WebTestCase
{
    /**
     * @dataProvider urlProvider
     * @param $url
     */
    public function testVisitingWhileLoggedInAsAdmin($url)
    {

        // creates client
        $client = static::createClient();


        // follows redirect after login
        $client->followRedirects();

        // gets test user from db
        $userRepository = static::$container->get(UserRepository::class);

        // retrieve the test user
        $testUser = $userRepository->findOneByEmail('user@test.test');

        // simulate $testUser being logged in
        $client->loginUser($testUser);

        // test pages behind login
        $client->request('GET', $url);
        $this->assertResponseIsSuccessful();
    }

    public function urlProvider()
    {
        yield ['/family'];
        yield ['/character/create'];
        yield ['/logout'];
    }
}