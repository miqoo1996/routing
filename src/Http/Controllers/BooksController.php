<?php

namespace miqoo1996\routing\Http\Controllers;


class BooksController
{
    private TestService $testService;

    public function __construct(TestService $testService)
    {
        $this->testService = $testService;
    }

    public function retrieve(YourTestCalss $yourTestCalss)
    {
        var_dump($yourTestCalss, $this->testService);
    }

    public function store()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}