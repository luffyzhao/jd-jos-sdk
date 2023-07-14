<?php

declare(strict_types=1);

namespace LJdJos\Request\Domain\KeplerPushmsgSendBatchMsg;

class OtherParams
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'java.util.Map';
    }

    private $opMap;

    public function setOpMap($opMap): void
    {
        $this->params['opMap'] = $opMap;
    }

    public function getOpMap()
    {
        return $this->opMap;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
