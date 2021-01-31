<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Snapshot;

use UnexpectedValueException;

/**
 * [Output Only] The status of the snapshot. This can be CREATING, DELETING, FAILED, READY, or UPLOADING.
 *
 * Protobuf type <code>google.cloud.compute.v1.Snapshot.Status</code>
 */
class Status
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_STATUS = 0;</code>
     */
    const UNDEFINED_STATUS = 0;
    /**
     * Generated from protobuf enum <code>CREATING = 187129529;</code>
     */
    const CREATING = 187129529;
    /**
     * Generated from protobuf enum <code>DELETING = 260166568;</code>
     */
    const DELETING = 260166568;
    /**
     * Generated from protobuf enum <code>FAILED = 187271229;</code>
     */
    const FAILED = 187271229;
    /**
     * Generated from protobuf enum <code>READY = 77848963;</code>
     */
    const READY = 77848963;
    /**
     * Generated from protobuf enum <code>UPLOADING = 267603489;</code>
     */
    const UPLOADING = 267603489;

    private static $valueToName = [
        self::UNDEFINED_STATUS => 'UNDEFINED_STATUS',
        self::CREATING => 'CREATING',
        self::DELETING => 'DELETING',
        self::FAILED => 'FAILED',
        self::READY => 'READY',
        self::UPLOADING => 'UPLOADING',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


