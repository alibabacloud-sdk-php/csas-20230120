<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateRegistrationPolicyRequest\companyLimitCount;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateRegistrationPolicyRequest\personalLimitCount;
use AlibabaCloud\Tea\Model;

class UpdateRegistrationPolicyRequest extends Model
{
    /**
     * @var companyLimitCount
     */
    public $companyLimitCount;

    /**
     * @example LimitAll
     *
     * @var string
     */
    public $companyLimitType;

    /**
     * @var string
     */
    public $description;

    /**
     * @example UserGroupNormal
     *
     * @var string
     */
    public $matchMode;

    /**
     * @example registration_policy_name
     *
     * @var string
     */
    public $name;

    /**
     * @var personalLimitCount
     */
    public $personalLimitCount;

    /**
     * @example LimitDiff
     *
     * @var string
     */
    public $personalLimitType;

    /**
     * @description This parameter is required.
     *
     * @example reg-policy-63b2f1844b86****
     *
     * @var string
     */
    public $policyId;

    /**
     * @example 0
     *
     * @var int
     */
    public $priority;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $userGroupIds;

    /**
     * @var string[]
     */
    public $whitelist;
    protected $_name = [
        'companyLimitCount'  => 'CompanyLimitCount',
        'companyLimitType'   => 'CompanyLimitType',
        'description'        => 'Description',
        'matchMode'          => 'MatchMode',
        'name'               => 'Name',
        'personalLimitCount' => 'PersonalLimitCount',
        'personalLimitType'  => 'PersonalLimitType',
        'policyId'           => 'PolicyId',
        'priority'           => 'Priority',
        'status'             => 'Status',
        'userGroupIds'       => 'UserGroupIds',
        'whitelist'          => 'Whitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->companyLimitCount) {
            $res['CompanyLimitCount'] = null !== $this->companyLimitCount ? $this->companyLimitCount->toMap() : null;
        }
        if (null !== $this->companyLimitType) {
            $res['CompanyLimitType'] = $this->companyLimitType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->matchMode) {
            $res['MatchMode'] = $this->matchMode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->personalLimitCount) {
            $res['PersonalLimitCount'] = null !== $this->personalLimitCount ? $this->personalLimitCount->toMap() : null;
        }
        if (null !== $this->personalLimitType) {
            $res['PersonalLimitType'] = $this->personalLimitType;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userGroupIds) {
            $res['UserGroupIds'] = $this->userGroupIds;
        }
        if (null !== $this->whitelist) {
            $res['Whitelist'] = $this->whitelist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRegistrationPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompanyLimitCount'])) {
            $model->companyLimitCount = companyLimitCount::fromMap($map['CompanyLimitCount']);
        }
        if (isset($map['CompanyLimitType'])) {
            $model->companyLimitType = $map['CompanyLimitType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MatchMode'])) {
            $model->matchMode = $map['MatchMode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PersonalLimitCount'])) {
            $model->personalLimitCount = personalLimitCount::fromMap($map['PersonalLimitCount']);
        }
        if (isset($map['PersonalLimitType'])) {
            $model->personalLimitType = $map['PersonalLimitType'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = $map['UserGroupIds'];
            }
        }
        if (isset($map['Whitelist'])) {
            if (!empty($map['Whitelist'])) {
                $model->whitelist = $map['Whitelist'];
            }
        }

        return $model;
    }
}
