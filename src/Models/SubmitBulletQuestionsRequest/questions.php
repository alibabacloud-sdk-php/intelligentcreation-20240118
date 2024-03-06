<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240118\Models\SubmitBulletQuestionsRequest;

use AlibabaCloud\Tea\Model;

class questions extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example 21007
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'content'  => 'content',
        'id'       => 'id',
        'username' => 'username',
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
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return questions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
