<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Time window specified for daily maintenance operations. GCE's internal maintenance will be performed within this window.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NodeGroupMaintenanceWindow</code>
 */
class NodeGroupMaintenanceWindow extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output only] A predetermined duration for the window, automatically chosen to be the smallest possible in the given scenario.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration maintenance_duration = 256856384;</code>
     */
    private $maintenance_duration = null;
    /**
     * Start time of the window. This must be in UTC format that resolves to one of 00:00, 04:00, 08:00, 12:00, 16:00, or 20:00. For example, both 13:00-5 and 08:00 are valid.
     *
     * Generated from protobuf field <code>string start_time = 37467274;</code>
     */
    private $start_time = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\Duration $maintenance_duration
     *           [Output only] A predetermined duration for the window, automatically chosen to be the smallest possible in the given scenario.
     *     @type string $start_time
     *           Start time of the window. This must be in UTC format that resolves to one of 00:00, 04:00, 08:00, 12:00, 16:00, or 20:00. For example, both 13:00-5 and 08:00 are valid.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output only] A predetermined duration for the window, automatically chosen to be the smallest possible in the given scenario.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration maintenance_duration = 256856384;</code>
     * @return \Google\Cloud\Compute\V1\Duration
     */
    public function getMaintenanceDuration()
    {
        return isset($this->maintenance_duration) ? $this->maintenance_duration : null;
    }

    public function hasMaintenanceDuration()
    {
        return isset($this->maintenance_duration);
    }

    public function clearMaintenanceDuration()
    {
        unset($this->maintenance_duration);
    }

    /**
     * [Output only] A predetermined duration for the window, automatically chosen to be the smallest possible in the given scenario.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration maintenance_duration = 256856384;</code>
     * @param \Google\Cloud\Compute\V1\Duration $var
     * @return $this
     */
    public function setMaintenanceDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Duration::class);
        $this->maintenance_duration = $var;

        return $this;
    }

    /**
     * Start time of the window. This must be in UTC format that resolves to one of 00:00, 04:00, 08:00, 12:00, 16:00, or 20:00. For example, both 13:00-5 and 08:00 are valid.
     *
     * Generated from protobuf field <code>string start_time = 37467274;</code>
     * @return string
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Start time of the window. This must be in UTC format that resolves to one of 00:00, 04:00, 08:00, 12:00, 16:00, or 20:00. For example, both 13:00-5 and 08:00 are valid.
     *
     * Generated from protobuf field <code>string start_time = 37467274;</code>
     * @param string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_time = $var;

        return $this;
    }

}

