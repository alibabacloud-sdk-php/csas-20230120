<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmExtractTaskRequest\csvControl;

class CreateWmExtractTaskRequest extends Model
{
    /**
     * @var csvControl
     */
    public $csvControl;

    /**
     * @var bool
     */
    public $documentIsCapture;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $filename;

    /**
     * @var bool
     */
    public $isClientEmbed;

    /**
     * @var bool
     */
    public $videoIsLong;

    /**
     * @var string
     */
    public $videoSpeed;

    /**
     * @var int
     */
    public $wmInfoSize;

    /**
     * @var string
     */
    public $wmType;
    protected $_name = [
        'csvControl' => 'CsvControl',
        'documentIsCapture' => 'DocumentIsCapture',
        'fileUrl' => 'FileUrl',
        'filename' => 'Filename',
        'isClientEmbed' => 'IsClientEmbed',
        'videoIsLong' => 'VideoIsLong',
        'videoSpeed' => 'VideoSpeed',
        'wmInfoSize' => 'WmInfoSize',
        'wmType' => 'WmType',
    ];

    public function validate()
    {
        if (null !== $this->csvControl) {
            $this->csvControl->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->csvControl) {
            $res['CsvControl'] = null !== $this->csvControl ? $this->csvControl->toArray($noStream) : $this->csvControl;
        }

        if (null !== $this->documentIsCapture) {
            $res['DocumentIsCapture'] = $this->documentIsCapture;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->filename) {
            $res['Filename'] = $this->filename;
        }

        if (null !== $this->isClientEmbed) {
            $res['IsClientEmbed'] = $this->isClientEmbed;
        }

        if (null !== $this->videoIsLong) {
            $res['VideoIsLong'] = $this->videoIsLong;
        }

        if (null !== $this->videoSpeed) {
            $res['VideoSpeed'] = $this->videoSpeed;
        }

        if (null !== $this->wmInfoSize) {
            $res['WmInfoSize'] = $this->wmInfoSize;
        }

        if (null !== $this->wmType) {
            $res['WmType'] = $this->wmType;
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
        if (isset($map['CsvControl'])) {
            $model->csvControl = csvControl::fromMap($map['CsvControl']);
        }

        if (isset($map['DocumentIsCapture'])) {
            $model->documentIsCapture = $map['DocumentIsCapture'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['Filename'])) {
            $model->filename = $map['Filename'];
        }

        if (isset($map['IsClientEmbed'])) {
            $model->isClientEmbed = $map['IsClientEmbed'];
        }

        if (isset($map['VideoIsLong'])) {
            $model->videoIsLong = $map['VideoIsLong'];
        }

        if (isset($map['VideoSpeed'])) {
            $model->videoSpeed = $map['VideoSpeed'];
        }

        if (isset($map['WmInfoSize'])) {
            $model->wmInfoSize = $map['WmInfoSize'];
        }

        if (isset($map['WmType'])) {
            $model->wmType = $map['WmType'];
        }

        return $model;
    }
}
