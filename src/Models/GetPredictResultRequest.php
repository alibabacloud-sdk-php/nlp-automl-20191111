<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20191111\Models;

use AlibabaCloud\Tea\Model;

class GetPredictResultRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $detailTag;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelVersion;

    /**
     * @var int
     */
    public $topK;
    protected $_name = [
        'content'      => 'Content',
        'detailTag'    => 'DetailTag',
        'modelId'      => 'ModelId',
        'modelVersion' => 'ModelVersion',
        'topK'         => 'TopK',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->detailTag) {
            $res['DetailTag'] = $this->detailTag;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->modelVersion) {
            $res['ModelVersion'] = $this->modelVersion;
        }
        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPredictResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DetailTag'])) {
            $model->detailTag = $map['DetailTag'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ModelVersion'])) {
            $model->modelVersion = $map['ModelVersion'];
        }
        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        return $model;
    }
}
