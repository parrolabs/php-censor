<?php

namespace PHPCensor\Model\Base;

use PHPCensor\Model;

class BuildMeta extends Model
{
    /**
     * @var array
     */
    protected $data = [
        'id'         => null,
        'build_id'   => null,
        'meta_key'   => null,
        'meta_value' => null,
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
     *
     * @return boolean
     */
    public function setId($value)
    {
        $this->validateNotNull('id', $value);
        $this->validateInt('id', $value);

        if ($this->data['id'] === $value) {
            return false;
        }

        $this->data['id'] = $value;

        return $this->setModified('id');
    }

    /**
     * @return integer
     */
    public function getBuildId()
    {
        return (integer)$this->data['build_id'];
    }

    /**
     * @param integer $value
     *
     * @return boolean
     */
    public function setBuildId($value)
    {
        $this->validateNotNull('build_id', $value);
        $this->validateInt('build_id', $value);

        if ($this->data['build_id'] === $value) {
            return false ;
        }

        $this->data['build_id'] = $value;

        return $this->setModified('build_id');
    }

    /**
     * @return string
     */
    public function getMetaKey()
    {
        return $this->data['meta_key'];
    }

    /**
     * @param string $value
     *
     * @return boolean
     */
    public function setMetaKey($value)
    {
        $this->validateNotNull('meta_key', $value);
        $this->validateString('meta_key', $value);

        if ($this->data['meta_key'] === $value) {
            return false;
        }

        $this->data['meta_key'] = $value;

        return $this->setModified('meta_key');
    }

    /**
     * @return string
     */
    public function getMetaValue()
    {
        return $this->data['meta_value'];
    }

    /**
     * @param string $value
     *
     * @return boolean
     */
    public function setMetaValue($value)
    {
        $this->validateNotNull('meta_value', $value);
        $this->validateString('meta_value', $value);

        if ($this->data['meta_value'] === $value) {
            return false;
        }

        $this->data['meta_value'] = $value;

        return $this->setModified('meta_value');
    }
}
