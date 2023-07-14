<?php

declare(strict_types=1);

namespace LJdJos\Request;

class StockForListBatgetRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'biz.stock.forList.batget';
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

    private $sku;

    public function setSku($sku): void
    {
        $this->apiParas['sku'] = $sku;
    }

    public function getSku()
    {
        return $this->apiParas['sku'];
    }

    private $area;

    public function setArea($area): void
    {
        $this->apiParas['area'] = $area;
    }

    public function getArea()
    {
        return $this->apiParas['area'];
    }
}
