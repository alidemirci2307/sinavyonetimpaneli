<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceWithNamedPorts</code>
 */
class InstanceWithNamedPorts extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The URL of the instance.
     *
     * Generated from protobuf field <code>string instance = 18257045;</code>
     */
    private $instance = '';
    /**
     * [Output Only] The named ports that belong to this instance group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NamedPort named_ports = 159163276;</code>
     */
    private $named_ports;
    /**
     * [Output Only] The status of the instance.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InstanceWithNamedPorts.Status status = 181260274;</code>
     */
    private $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance
     *           [Output Only] The URL of the instance.
     *     @type \Google\Cloud\Compute\V1\NamedPort[]|\Google\Protobuf\Internal\RepeatedField $named_ports
     *           [Output Only] The named ports that belong to this instance group.
     *     @type int $status
     *           [Output Only] The status of the instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The URL of the instance.
     *
     * Generated from protobuf field <code>string instance = 18257045;</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * [Output Only] The URL of the instance.
     *
     * Generated from protobuf field <code>string instance = 18257045;</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * [Output Only] The named ports that belong to this instance group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NamedPort named_ports = 159163276;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNamedPorts()
    {
        return $this->named_ports;
    }

    /**
     * [Output Only] The named ports that belong to this instance group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NamedPort named_ports = 159163276;</code>
     * @param \Google\Cloud\Compute\V1\NamedPort[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNamedPorts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\NamedPort::class);
        $this->named_ports = $arr;

        return $this;
    }

    /**
     * [Output Only] The status of the instance.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InstanceWithNamedPorts.Status status = 181260274;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * [Output Only] The status of the instance.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InstanceWithNamedPorts.Status status = 181260274;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\InstanceWithNamedPorts\Status::class);
        $this->status = $var;

        return $this;
    }

}

