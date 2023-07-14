<?php

declare(strict_types=1);

namespace LJdJos\Request\Domain\KplOpenSearchAssociationalWord;

class MapResuest
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'java.util.Map';
    }

    private $key;

    public function setKey($key): void
    {
        $this->params['key'] = $key;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
