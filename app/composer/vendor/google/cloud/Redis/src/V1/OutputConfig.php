<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/v1/cloud_redis.proto

namespace Google\Cloud\Redis\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The output content
 *
 * Generated from protobuf message <code>google.cloud.redis.v1.OutputConfig</code>
 */
class OutputConfig extends \Google\Protobuf\Internal\Message
{
    protected $destination;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Redis\V1\GcsDestination $gcs_destination
     *           Google Cloud Storage destination for output content.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Redis\V1\CloudRedis::initOnce();
        parent::__construct($data);
    }

    /**
     * Google Cloud Storage destination for output content.
     *
     * Generated from protobuf field <code>.google.cloud.redis.v1.GcsDestination gcs_destination = 1;</code>
     * @return \Google\Cloud\Redis\V1\GcsDestination
     */
    public function getGcsDestination()
    {
        return $this->readOneof(1);
    }

    public function hasGcsDestination()
    {
        return $this->hasOneof(1);
    }

    /**
     * Google Cloud Storage destination for output content.
     *
     * Generated from protobuf field <code>.google.cloud.redis.v1.GcsDestination gcs_destination = 1;</code>
     * @param \Google\Cloud\Redis\V1\GcsDestination $var
     * @return $this
     */
    public function setGcsDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Redis\V1\GcsDestination::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->whichOneof("destination");
    }

}

