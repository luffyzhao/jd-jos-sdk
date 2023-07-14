<?php

declare(strict_types=1);

namespace LJdJos\Request;

class BizProductGetSkuByPageRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.biz.product.getSkuByPage';
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

    private $pageNum;

    public function setPageNum($pageNum): void
    {
        $this->apiParas['pageNum'] = $pageNum;
    }

    public function getPageNum()
    {
        return $this->apiParas['pageNum'];
    }

    private $pageNo;

    public function setPageNo($pageNo): void
    {
        $this->apiParas['pageNo'] = $pageNo;
    }

    public function getPageNo()
    {
        return $this->apiParas['pageNo'];
    }
}
