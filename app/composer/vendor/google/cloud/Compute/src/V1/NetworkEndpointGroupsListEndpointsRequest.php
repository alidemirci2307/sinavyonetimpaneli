<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NetworkEndpointGroupsListEndpointsRequest</code>
 */
class NetworkEndpointGroupsListEndpointsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional query parameter for showing the health status of each network endpoint. Valid options are SKIP or SHOW. If you don't specify this parameter, the health status of network endpoints will not be provided.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworkEndpointGroupsListEndpointsRequest.HealthStatus health_status = 112110389;</code>
     */
    private $health_status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $health_status
     *           Optional query parameter for showing the health status of each network endpoint. Valid options are SKIP or SHOW. If you don't specify this parameter, the health status of network endpoints will not be provided.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional query parameter for showing the health status of each network endpoint. Valid options are SKIP or SHOW. If you don't specify this parameter, the health status of network endpoints will not be provided.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworkEndpointGroupsListEndpointsRequest.HealthStatus health_status = 112110389;</code>
     * @return int
     */
    public function getHealthStatus()
    {
        return $this->health_status;
    }

    /**
     * Optional query parameter for showing the health status of each network endpoint. Valid options are SKIP or SHOW. If you don't specify this parameter, the health status of network endpoints will not be provided.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworkEndpointGroupsListEndpointsRequest.HealthStatus health_status = 112110389;</code>
     * @param int $var
     * @return $this
     */
    public function setHealthStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\NetworkEndpointGroupsListEndpointsRequest\HealthStatus::class);
        $this->health_status = $var;

        return $this;
    }

}

