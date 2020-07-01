<?php

namespace Luigircruz\PPackageDev\Tests;
use PHPUnit\Framework\TestCase;
use Luigircruz\PPackageDev\JokeFactory;

/**
 * @author Luigi Cruz <alainluigicruz@gmail.com>
 */
class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke() 
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke() 
    {
        $chuckNorrisJokes = [
            'Chuck Norris counted to infinity. Twice.',
            'Chuck Norris can hear sign language.',
            'Chuck Norris threw a grenade and killed 50 people, then it exploded.',
        ];

        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisJokes);
    }
}
