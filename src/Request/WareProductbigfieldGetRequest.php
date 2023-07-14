<?php

declare(strict_types=1);

namespace LJdJos\Request;

class WareProductbigfieldGetRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.ware.productbigfield.get';
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

    private $skuId;

    public function setSkuId($skuId): void
    {
        $this->skuId = $skuId;
        $this->apiParas['sku_id'] = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    private $field;

    public function setField($field): void
    {
        $this->field = $field;
        $this->apiParas['field'] = $field;
    }

    public function getField()
    {
        return $this->field;
    }
}
