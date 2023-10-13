<?php

namespace Аpp;

// трейт это описание методов с реализацией, которые потом мы просто копипастим в классы с помощью use
trait Activities
{
    public function rest(): void
    {
        print_r($this->getRest() . " days has rest<br>");
    }

    public function recentProject(): void
    {
        print_r($this->getProject() . " is recent project<br>");
    }
}