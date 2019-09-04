<?php

namespace Merqueo\MovieQuotes\Controllers;

use Merqueo\MovieQuotes\Repositories\Interfaces\MovieQuoteInterface;

class MovieQuotesController
{
    private $movieQuoteRepository;

    public function __construct(MovieQuoteInterface $movieQuoteRepository)
    {
        $this->movieQuoteRepository = $movieQuoteRepository;
    }
    public function index()
    {
        return $this->movieQuoteRepository->getQuote();
    }

    public function showQuote()
    {
        $quote = $this->movieQuoteRepository->getQuote();

        return view('moviequotes::moviequote',['quote' => $quote]);
    }
}