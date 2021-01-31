<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ExchangedPeeringRoute</code>
 */
class ExchangedPeeringRoute extends \Google\Protobuf\Internal\Message
{
    /**
     * The destination range of the route.
     *
     * Generated from protobuf field <code>string dest_range = 112892256;</code>
     */
    private $dest_range = '';
    /**
     * True if the peering route has been imported from a peer. The actual import happens if the field networkPeering.importCustomRoutes is true for this network, and networkPeering.exportCustomRoutes is true for the peer network, and the import does not result in a route conflict.
     *
     * Generated from protobuf field <code>bool imported = 114502404;</code>
     */
    private $imported = false;
    /**
     * The region of peering route next hop, only applies to dynamic routes.
     *
     * Generated from protobuf field <code>string next_hop_region = 122577014;</code>
     */
    private $next_hop_region = '';
    /**
     * The priority of the peering route.
     *
     * Generated from protobuf field <code>uint32 priority = 176716196;</code>
     */
    private $priority = 0;
    /**
     * The type of the peering route.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ExchangedPeeringRoute.Type type = 3575610;</code>
     */
    private $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dest_range
     *           The destination range of the route.
     *     @type bool $imported
     *           True if the peering route has been imported from a peer. The actual import happens if the field networkPeering.importCustomRoutes is true for this network, and networkPeering.exportCustomRoutes is true for the peer network, and the import does not result in a route conflict.
     *     @type string $next_hop_region
     *           The region of peering route next hop, only applies to dynamic routes.
     *     @type int $priority
     *           The priority of the peering route.
     *     @type int $type
     *           The type of the peering route.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The destination range of the route.
     *
     * Generated from protobuf field <code>string dest_range = 112892256;</code>
     * @return string
     */
    public function getDestRange()
    {
        return $this->dest_range;
    }

    /**
     * The destination range of the route.
     *
     * Generated from protobuf field <code>string dest_range = 112892256;</code>
     * @param string $var
     * @return $this
     */
    public function setDestRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->dest_range = $var;

        return $this;
    }

    /**
     * True if the peering route has been imported from a peer. The actual import happens if the field networkPeering.importCustomRoutes is true for this network, and networkPeering.exportCustomRoutes is true for the peer network, and the import does not result in a route conflict.
     *
     * Generated from protobuf field <code>bool imported = 114502404;</code>
     * @return bool
     */
    public function getImported()
    {
        return $this->imported;
    }

    /**
     * True if the peering route has been imported from a peer. The actual import happens if the field networkPeering.importCustomRoutes is true for this network, and networkPeering.exportCustomRoutes is true for the peer network, and the import does not result in a route conflict.
     *
     * Generated from protobuf field <code>bool imported = 114502404;</code>
     * @param bool $var
     * @return $this
     */
    public function setImported($var)
    {
        GPBUtil::checkBool($var);
        $this->imported = $var;

        return $this;
    }

    /**
     * The region of peering route next hop, only applies to dynamic routes.
     *
     * Generated from protobuf field <code>string next_hop_region = 122577014;</code>
     * @return string
     */
    public function getNextHopRegion()
    {
        return $this->next_hop_region;
    }

    /**
     * The region of peering route next hop, only applies to dynamic routes.
     *
     * Generated from protobuf field <code>string next_hop_region = 122577014;</code>
     * @param string $var
     * @return $this
     */
    public function setNextHopRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_hop_region = $var;

        return $this;
    }

    /**
     * The priority of the peering route.
     *
     * Generated from protobuf field <code>uint32 priority = 176716196;</code>
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * The priority of the peering route.
     *
     * Generated from protobuf field <code>uint32 priority = 176716196;</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkUint32($var);
        $this->priority = $var;

        return $this;
    }

    /**
     * The type of the peering route.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ExchangedPeeringRoute.Type type = 3575610;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the peering route.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ExchangedPeeringRoute.Type type = 3575610;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\ExchangedPeeringRoute\Type::class);
        $this->type = $var;

        return $this;
    }

}
