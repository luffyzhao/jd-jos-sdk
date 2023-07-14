<?php

declare(strict_types=1);

namespace LJdJos\Request\Domain\KplOpenWfpJmiwareUpdateWareStatus;

class Param
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.JmiWareStatusWrapper';
    }

    private $venderId;

    public function setVenderId($venderId): void
    {
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

    private $wareId;

    public function setWareId($wareId): void
    {
        $this->params['wareId'] = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    private $opType;

    public function setOpType($opType): void
    {
        $this->params['opType'] = $opType;
    }

    public function getOpType()
    {
        return $this->opType;
    }

    private $opeReason;

    public function setOpeReason($opeReason): void
    {
        $this->params['opeReason'] = $opeReason;
    }

    public function getOpeReason()
    {
        return $this->opeReason;
    }

    private $opName;

    public function setOpName($opName): void
    {
        $this->params['opName'] = $opName;
    }

    public function getOpName()
    {
        return $this->opName;
    }

    private $opIp;

    public function setOpIp($opIp): void
    {
        $this->params['opIp'] = $opIp;
    }

    public function getOpIp()
    {
        return $this->opIp;
    }

    private $sourceId;

    public function setSourceId($sourceId): void
    {
        $this->params['sourceId'] = $sourceId;
    }

    public function getSourceId()
    {
        return $this->sourceId;
    }

    private $uuid;

    public function setUuid($uuid): void
    {
        $this->params['uuid'] = $uuid;
    }

    public function getUuid()
    {
        return $this->uuid;
    }

    private $port;

    public function setPort($port): void
    {
        $this->params['port'] = $port;
    }

    public function getPort()
    {
        return $this->port;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
