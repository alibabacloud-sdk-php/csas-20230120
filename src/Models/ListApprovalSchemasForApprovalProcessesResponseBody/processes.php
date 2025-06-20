<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalSchemasForApprovalProcessesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalSchemasForApprovalProcessesResponseBody\processes\schemas;

class processes extends Model
{
    /**
     * @var string
     */
    public $processId;

    /**
     * @var schemas[]
     */
    public $schemas;
    protected $_name = [
        'processId' => 'ProcessId',
        'schemas' => 'Schemas',
    ];

    public function validate()
    {
        if (\is_array($this->schemas)) {
            Model::validateArray($this->schemas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }

        if (null !== $this->schemas) {
            if (\is_array($this->schemas)) {
                $res['Schemas'] = [];
                $n1 = 0;
                foreach ($this->schemas as $item1) {
                    $res['Schemas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }

        if (isset($map['Schemas'])) {
            if (!empty($map['Schemas'])) {
                $model->schemas = [];
                $n1 = 0;
                foreach ($map['Schemas'] as $item1) {
                    $model->schemas[$n1] = schemas::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
