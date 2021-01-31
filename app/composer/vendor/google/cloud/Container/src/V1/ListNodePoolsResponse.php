<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ListNodePoolsResponse is the result of ListNodePoolsRequest.
 *
 * Generated from protobuf message <code>google.container.v1.ListNodePoolsResponse</code>
 */
class ListNodePoolsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of node pools for a cluster.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.NodePool node_pools = 1;</code>
     */
    private $node_pools;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Container\V1\NodePool[]|\Google\Protobuf\Internal\RepeatedField $node_pools
     *           A list of node pools for a cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of node pools for a cluster.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.NodePool node_pools = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodePools()
    {
        return $this->node_pools;
    }

    /**
     * A list of node pools for a cluster.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.NodePool node_pools = 1;</code>
     * @param \Google\Cloud\Container\V1\NodePool[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNodePools($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Container\V1\NodePool::class);
        $this->node_pools = $arr;

        return $this;
    }

}

