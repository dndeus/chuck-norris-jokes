<?php

namespace Dndeus\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'Time waits for no man. Unless that man is Chuck Norris',
        'Chuck Norris breathes air … five times a day.',
        'Chuck Norris has a mug of nails instead of coffee in the morning.',
        'Chuck Norris’ tears cure cancer. Too bad he has never cried.',
    ];

    public function __construct(array $jokes = [])
    {
        if (count($jokes) > 0) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
