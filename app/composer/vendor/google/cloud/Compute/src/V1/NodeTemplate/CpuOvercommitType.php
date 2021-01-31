<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\NodeTemplate;

use UnexpectedValueException;

/**
 * CPU overcommit.
 *
 * Protobuf type <code>google.cloud.compute.v1.NodeTemplate.CpuOvercommitType</code>
 */
class CpuOvercommitType
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_CPU_OVERCOMMIT_TYPE = 0;</code>
     */
    const UNDEFINED_CPU_OVERCOMMIT_TYPE = 0;
    /**
     * Generated from protobuf enum <code>CPU_OVERCOMMIT_TYPE_UNSPECIFIED = 252230159;</code>
     */
    const CPU_OVERCOMMIT_TYPE_UNSPECIFIED = 252230159;
    /**
     * Generated from protobuf enum <code>ENABLED = 182130465;</code>
     */
    const ENABLED = 182130465;
    /**
     * Generated from protobuf enum <code>NONE = 2402104;</code>
     */
    const NONE = 2402104;

    private static $valueToName = [
        self::UNDEFINED_CPU_OVERCOMMIT_TYPE => 'UNDEFINED_CPU_OVERCOMMIT_TYPE',
        self::CPU_OVERCOMMIT_TYPE_UNSPECIFIED => 'CPU_OVERCOMMIT_TYPE_UNSPECIFIED',
        self::ENABLED => 'ENABLED',
        self::NONE => 'NONE',
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


