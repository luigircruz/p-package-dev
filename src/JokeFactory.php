<?php

namespace Luigircruz\PPackageDev;

/**
 * @author Luigi Cruz <alainluigicruz@gmail.com>
 */
class JokeFactory
{
    protected $jokes = [
        'Chuck Norris counted to infinity. Twice.',
        'Chuck Norris can hear sign language.',
        'Chuck Norris threw a grenade and killed 50 people, then it exploded.',
    ];

    public function __construct(array $joke = null)
    {
        if ($joke) {
            $this->jokes = $joke;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
