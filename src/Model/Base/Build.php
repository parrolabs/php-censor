<?php

namespace PHPCensor\Model\Base;

use PHPCensor\Model;

class Build extends Model
{
    const STATUS_PENDING = 0;
    const STATUS_RUNNING = 1;
    const STATUS_SUCCESS = 2;
    const STATUS_FAILED  = 3;

    const SOURCE_UNKNOWN              = 0;
    const SOURCE_MANUAL_WEB           = 1;
    const SOURCE_MANUAL_CONSOLE       = 2;
    const SOURCE_PERIODICAL           = 3;
    const SOURCE_WEBHOOK              = 4;
    const SOURCE_WEBHOOK_PULL_REQUEST = 5;

    /**
     * @var array
     */
    protected $data = [
        'id'              => null,
        'project_id'      => null,
        'commit_id'       => null,
        'status'          => null,
        'log'             => null,
        'branch'          => null,
        'tag'             => null,
        'create_date'     => null,
        'start_date'      => null,
        'finish_date'     => null,
        'committer_email' => null,
        'commit_message'  => null,
        'extra'           => null,
        'environment'     => null,
        'source'          => Build::SOURCE_UNKNOWN,
        'user_id'         => 0,
    ];

    /**
     * @return integer
     */
    public function getId()
    {
        return (integer)$this->data['id'];
    }

    /**
     * @param integer $value
     */
    public function setId($value)
    {
        $this->validateNotNull('id', $value);
        $this->validateInt('id', $value);

        if ($this->data['id'] === $value) {
            return;
        }

        $this->data['id'] = (integer)$value;

        $this->setModified('id');
    }

    /**
     * @return integer
     */
    public function getProjectId()
    {
        return (integer)$this->data['project_id'];
    }

    /**
     * @param integer $value
     */
    public function setProjectId($value)
    {
        $this->validateNotNull('project_id', $value);
        $this->validateInt('project_id', $value);

        if ($this->data['project_id'] === $value) {
            return;
        }

        $this->data['project_id'] = $value;

        $this->setModified('project_id');
    }

    /**
     * @return string
     */
    public function getCommitId()
    {
        return $this->data['commit_id'];
    }

    /**
     * @param string $value
     */
    public function setCommitId($value)
    {
        $this->validateNotNull('commit_id', $value);
        $this->validateString('commit_id', $value);

        if ($this->data['commit_id'] === $value) {
            return;
        }

        $this->data['commit_id'] = $value;

        $this->setModified('commit_id');
    }

    /**
     * @return integer
     */
    public function getStatus()
    {
        return (integer)$this->data['status'];
    }

    /**
     * @param integer $value
     */
    public function setStatus($value)
    {
        $this->validateNotNull('status', $value);
        $this->validateInt('status', $value);

        if ($this->data['status'] === $value) {
            return;
        }

        $this->data['status'] = $value;

        $this->setModified('status');
    }

    /**
     * @return string
     */
    public function getLog()
    {
        return $this->data['log'];
    }

    /**
     * @param string $value
     */
    public function setLog($value)
    {
        $this->validateString('log', $value);

        if ($this->data['log'] === $value) {
            return;
        }

        $this->data['log'] = $value;

        $this->setModified('log');
    }

    /**
     * @return string
     */
    public function getBranch()
    {
        return $this->data['branch'];
    }

    /**
     * @param string $value
     */
    public function setBranch($value)
    {
        $this->validateNotNull('branch', $value);
        $this->validateString('branch', $value);

        if ($this->data['branch'] === $value) {
            return;
        }

        $this->data['branch'] = $value;

        $this->setModified('branch');
    }

    /**
     * @return string
     */
    public function getTag()
    {
        return $this->data['tag'];
    }

    /**
     * @param string $value
     */
    public function setTag($value)
    {
        $this->validateString('tag', $value);

        if ($this->data['tag'] === $value) {
            return;
        }

        $this->data['tag'] = $value;

        $this->setModified('tag');
    }

    /**
     * @return \DateTime|null
     */
    public function getCreateDate()
    {
        if ($this->data['create_date']) {
            return new \DateTime($this->data['create_date']);
        }

        return null;
    }

    /**
     * @param \DateTime $value
     */
    public function setCreateDate(\DateTime $value)
    {
        $stringValue = $value->format('Y-m-d H:i:s');

        if ($this->data['create_date'] === $stringValue) {
            return;
        }

        $this->data['create_date'] = $stringValue;

        $this->setModified('create_date');
    }

    /**
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        if ($this->data['start_date']) {
            return new \DateTime($this->data['start_date']);
        }

        return null;
    }

    /**
     * @param \DateTime $value
     */
    public function setStartDate(\DateTime $value)
    {
        $stringValue = $value->format('Y-m-d H:i:s');

        if ($this->data['start_date'] === $stringValue) {
            return;
        }

        $this->data['start_date'] = $stringValue;

        $this->setModified('start_date');
    }

    /**
     * @return \DateTime|null
     */
    public function getFinishDate()
    {
        if ($this->data['finish_date']) {
            return new \DateTime($this->data['finish_date']);
        }

        return null;
    }

    /**
     * @param \DateTime $value
     */
    public function setFinishDate(\DateTime $value)
    {
        $stringValue = $value->format('Y-m-d H:i:s');

        if ($this->data['finish_date'] === $stringValue) {
            return;
        }

        $this->data['finish_date'] = $stringValue;

        $this->setModified('finish_date');
    }

    /**
     * @return string
     */
    public function getCommitterEmail()
    {
        return $this->data['committer_email'];
    }

    /**
     * @param string $value
     */
    public function setCommitterEmail($value)
    {
        $this->validateString('committer_email', $value);

        if ($this->data['committer_email'] === $value) {
            return;
        }

        $this->data['committer_email'] = $value;

        $this->setModified('committer_email');
    }

    /**
     * @return string
     */
    public function getCommitMessage()
    {
        return $this->data['commit_message'];
    }

    /**
     * @param string $value
     */
    public function setCommitMessage($value)
    {
        $this->validateString('commit_message', $value);

        if ($this->data['commit_message'] === $value) {
            return;
        }

        $this->data['commit_message'] = $value;

        $this->setModified('commit_message');
    }

    /**
     * @param string|null $key
     *
     * @return array|string|null
     */
    public function getExtra($key = null)
    {
        $data  = json_decode($this->data['extra'], true);
        $extra = null;
        if (is_null($key)) {
            $extra = $data;
        } elseif (isset($data[$key])) {
            $extra = $data[$key];
        }

        return $extra;
    }

    /**
     * @param array $value
     */
    public function setExtra(array $value)
    {
        $this->validateNotNull('branches', $value);

        $extra = json_encode($value);
        if ($this->data['extra'] === $extra) {
            return;
        }

        $this->data['extra'] = $extra;

        $this->setModified('extra');
    }

    /**
     * @return string
     */
    public function getEnvironment()
    {
        return $this->data['environment'];
    }

    /**
     * @param string $value
     */
    public function setEnvironment($value)
    {
        $this->validateString('environment', $value);

        if ($this->data['environment'] === $value) {
            return;
        }

        $this->data['environment'] = $value;

        $this->setModified('environment');
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return (integer)$this->data['source'];
    }

    /**
     * @param integer $value
     */
    public function setSource($value)
    {
        $this->validateInt('source', $value);

        if ($this->data['source'] === $value) {
            return;
        }

        $this->data['source'] = $value;

        $this->setModified('source');
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return (integer)$this->data['user_id'];
    }

    /**
     * @param integer $value
     */
    public function setUserId($value)
    {
        $this->validateNotNull('user_id', $value);
        $this->validateInt('user_id', $value);

        if ($this->data['user_id'] === $value) {
            return;
        }

        $this->data['user_id'] = $value;

        $this->setModified('user_id');
    }
}
