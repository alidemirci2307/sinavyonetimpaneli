<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.TargetSslProxiesSetProxyHeaderRequest</code>
 */
class TargetSslProxiesSetProxyHeaderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The new type of proxy header to append before sending data to the backend. NONE or PROXY_V1 are allowed.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TargetSslProxiesSetProxyHeaderRequest.ProxyHeader proxy_header = 160374142;</code>
     */
    private $proxy_header = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $proxy_header
     *           The new type of proxy header to append before sending data to the backend. NONE or PROXY_V1 are allowed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The new type of proxy header to append before sending data to the backend. NONE or PROXY_V1 are allowed.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TargetSslProxiesSetProxyHeaderRequest.ProxyHeader proxy_header = 160374142;</code>
     * @return int
     */
    public function getProxyHeader()
    {
        return $this->proxy_header;
    }

    /**
     * The new type of proxy header to append before sending data to the backend. NONE or PROXY_V1 are allowed.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TargetSslProxiesSetProxyHeaderRequest.ProxyHeader proxy_header = 160374142;</code>
     * @param int $var
     * @return $this
     */
    public function setProxyHeader($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\TargetSslProxiesSetProxyHeaderRequest\ProxyHeader::class);
        $this->proxy_header = $var;

        return $this;
    }

}

