<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/reservation/v1/reservation.proto

namespace Google\Cloud\BigQuery\Reservation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [ReservationService.UpdateCapacityCommitment][google.cloud.bigquery.reservation.v1.ReservationService.UpdateCapacityCommitment].
 *
 * Generated from protobuf message <code>google.cloud.bigquery.reservation.v1.UpdateCapacityCommitmentRequest</code>
 */
class UpdateCapacityCommitmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Content of the capacity commitment to update.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.CapacityCommitment capacity_commitment = 1;</code>
     */
    private $capacity_commitment = null;
    /**
     * Standard field mask for the set of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment $capacity_commitment
     *           Content of the capacity commitment to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Standard field mask for the set of fields to be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Reservation\V1\Reservation::initOnce();
        parent::__construct($data);
    }

    /**
     * Content of the capacity commitment to update.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.CapacityCommitment capacity_commitment = 1;</code>
     * @return \Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment
     */
    public function getCapacityCommitment()
    {
        return isset($this->capacity_commitment) ? $this->capacity_commitment : null;
    }

    public function hasCapacityCommitment()
    {
        return isset($this->capacity_commitment);
    }

    public function clearCapacityCommitment()
    {
        unset($this->capacity_commitment);
    }

    /**
     * Content of the capacity commitment to update.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.CapacityCommitment capacity_commitment = 1;</code>
     * @param \Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment $var
     * @return $this
     */
    public function setCapacityCommitment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment::class);
        $this->capacity_commitment = $var;

        return $this;
    }

    /**
     * Standard field mask for the set of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return isset($this->update_mask) ? $this->update_mask : null;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Standard field mask for the set of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

