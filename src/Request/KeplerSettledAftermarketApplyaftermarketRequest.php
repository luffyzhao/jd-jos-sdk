<?php

declare(strict_types=1);

namespace LJdJos\Request;

class KeplerSettledAftermarketApplyaftermarketRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kepler.settled.aftermarket.applyaftermarket';
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

    private $orderIds;

    public function setOrderIds($orderIds): void
    {
        $this->apiParas['orderIds'] = $orderIds;
    }

    public function getOrderIds()
    {
        return $this->apiParas['orderIds'];
    }

    private $client;

    public function setClient($client): void
    {
        $this->apiParas['client'] = $client;
    }

    public function getClient()
    {
        return $this->apiParas['client'];
    }
}
