<?php

declare(strict_types=1);

namespace LJdJos\Request;

class MessageGetRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'biz.message.get';
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return '{}';
        }

        return json_encode($this->apiParas);
    }

    public function check(): void
    {
    }

    public function putOtherTextParam($key, $value): void
    {
        $this->apiParas[$key] = $value;
        $this->{$key} = $value;
    }

    private $version;

    public function setVersion($version): void
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }

    private $type;

    public function setType($type): void
    {
        $this->apiParas['type'] = $type;
    }

    public function getType()
    {
        return $this->apiParas['type'];
    }
}
