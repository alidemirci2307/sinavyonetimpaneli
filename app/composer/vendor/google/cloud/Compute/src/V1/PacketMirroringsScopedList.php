<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.PacketMirroringsScopedList</code>
 */
class PacketMirroringsScopedList extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of packetMirrorings contained in this scope.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.PacketMirroring packet_mirrorings = 154615079;</code>
     */
    private $packet_mirrorings;
    /**
     * Informational warning which replaces the list of packetMirrorings when the list is empty.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Warning warning = 50704284;</code>
     */
    private $warning = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\PacketMirroring[]|\Google\Protobuf\Internal\RepeatedField $packet_mirrorings
     *           A list of packetMirrorings contained in this scope.
     *     @type \Google\Cloud\Compute\V1\Warning $warning
     *           Informational warning which replaces the list of packetMirrorings when the list is empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of packetMirrorings contained in this scope.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.PacketMirroring packet_mirrorings = 154615079;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPacketMirrorings()
    {
        return $this->packet_mirrorings;
    }

    /**
     * A list of packetMirrorings contained in this scope.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.PacketMirroring packet_mirrorings = 154615079;</code>
     * @param \Google\Cloud\Compute\V1\PacketMirroring[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPacketMirrorings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\PacketMirroring::class);
        $this->packet_mirrorings = $arr;

        return $this;
    }

    /**
     * Informational warning which replaces the list of packetMirrorings when the list is empty.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Warning warning = 50704284;</code>
     * @return \Google\Cloud\Compute\V1\Warning
     */
    public function getWarning()
    {
        return isset($this->warning) ? $this->warning : null;
    }

    public function hasWarning()
    {
        return isset($this->warning);
    }

    public function clearWarning()
    {
        unset($this->warning);
    }

    /**
     * Informational warning which replaces the list of packetMirrorings when the list is empty.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Warning warning = 50704284;</code>
     * @param \Google\Cloud\Compute\V1\Warning $var
     * @return $this
     */
    public function setWarning($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Warning::class);
        $this->warning = $var;

        return $this;
    }

}

