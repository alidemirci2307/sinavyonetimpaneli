<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.RouterStatus</code>
 */
class RouterStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Best routes for this router's network.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Route best_routes = 127391237;</code>
     */
    private $best_routes;
    /**
     * Best routes learned by this router.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Route best_routes_for_router = 119389689;</code>
     */
    private $best_routes_for_router;
    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterStatusBgpPeerStatus bgp_peer_status = 218459131;</code>
     */
    private $bgp_peer_status;
    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterStatusNatStatus nat_status = 63098064;</code>
     */
    private $nat_status;
    /**
     * URI of the network to which this router belongs.
     *
     * Generated from protobuf field <code>string network = 232872494;</code>
     */
    private $network = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\Route[]|\Google\Protobuf\Internal\RepeatedField $best_routes
     *           Best routes for this router's network.
     *     @type \Google\Cloud\Compute\V1\Route[]|\Google\Protobuf\Internal\RepeatedField $best_routes_for_router
     *           Best routes learned by this router.
     *     @type \Google\Cloud\Compute\V1\RouterStatusBgpPeerStatus[]|\Google\Protobuf\Internal\RepeatedField $bgp_peer_status
     *     @type \Google\Cloud\Compute\V1\RouterStatusNatStatus[]|\Google\Protobuf\Internal\RepeatedField $nat_status
     *     @type string $network
     *           URI of the network to which this router belongs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Best routes for this router's network.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Route best_routes = 127391237;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBestRoutes()
    {
        return $this->best_routes;
    }

    /**
     * Best routes for this router's network.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Route best_routes = 127391237;</code>
     * @param \Google\Cloud\Compute\V1\Route[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBestRoutes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\Route::class);
        $this->best_routes = $arr;

        return $this;
    }

    /**
     * Best routes learned by this router.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Route best_routes_for_router = 119389689;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBestRoutesForRouter()
    {
        return $this->best_routes_for_router;
    }

    /**
     * Best routes learned by this router.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Route best_routes_for_router = 119389689;</code>
     * @param \Google\Cloud\Compute\V1\Route[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBestRoutesForRouter($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\Route::class);
        $this->best_routes_for_router = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterStatusBgpPeerStatus bgp_peer_status = 218459131;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBgpPeerStatus()
    {
        return $this->bgp_peer_status;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterStatusBgpPeerStatus bgp_peer_status = 218459131;</code>
     * @param \Google\Cloud\Compute\V1\RouterStatusBgpPeerStatus[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBgpPeerStatus($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\RouterStatusBgpPeerStatus::class);
        $this->bgp_peer_status = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterStatusNatStatus nat_status = 63098064;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNatStatus()
    {
        return $this->nat_status;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterStatusNatStatus nat_status = 63098064;</code>
     * @param \Google\Cloud\Compute\V1\RouterStatusNatStatus[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNatStatus($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\RouterStatusNatStatus::class);
        $this->nat_status = $arr;

        return $this;
    }

    /**
     * URI of the network to which this router belongs.
     *
     * Generated from protobuf field <code>string network = 232872494;</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * URI of the network to which this router belongs.
     *
     * Generated from protobuf field <code>string network = 232872494;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

}

