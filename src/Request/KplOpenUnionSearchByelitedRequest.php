<?php

declare(strict_types=1);

namespace LJdJos\Request;

class KplOpenUnionSearchByelitedRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kpl.open.union.search.byelited';
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

    private $unionSearchParam;

    public function setUnionSearchParam($unionSearchParam): void
    {
        $this->apiParas['unionSearchParam'] = $unionSearchParam;
    }

    public function getUnionSearchParam()
    {
        return $this->apiParas['unionSearchParam'];
    }
}
