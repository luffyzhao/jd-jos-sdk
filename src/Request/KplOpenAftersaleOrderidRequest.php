<?php

declare(strict_types=1);

namespace LJdJos\Request;

class KplOpenAftersaleOrderidRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kpl.open.aftersale.orderid';
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

    private $refId;

    public function setRefId($refId): void
    {
        $this->apiParas['refId'] = $refId;
    }

    public function getRefId()
    {
        return $this->apiParas['refId'];
    }

    private $orderId;

    public function setOrderId($orderId): void
    {
        $this->apiParas['orderId'] = $orderId;
    }

    public function getOrderId()
    {
        return $this->apiParas['orderId'];
    }
}
