<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListUserGroupsShrinkRequest extends Model
{
    /**
     * @example username
     *
     * @var string
     */
    public $attributeValue;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $name;

    /**
     * @example pa-policy-54a7838a48bf****
     *
     * @var string
     */
    public $PAPolicyId;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $userGroupIdsShrink;
    protected $_name = [
        'attributeValue'     => 'AttributeValue',
        'currentPage'        => 'CurrentPage',
        'name'               => 'Name',
        'PAPolicyId'         => 'PAPolicyId',
        'pageSize'           => 'PageSize',
        'userGroupIdsShrink' => 'UserGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeValue) {
            $res['AttributeValue'] = $this->attributeValue;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->PAPolicyId) {
            $res['PAPolicyId'] = $this->PAPolicyId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->userGroupIdsShrink) {
            $res['UserGroupIds'] = $this->userGroupIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserGroupsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttributeValue'])) {
            $model->attributeValue = $map['AttributeValue'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PAPolicyId'])) {
            $model->PAPolicyId = $map['PAPolicyId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['UserGroupIds'])) {
            $model->userGroupIdsShrink = $map['UserGroupIds'];
        }

        return $model;
    }
}
