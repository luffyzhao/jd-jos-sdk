<?php

declare(strict_types=1);

namespace LJdJos\Request;

class AfterSaleCustomerExpectCompQueryRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'biz.afterSale.customerExpectComp.query';
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

    private $jdOrderId;

    public function setJdOrderId($jdOrderId): void
    {
        $this->apiParas['jdOrderId'] = $jdOrderId;
    }

    public function getJdOrderId()
    {
        return $this->apiParas['jdOrderId'];
    }

    private $skuId;

    public function setSkuId($skuId): void
    {
        $this->apiParas['skuId'] = $skuId;
    }

    public function getSkuId()
    {
        return $this->apiParas['skuId'];
    }
}
