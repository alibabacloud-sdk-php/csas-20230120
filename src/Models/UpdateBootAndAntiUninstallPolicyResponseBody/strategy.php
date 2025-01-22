<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\UpdateBootAndAntiUninstallPolicyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateBootAndAntiUninstallPolicyResponseBody\strategy\blockContent;

class strategy extends Model
{
    /**
     * @var bool
     */
    public $allowReport;
    /**
     * @var blockContent
     */
    public $blockContent;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var bool
     */
    public $isAntiUninstall;
    /**
     * @var bool
     */
    public $isBoot;
    /**
     * @var string
     */
    public $policyId;
    /**
     * @var string
     */
    public $reportProcessId;
    /**
     * @var string
     */
    public $updateTime;
    /**
     * @var string[]
     */
    public $userGroupIds;
    /**
     * @var string[]
     */
    public $whitelistUsers;
    protected $_name = [
        'allowReport'     => 'AllowReport',
        'blockContent'    => 'BlockContent',
        'createTime'      => 'CreateTime',
        'isAntiUninstall' => 'IsAntiUninstall',
        'isBoot'          => 'IsBoot',
        'policyId'        => 'PolicyId',
        'reportProcessId' => 'ReportProcessId',
        'updateTime'      => 'UpdateTime',
        'userGroupIds'    => 'UserGroupIds',
        'whitelistUsers'  => 'WhitelistUsers',
    ];

    public function validate()
    {
        if (null !== $this->blockContent) {
            $this->blockContent->validate();
        }
        if (\is_array($this->userGroupIds)) {
            Model::validateArray($this->userGroupIds);
        }
        if (\is_array($this->whitelistUsers)) {
            Model::validateArray($this->whitelistUsers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowReport) {
            $res['AllowReport'] = $this->allowReport;
        }

        if (null !== $this->blockContent) {
            $res['BlockContent'] = null !== $this->blockContent ? $this->blockContent->toArray($noStream) : $this->blockContent;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->isAntiUninstall) {
            $res['IsAntiUninstall'] = $this->isAntiUninstall;
        }

        if (null !== $this->isBoot) {
            $res['IsBoot'] = $this->isBoot;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->reportProcessId) {
            $res['ReportProcessId'] = $this->reportProcessId;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->userGroupIds) {
            if (\is_array($this->userGroupIds)) {
                $res['UserGroupIds'] = [];
                $n1                  = 0;
                foreach ($this->userGroupIds as $item1) {
                    $res['UserGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->whitelistUsers) {
            if (\is_array($this->whitelistUsers)) {
                $res['WhitelistUsers'] = [];
                $n1                    = 0;
                foreach ($this->whitelistUsers as $item1) {
                    $res['WhitelistUsers'][$n1++] = $item1;
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
        if (isset($map['AllowReport'])) {
            $model->allowReport = $map['AllowReport'];
        }

        if (isset($map['BlockContent'])) {
            $model->blockContent = blockContent::fromMap($map['BlockContent']);
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['IsAntiUninstall'])) {
            $model->isAntiUninstall = $map['IsAntiUninstall'];
        }

        if (isset($map['IsBoot'])) {
            $model->isBoot = $map['IsBoot'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['ReportProcessId'])) {
            $model->reportProcessId = $map['ReportProcessId'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = [];
                $n1                  = 0;
                foreach ($map['UserGroupIds'] as $item1) {
                    $model->userGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['WhitelistUsers'])) {
            if (!empty($map['WhitelistUsers'])) {
                $model->whitelistUsers = [];
                $n1                    = 0;
                foreach ($map['WhitelistUsers'] as $item1) {
                    $model->whitelistUsers[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
