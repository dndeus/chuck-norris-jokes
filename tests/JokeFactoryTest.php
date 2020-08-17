<?php

namespace Dndeus\ChuckNorrisJokes\Tests;

use Dndeus\ChuckNorrisJokes\JokeFactory;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    public function test_it_returns_a_random_joke()
    {
        $mock = new MockHandler([
            new Response(200, [], '{ "type": "success", "value": { "id": 479, "joke": "Chuck Norris does not need to know about class factory pattern. He can instantiate interfaces.", "categories": ["nerdy"] } }'),
        ]);

        $handlerStack = HandlerStack::create($mock);
        $client = new Client(['handler' => $handlerStack]);

        $jokes = new JokeFactory($client);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('Chuck Norris does not need to know about class factory pattern. He can instantiate interfaces.', $joke);
    }
}
