<?php

namespace Merqueo\MovieQuotes\Repositories;

use Merqueo\MovieQuotes\Repositories\Interfaces\MovieQuoteInterface;

class MovieQuoteRepository implements MovieQuoteInterface
{
    public function getQuote()
    {
        $quotes = [
            [
                "type"=> "tv",
                "language"=> "eng",
                "source"=> "Avatar the Last Airbender",
                "quote"=> "Sometimes the best way to help yourself is to help someone else",
                "author"=> "Iroh"
            ],
            [
                "type"=> "tv",
                "language"=> "eng",
                "source"=> "Avatar the Last Airbender",
                "quote"=> "This guy is too good he shoots fire from his brain",
                "author"=> "Sokka"
            ],
            [
                "type"=> "tv",
                "language"=> "eng",
                "source"=> "Person Of Interest",
                "quote"=> "Pain tethers me to the world",
                "author"=> "Finch"
            ],
            [
                "type"=> "tv",
                "language"=> "eng",
                "source"=> "Person Of Interest",
                "quote"=> "Intentions can be a fickle business.",
                "author"=> "Finch"
            ],
            [
                "type"=> "tv",
                "language"=> "eng",
                "source"=> "Person Of Interest",
                "quote"=> "I missed on purpose, jackass.",
                "author"=> "Shaw"
            ],
            [
                "type"=> "movie",
                "language"=> "eng",
                "source"=> "Matrix",
                "quote"=> "Never send a human to do a machine's job.",
                "author"=> "Agent Smith"
            ],
            [
                "type"=> "movie",
                "language"=> "eng",
                "source"=> "Gone With the Wind",
                "quote"=> "Frankly, my dear, I don't give a damn.",
                "author"=> "Rhett Butler"
            ],
            [
                "type"=> "movie",
                "language"=> "eng",
                "source"=> "Matrix",
                "quote"=> "Dodge this.",
                "author"=> "Trinity"
            ]
        ];

        return $quotes[rand(0, count($quotes) - 1)];
    }
}