<?php

declare(strict_types=1);

namespace LJdJos\Request;

class UnionOpenGoodsQueryRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.union.open.goods.query';
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

    private $goodsReqDTO;

    public function setGoodsReqDTO($goodsReqDTO): void
    {
        $this->apiParas['goodsReqDTO'] = $goodsReqDTO;
    }

    public function getGoodsReqDTO()
    {
        return $this->apiParas['goodsReqDTO'];
    }
}
