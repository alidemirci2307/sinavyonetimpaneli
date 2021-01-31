<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SecurityPoliciesListPreconfiguredExpressionSetsResponse</code>
 */
class SecurityPoliciesListPreconfiguredExpressionSetsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPoliciesWafConfig preconfigured_expression_sets = 267765370;</code>
     */
    private $preconfigured_expression_sets = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\SecurityPoliciesWafConfig $preconfigured_expression_sets
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPoliciesWafConfig preconfigured_expression_sets = 267765370;</code>
     * @return \Google\Cloud\Compute\V1\SecurityPoliciesWafConfig
     */
    public function getPreconfiguredExpressionSets()
    {
        return isset($this->preconfigured_expression_sets) ? $this->preconfigured_expression_sets : null;
    }

    public function hasPreconfiguredExpressionSets()
    {
        return isset($this->preconfigured_expression_sets);
    }

    public function clearPreconfiguredExpressionSets()
    {
        unset($this->preconfigured_expression_sets);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPoliciesWafConfig preconfigured_expression_sets = 267765370;</code>
     * @param \Google\Cloud\Compute\V1\SecurityPoliciesWafConfig $var
     * @return $this
     */
    public function setPreconfiguredExpressionSets($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\SecurityPoliciesWafConfig::class);
        $this->preconfigured_expression_sets = $var;

        return $this;
    }

}

