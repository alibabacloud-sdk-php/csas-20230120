<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateApprovalProcessResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\CreateApprovalProcessResponseBody\process\appUninstallPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateApprovalProcessResponseBody\process\deviceRegistrationPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateApprovalProcessResponseBody\process\dlpSendPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateApprovalProcessResponseBody\process\domainBlacklistPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateApprovalProcessResponseBody\process\domainWhitelistPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateApprovalProcessResponseBody\process\endpointHardeningPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateApprovalProcessResponseBody\process\peripheralBlockPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateApprovalProcessResponseBody\process\softwareBlockPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateApprovalProcessResponseBody\process\softwareHardeningPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\undefined;
use AlibabaCloud\Tea\Model;

class process extends Model
{
    /**
     * @var appUninstallPolicies
     */
    public $appUninstallPolicies;

    /**
     * @example 2022-10-25 10:44:09
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var deviceRegistrationPolicies
     */
    public $deviceRegistrationPolicies;

    /**
     * @var dlpSendPolicies
     */
    public $dlpSendPolicies;

    /**
     * @var domainBlacklistPolicies
     */
    public $domainBlacklistPolicies;

    /**
     * @var domainWhitelistPolicies
     */
    public $domainWhitelistPolicies;

    /**
     * @var endpointHardeningPolicies
     */
    public $endpointHardeningPolicies;

    /**
     * @var peripheralBlockPolicies
     */
    public $peripheralBlockPolicies;

    /**
     * @example approval-process-dc61e92ba5c5****
     *
     * @var string
     */
    public $processId;

    /**
     * @var string
     */
    public $processName;

    /**
     * @var undefined[][]
     */
    public $processNodes;

    /**
     * @var softwareBlockPolicies
     */
    public $softwareBlockPolicies;

    /**
     * @var softwareHardeningPolicies
     */
    public $softwareHardeningPolicies;
    protected $_name = [
        'appUninstallPolicies' => 'AppUninstallPolicies',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'deviceRegistrationPolicies' => 'DeviceRegistrationPolicies',
        'dlpSendPolicies' => 'DlpSendPolicies',
        'domainBlacklistPolicies' => 'DomainBlacklistPolicies',
        'domainWhitelistPolicies' => 'DomainWhitelistPolicies',
        'endpointHardeningPolicies' => 'EndpointHardeningPolicies',
        'peripheralBlockPolicies' => 'PeripheralBlockPolicies',
        'processId' => 'ProcessId',
        'processName' => 'ProcessName',
        'processNodes' => 'ProcessNodes',
        'softwareBlockPolicies' => 'SoftwareBlockPolicies',
        'softwareHardeningPolicies' => 'SoftwareHardeningPolicies',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appUninstallPolicies) {
            $res['AppUninstallPolicies'] = null !== $this->appUninstallPolicies ? $this->appUninstallPolicies->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->deviceRegistrationPolicies) {
            $res['DeviceRegistrationPolicies'] = null !== $this->deviceRegistrationPolicies ? $this->deviceRegistrationPolicies->toMap() : null;
        }
        if (null !== $this->dlpSendPolicies) {
            $res['DlpSendPolicies'] = null !== $this->dlpSendPolicies ? $this->dlpSendPolicies->toMap() : null;
        }
        if (null !== $this->domainBlacklistPolicies) {
            $res['DomainBlacklistPolicies'] = null !== $this->domainBlacklistPolicies ? $this->domainBlacklistPolicies->toMap() : null;
        }
        if (null !== $this->domainWhitelistPolicies) {
            $res['DomainWhitelistPolicies'] = null !== $this->domainWhitelistPolicies ? $this->domainWhitelistPolicies->toMap() : null;
        }
        if (null !== $this->endpointHardeningPolicies) {
            $res['EndpointHardeningPolicies'] = null !== $this->endpointHardeningPolicies ? $this->endpointHardeningPolicies->toMap() : null;
        }
        if (null !== $this->peripheralBlockPolicies) {
            $res['PeripheralBlockPolicies'] = null !== $this->peripheralBlockPolicies ? $this->peripheralBlockPolicies->toMap() : null;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->processNodes) {
            $res['ProcessNodes'] = $this->processNodes;
        }
        if (null !== $this->softwareBlockPolicies) {
            $res['SoftwareBlockPolicies'] = null !== $this->softwareBlockPolicies ? $this->softwareBlockPolicies->toMap() : null;
        }
        if (null !== $this->softwareHardeningPolicies) {
            $res['SoftwareHardeningPolicies'] = null !== $this->softwareHardeningPolicies ? $this->softwareHardeningPolicies->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return process
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppUninstallPolicies'])) {
            $model->appUninstallPolicies = appUninstallPolicies::fromMap($map['AppUninstallPolicies']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DeviceRegistrationPolicies'])) {
            $model->deviceRegistrationPolicies = deviceRegistrationPolicies::fromMap($map['DeviceRegistrationPolicies']);
        }
        if (isset($map['DlpSendPolicies'])) {
            $model->dlpSendPolicies = dlpSendPolicies::fromMap($map['DlpSendPolicies']);
        }
        if (isset($map['DomainBlacklistPolicies'])) {
            $model->domainBlacklistPolicies = domainBlacklistPolicies::fromMap($map['DomainBlacklistPolicies']);
        }
        if (isset($map['DomainWhitelistPolicies'])) {
            $model->domainWhitelistPolicies = domainWhitelistPolicies::fromMap($map['DomainWhitelistPolicies']);
        }
        if (isset($map['EndpointHardeningPolicies'])) {
            $model->endpointHardeningPolicies = endpointHardeningPolicies::fromMap($map['EndpointHardeningPolicies']);
        }
        if (isset($map['PeripheralBlockPolicies'])) {
            $model->peripheralBlockPolicies = peripheralBlockPolicies::fromMap($map['PeripheralBlockPolicies']);
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['ProcessNodes'])) {
            if (!empty($map['ProcessNodes'])) {
                $model->processNodes = $map['ProcessNodes'];
            }
        }
        if (isset($map['SoftwareBlockPolicies'])) {
            $model->softwareBlockPolicies = softwareBlockPolicies::fromMap($map['SoftwareBlockPolicies']);
        }
        if (isset($map['SoftwareHardeningPolicies'])) {
            $model->softwareHardeningPolicies = softwareHardeningPolicies::fromMap($map['SoftwareHardeningPolicies']);
        }

        return $model;
    }
}
