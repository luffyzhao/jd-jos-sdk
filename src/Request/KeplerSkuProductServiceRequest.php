<?php

declare(strict_types=1);

namespace LJdJos\Request;

class KeplerSkuProductServiceRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kepler.sku.ProductService';
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

    private $skuIdSet;

    public function setSkuIdSet($skuIdSet): void
    {
        $this->apiParas['skuIdSet'] = $skuIdSet;
    }

    public function getSkuIdSet()
    {
        return $this->apiParas['skuIdSet'];
    }

    private $extFieldSet;

    public function setExtFieldSet($extFieldSet): void
    {
        $this->apiParas['extFieldSet'] = $extFieldSet;
    }

    public function getExtFieldSet()
    {
        return $this->apiParas['extFieldSet'];
    }
}
