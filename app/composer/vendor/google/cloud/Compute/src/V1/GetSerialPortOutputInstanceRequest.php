<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for Instances.GetSerialPortOutput. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetSerialPortOutputInstanceRequest</code>
 */
class GetSerialPortOutputInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the instance for this request.
     *
     * Generated from protobuf field <code>string instance = 18257045 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instance = '';
    /**
     * Specifies which COM or serial port to retrieve data from.
     *
     * Generated from protobuf field <code>int32 port = 3446913;</code>
     */
    private $port = 0;
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';
    /**
     * Specifies the starting byte position of the output to return. To start with the first byte of output to the specified port, omit this field or set it to `0`.
     * If the output for that byte position is available, this field matches the `start` parameter sent with the request. If the amount of serial console output exceeds the size of the buffer (1 MB), the oldest output is discarded and is no longer available. If the requested start position refers to discarded output, the start position is adjusted to the oldest output still available, and the adjusted start position is returned as the `start` property value.
     * You can also provide a negative start position, which translates to the most recent number of bytes written to the serial port. For example, -3 is interpreted as the most recent 3 bytes written to the serial console.
     *
     * Generated from protobuf field <code>string start = 109757538;</code>
     */
    private $start = '';
    /**
     * The name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $zone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance
     *           Name of the instance for this request.
     *     @type int $port
     *           Specifies which COM or serial port to retrieve data from.
     *     @type string $project
     *           Project ID for this request.
     *     @type string $start
     *           Specifies the starting byte position of the output to return. To start with the first byte of output to the specified port, omit this field or set it to `0`.
     *           If the output for that byte position is available, this field matches the `start` parameter sent with the request. If the amount of serial console output exceeds the size of the buffer (1 MB), the oldest output is discarded and is no longer available. If the requested start position refers to discarded output, the start position is adjusted to the oldest output still available, and the adjusted start position is returned as the `start` property value.
     *           You can also provide a negative start position, which translates to the most recent number of bytes written to the serial port. For example, -3 is interpreted as the most recent 3 bytes written to the serial console.
     *     @type string $zone
     *           The name of the zone for this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the instance for this request.
     *
     * Generated from protobuf field <code>string instance = 18257045 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Name of the instance for this request.
     *
     * Generated from protobuf field <code>string instance = 18257045 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Specifies which COM or serial port to retrieve data from.
     *
     * Generated from protobuf field <code>int32 port = 3446913;</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Specifies which COM or serial port to retrieve data from.
     *
     * Generated from protobuf field <code>int32 port = 3446913;</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->port = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Specifies the starting byte position of the output to return. To start with the first byte of output to the specified port, omit this field or set it to `0`.
     * If the output for that byte position is available, this field matches the `start` parameter sent with the request. If the amount of serial console output exceeds the size of the buffer (1 MB), the oldest output is discarded and is no longer available. If the requested start position refers to discarded output, the start position is adjusted to the oldest output still available, and the adjusted start position is returned as the `start` property value.
     * You can also provide a negative start position, which translates to the most recent number of bytes written to the serial port. For example, -3 is interpreted as the most recent 3 bytes written to the serial console.
     *
     * Generated from protobuf field <code>string start = 109757538;</code>
     * @return string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Specifies the starting byte position of the output to return. To start with the first byte of output to the specified port, omit this field or set it to `0`.
     * If the output for that byte position is available, this field matches the `start` parameter sent with the request. If the amount of serial console output exceeds the size of the buffer (1 MB), the oldest output is discarded and is no longer available. If the requested start position refers to discarded output, the start position is adjusted to the oldest output still available, and the adjusted start position is returned as the `start` property value.
     * You can also provide a negative start position, which translates to the most recent number of bytes written to the serial port. For example, -3 is interpreted as the most recent 3 bytes written to the serial console.
     *
     * Generated from protobuf field <code>string start = 109757538;</code>
     * @param string $var
     * @return $this
     */
    public function setStart($var)
    {
        GPBUtil::checkString($var, True);
        $this->start = $var;

        return $this;
    }

    /**
     * The name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * The name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

