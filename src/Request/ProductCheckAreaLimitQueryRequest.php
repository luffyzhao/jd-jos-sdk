<?php

declare(strict_types=1);

namespace LJdJos\Request;

class ProductCheckAreaLimitQueryRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'biz.product.checkAreaLimit.query';
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

    private $skuIds;

    public function setSkuIds($skuIds): void
    {
        $this->apiParas['skuIds'] = $skuIds;
    }

    public function getSkuIds()
    {
        return $this->apiParas['skuIds'];
    }

    private $province;

    public function setProvince($province): void
    {
        $this->apiParas['province'] = $province;
    }

    public function getProvince()
    {
        return $this->apiParas['province'];
    }

    private $city;

    public function setCity($city): void
    {
        $this->apiParas['city'] = $city;
    }

    public function getCity()
    {
        return $this->apiParas['city'];
    }

    private $county;

    public function setCounty($county): void
    {
        $this->apiParas['county'] = $county;
    }

    public function getCounty()
    {
        return $this->apiParas['county'];
    }

    private $town;

    public function setTown($town): void
    {
        $this->apiParas['town'] = $town;
    }

    public function getTown()
    {
        return $this->apiParas['town'];
    }
}
