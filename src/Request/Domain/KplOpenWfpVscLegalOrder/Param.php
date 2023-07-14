<?php

declare(strict_types=1);

namespace LJdJos\Request\Domain\KplOpenWfpVscLegalOrder;

class Param
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.MerchantRequestWrap';
    }

    private $merchantCode;

    public function setMerchantCode($merchantCode): void
    {
        $this->params['merchantCode'] = $merchantCode;
    }

    public function getMerchantCode()
    {
        return $this->merchantCode;
    }

    private $data;

    public function setData($data): void
    {
        $this->params['data'] = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
