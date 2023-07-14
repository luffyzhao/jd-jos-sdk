<?php

declare(strict_types=1);

namespace LJdJos\Request;

class OpenBlueInvoiceUploadRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.open.blueInvoiceUpload';
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

    private $orderId;

    public function setOrderId($orderId): void
    {
        $this->orderId = $orderId;
        $this->apiParas['orderId'] = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    private $invoiceCode;

    public function setInvoiceCode($invoiceCode): void
    {
        $this->invoiceCode = $invoiceCode;
        $this->apiParas['invoiceCode'] = $invoiceCode;
    }

    public function getInvoiceCode()
    {
        return $this->invoiceCode;
    }

    private $invoiceNo;

    public function setInvoiceNo($invoiceNo): void
    {
        $this->invoiceNo = $invoiceNo;
        $this->apiParas['invoiceNo'] = $invoiceNo;
    }

    public function getInvoiceNo()
    {
        return $this->invoiceNo;
    }

    private $invoiceTitle;

    public function setInvoiceTitle($invoiceTitle): void
    {
        $this->invoiceTitle = $invoiceTitle;
        $this->apiParas['invoiceTitle'] = $invoiceTitle;
    }

    public function getInvoiceTitle()
    {
        return $this->invoiceTitle;
    }

    private $invoiceAmount;

    public function setInvoiceAmount($invoiceAmount): void
    {
        $this->invoiceAmount = $invoiceAmount;
        $this->apiParas['invoiceAmount'] = $invoiceAmount;
    }

    public function getInvoiceAmount()
    {
        return $this->invoiceAmount;
    }

    private $invoiceDate;

    public function setInvoiceDate($invoiceDate): void
    {
        $this->invoiceDate = $invoiceDate;
        $this->apiParas['invoiceDate'] = $invoiceDate;
    }

    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    private $invoiceImgBase64;

    public function setInvoiceImgBase64($invoiceImgBase64): void
    {
        $this->invoiceImgBase64 = $invoiceImgBase64;
        $this->apiParas['invoiceImgBase64'] = $invoiceImgBase64;
    }

    public function getInvoiceImgBase64()
    {
        return $this->invoiceImgBase64;
    }
}
