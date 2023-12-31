<?php

declare(strict_types=1);

namespace LJdJos\Request\Domain\KplOpenWfpJmiwareAddWare;

class JmiWareParam
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.JmiWareParam';
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

    private $jWareId;

    public function setJWareId($jWareId): void
    {
        $this->params['jWareId'] = $jWareId;
    }

    public function getJWareId()
    {
        return $this->jWareId;
    }

    private $catId;

    public function setCatId($catId): void
    {
        $this->params['catId'] = $catId;
    }

    public function getCatId()
    {
        return $this->catId;
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

    private $shopId;

    public function setShopId($shopId): void
    {
        $this->params['shopId'] = $shopId;
    }

    public function getShopId()
    {
        return $this->shopId;
    }

    private $title;

    public function setTitle($title): void
    {
        $this->params['title'] = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    private $subTitle;

    public function setSubTitle($subTitle): void
    {
        $this->params['subTitle'] = $subTitle;
    }

    public function getSubTitle()
    {
        return $this->subTitle;
    }

    private $marketPrice;

    public function setMarketPrice($marketPrice): void
    {
        $this->params['marketPrice'] = $marketPrice;
    }

    public function getMarketPrice()
    {
        return $this->marketPrice;
    }

    private $price;

    public function setPrice($price): void
    {
        $this->params['price'] = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    private $outerId;

    public function setOuterId($outerId): void
    {
        $this->params['outerId'] = $outerId;
    }

    public function getOuterId()
    {
        return $this->outerId;
    }

    private $quantity;

    public function setQuantity($quantity): void
    {
        $this->params['quantity'] = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    private $logo;

    public function setLogo($logo): void
    {
        $this->params['logo'] = $logo;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    private $operateType;

    public function setOperateType($operateType): void
    {
        $this->params['operateType'] = $operateType;
    }

    public function getOperateType()
    {
        return $this->operateType;
    }

    private $note;

    public function setNote($note): void
    {
        $this->params['note'] = $note;
    }

    public function getNote()
    {
        return $this->note;
    }

    private $wareImages;

    public function setWareImages($wareImages): void
    {
        $size = \count($wareImages);
        for ($i = 0; $i < $size; ++$i) {
            $wareImages[$i] = $wareImages[$i]->getInstance()
            ;
        }
        $this->params['wareImages'] = $wareImages;
    }

    private $features;

    public function setFeatures($features): void
    {
        $this->params['features'] = $features->getInstance()
        ;
    }

    private $url;

    public function setUrl($url): void
    {
        $this->params['url'] = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }

    private $urlWord;

    public function setUrlWord($urlWord): void
    {
        $this->params['urlWord'] = $urlWord;
    }

    public function getUrlWord()
    {
        return $this->urlWord;
    }

    private $onlineTime;

    public function setOnlineTime($onlineTime): void
    {
        $this->params['onlineTime'] = $onlineTime;
    }

    public function getOnlineTime()
    {
        return $this->onlineTime;
    }

    private $offlineTime;

    public function setOfflineTime($offlineTime): void
    {
        $this->params['offlineTime'] = $offlineTime;
    }

    public function getOfflineTime()
    {
        return $this->offlineTime;
    }

    private $appNote;

    public function setAppNote($appNote): void
    {
        $this->params['appNote'] = $appNote;
    }

    public function getAppNote()
    {
        return $this->appNote;
    }

    private $shopCategory;

    public function setShopCategory($shopCategory): void
    {
        $this->params['shopCategory'] = $shopCategory;
    }

    public function getShopCategory()
    {
        return $this->shopCategory;
    }

    private $wareSettingList;

    public function setWareSettingList($wareSettingList): void
    {
        $size = \count($wareSettingList);
        for ($i = 0; $i < $size; ++$i) {
            $wareSettingList[$i] = $wareSettingList[$i]->getInstance()
            ;
        }
        $this->params['wareSettingList'] = $wareSettingList;
    }

    private $categorySettingList;

    public function setCategorySettingList($categorySettingList): void
    {
        $size = \count($categorySettingList);
        for ($i = 0; $i < $size; ++$i) {
            $categorySettingList[$i] = $categorySettingList[$i]->getInstance()
            ;
        }
        $this->params['categorySettingList'] = $categorySettingList;
    }

    private $skus;

    public function setSkus($skus): void
    {
        $size = \count($skus);
        for ($i = 0; $i < $size; ++$i) {
            $skus[$i] = $skus[$i]->getInstance()
            ;
        }
        $this->params['skus'] = $skus;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
