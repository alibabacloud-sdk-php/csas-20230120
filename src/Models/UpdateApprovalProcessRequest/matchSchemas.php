<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessRequest;

use AlibabaCloud\Dara\Model;

class matchSchemas extends Model
{
    /**
     * @var string
     */
    public $appUninstallSchemaId;

    /**
     * @var string
     */
    public $deviceRegistrationSchemaId;

    /**
     * @var string
     */
    public $dlpSendSchemaId;

    /**
     * @var string
     */
    public $domainBlacklistSchemaId;

    /**
     * @var string
     */
    public $domainWhitelistSchemaId;

    /**
     * @var string
     */
    public $endpointHardeningSchemaId;

    /**
     * @var string
     */
    public $peripheralBlockSchemaId;

    /**
     * @var string
     */
    public $softwareBlockSchemaId;

    /**
     * @var string
     */
    public $softwareHardeningSchemaId;
    protected $_name = [
        'appUninstallSchemaId' => 'AppUninstallSchemaId',
        'deviceRegistrationSchemaId' => 'DeviceRegistrationSchemaId',
        'dlpSendSchemaId' => 'DlpSendSchemaId',
        'domainBlacklistSchemaId' => 'DomainBlacklistSchemaId',
        'domainWhitelistSchemaId' => 'DomainWhitelistSchemaId',
        'endpointHardeningSchemaId' => 'EndpointHardeningSchemaId',
        'peripheralBlockSchemaId' => 'PeripheralBlockSchemaId',
        'softwareBlockSchemaId' => 'SoftwareBlockSchemaId',
        'softwareHardeningSchemaId' => 'SoftwareHardeningSchemaId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appUninstallSchemaId) {
            $res['AppUninstallSchemaId'] = $this->appUninstallSchemaId;
        }

        if (null !== $this->deviceRegistrationSchemaId) {
            $res['DeviceRegistrationSchemaId'] = $this->deviceRegistrationSchemaId;
        }

        if (null !== $this->dlpSendSchemaId) {
            $res['DlpSendSchemaId'] = $this->dlpSendSchemaId;
        }

        if (null !== $this->domainBlacklistSchemaId) {
            $res['DomainBlacklistSchemaId'] = $this->domainBlacklistSchemaId;
        }

        if (null !== $this->domainWhitelistSchemaId) {
            $res['DomainWhitelistSchemaId'] = $this->domainWhitelistSchemaId;
        }

        if (null !== $this->endpointHardeningSchemaId) {
            $res['EndpointHardeningSchemaId'] = $this->endpointHardeningSchemaId;
        }

        if (null !== $this->peripheralBlockSchemaId) {
            $res['PeripheralBlockSchemaId'] = $this->peripheralBlockSchemaId;
        }

        if (null !== $this->softwareBlockSchemaId) {
            $res['SoftwareBlockSchemaId'] = $this->softwareBlockSchemaId;
        }

        if (null !== $this->softwareHardeningSchemaId) {
            $res['SoftwareHardeningSchemaId'] = $this->softwareHardeningSchemaId;
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
        if (isset($map['AppUninstallSchemaId'])) {
            $model->appUninstallSchemaId = $map['AppUninstallSchemaId'];
        }

        if (isset($map['DeviceRegistrationSchemaId'])) {
            $model->deviceRegistrationSchemaId = $map['DeviceRegistrationSchemaId'];
        }

        if (isset($map['DlpSendSchemaId'])) {
            $model->dlpSendSchemaId = $map['DlpSendSchemaId'];
        }

        if (isset($map['DomainBlacklistSchemaId'])) {
            $model->domainBlacklistSchemaId = $map['DomainBlacklistSchemaId'];
        }

        if (isset($map['DomainWhitelistSchemaId'])) {
            $model->domainWhitelistSchemaId = $map['DomainWhitelistSchemaId'];
        }

        if (isset($map['EndpointHardeningSchemaId'])) {
            $model->endpointHardeningSchemaId = $map['EndpointHardeningSchemaId'];
        }

        if (isset($map['PeripheralBlockSchemaId'])) {
            $model->peripheralBlockSchemaId = $map['PeripheralBlockSchemaId'];
        }

        if (isset($map['SoftwareBlockSchemaId'])) {
            $model->softwareBlockSchemaId = $map['SoftwareBlockSchemaId'];
        }

        if (isset($map['SoftwareHardeningSchemaId'])) {
            $model->softwareHardeningSchemaId = $map['SoftwareHardeningSchemaId'];
        }

        return $model;
    }
}
