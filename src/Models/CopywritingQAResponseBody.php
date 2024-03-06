<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240118\Models;

use AlibabaCloud\Tea\Model;

class CopywritingQAResponseBody extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example 040002
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example Failed to proxy flink ui request, message: An error occurred: Invalid UUID string: jobsn
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example S-f4ef59ee-7219-404a-ac0f-1e149c3f6b41
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'content'      => 'content',
        'errorCode'    => 'errorCode',
        'errorMessage' => 'errorMessage',
        'sessionId'    => 'sessionId',
        'success'      => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopywritingQAResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
