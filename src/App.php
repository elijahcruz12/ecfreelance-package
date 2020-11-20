<?php

declare(strict_types=1);

namespace ecwebservices\ecframework;

class App
{
    public $directory;
    /**
     * Create a new Skeleton Instance
     */
    public function __construct(string $public)
    {
        $this->directory = $public . '/../';
    }

    /**
     *
     */
    public function init(): void
    {

    }
}
