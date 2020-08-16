<?php

namespace Dndeus\ChuckNorrisJokes\Tests;

use Dndeus\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    public function test_it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    public function test_it_returns_a_predefined_joke()
    {
        $jokesPredefined = [
            'Time waits for no man. Unless that man is Chuck Norris',
            'Chuck Norris breathes air … five times a day.',
            'Chuck Norris has a mug of nails instead of coffee in the morning.',
            'Chuck Norris’ tears cure cancer. Too bad he has never cried.'
        ];

        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $jokesPredefined);
    }
}
