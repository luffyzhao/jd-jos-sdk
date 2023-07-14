<?php

declare(strict_types=1);

namespace LJdJos\Request;

class KplOpenAlphaConfigAddrsgetRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kpl.open.alpha.config.addrsget';
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

    private $ptKey;

    public function setPtKey($ptKey): void
    {
        $this->apiParas['ptKey'] = $ptKey;
    }

    public function getPtKey()
    {
        return $this->apiParas['ptKey'];
    }

    private $ip;

    public function setIp($ip): void
    {
        $this->apiParas['ip'] = $ip;
    }

    public function getIp()
    {
        return $this->apiParas['ip'];
    }
}
