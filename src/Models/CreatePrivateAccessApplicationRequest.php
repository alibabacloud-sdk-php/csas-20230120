<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessApplicationRequest\portRanges;

class CreatePrivateAccessApplicationRequest extends Model
{
    /**
     * @var string[]
     */
    public $addresses;

    /**
     * @var string
     */
    public $browserAccessStatus;

    /**
     * @var string
     */
    public $description;

    /**
     * @var PAL7Config
     */
    public $l7Config;

    /**
     * @var string
     */
    public $l7ProxyDomainAutomaticPrefix;

    /**
     * @var string
     */
    public $l7ProxyDomainCustom;

    /**
     * @var string
     */
    public $name;

    /**
     * @var portRanges[]
     */
    public $portRanges;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $tagIds;
    protected $_name = [
        'addresses' => 'Addresses',
        'browserAccessStatus' => 'BrowserAccessStatus',
        'description' => 'Description',
        'l7Config' => 'L7Config',
        'l7ProxyDomainAutomaticPrefix' => 'L7ProxyDomainAutomaticPrefix',
        'l7ProxyDomainCustom' => 'L7ProxyDomainCustom',
        'name' => 'Name',
        'portRanges' => 'PortRanges',
        'protocol' => 'Protocol',
        'status' => 'Status',
        'tagIds' => 'TagIds',
    ];

    public function validate()
    {
        if (\is_array($this->addresses)) {
            Model::validateArray($this->addresses);
        }
        if (null !== $this->l7Config) {
            $this->l7Config->validate();
        }
        if (\is_array($this->portRanges)) {
            Model::validateArray($this->portRanges);
        }
        if (\is_array($this->tagIds)) {
            Model::validateArray($this->tagIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addresses) {
            if (\is_array($this->addresses)) {
                $res['Addresses'] = [];
                $n1 = 0;
                foreach ($this->addresses as $item1) {
                    $res['Addresses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->browserAccessStatus) {
            $res['BrowserAccessStatus'] = $this->browserAccessStatus;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->l7Config) {
            $res['L7Config'] = null !== $this->l7Config ? $this->l7Config->toArray($noStream) : $this->l7Config;
        }

        if (null !== $this->l7ProxyDomainAutomaticPrefix) {
            $res['L7ProxyDomainAutomaticPrefix'] = $this->l7ProxyDomainAutomaticPrefix;
        }

        if (null !== $this->l7ProxyDomainCustom) {
            $res['L7ProxyDomainCustom'] = $this->l7ProxyDomainCustom;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->portRanges) {
            if (\is_array($this->portRanges)) {
                $res['PortRanges'] = [];
                $n1 = 0;
                foreach ($this->portRanges as $item1) {
                    $res['PortRanges'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tagIds) {
            if (\is_array($this->tagIds)) {
                $res['TagIds'] = [];
                $n1 = 0;
                foreach ($this->tagIds as $item1) {
                    $res['TagIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Addresses'])) {
            if (!empty($map['Addresses'])) {
                $model->addresses = [];
                $n1 = 0;
                foreach ($map['Addresses'] as $item1) {
                    $model->addresses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BrowserAccessStatus'])) {
            $model->browserAccessStatus = $map['BrowserAccessStatus'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['L7Config'])) {
            $model->l7Config = PAL7Config::fromMap($map['L7Config']);
        }

        if (isset($map['L7ProxyDomainAutomaticPrefix'])) {
            $model->l7ProxyDomainAutomaticPrefix = $map['L7ProxyDomainAutomaticPrefix'];
        }

        if (isset($map['L7ProxyDomainCustom'])) {
            $model->l7ProxyDomainCustom = $map['L7ProxyDomainCustom'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PortRanges'])) {
            if (!empty($map['PortRanges'])) {
                $model->portRanges = [];
                $n1 = 0;
                foreach ($map['PortRanges'] as $item1) {
                    $model->portRanges[$n1] = portRanges::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TagIds'])) {
            if (!empty($map['TagIds'])) {
                $model->tagIds = [];
                $n1 = 0;
                foreach ($map['TagIds'] as $item1) {
                    $model->tagIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
