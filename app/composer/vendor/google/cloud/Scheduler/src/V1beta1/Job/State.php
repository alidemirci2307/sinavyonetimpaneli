<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/scheduler/v1beta1/job.proto

namespace Google\Cloud\Scheduler\V1beta1\Job;

use UnexpectedValueException;

/**
 * State of the job.
 *
 * Protobuf type <code>google.cloud.scheduler.v1beta1.Job.State</code>
 */
class State
{
    /**
     * Unspecified state.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The job is executing normally.
     *
     * Generated from protobuf enum <code>ENABLED = 1;</code>
     */
    const ENABLED = 1;
    /**
     * The job is paused by the user. It will not execute. A user can
     * intentionally pause the job using
     * [PauseJobRequest][google.cloud.scheduler.v1beta1.PauseJobRequest].
     *
     * Generated from protobuf enum <code>PAUSED = 2;</code>
     */
    const PAUSED = 2;
    /**
     * The job is disabled by the system due to error. The user
     * cannot directly set a job to be disabled.
     *
     * Generated from protobuf enum <code>DISABLED = 3;</code>
     */
    const DISABLED = 3;
    /**
     * The job state resulting from a failed [CloudScheduler.UpdateJob][google.cloud.scheduler.v1beta1.CloudScheduler.UpdateJob]
     * operation. To recover a job from this state, retry
     * [CloudScheduler.UpdateJob][google.cloud.scheduler.v1beta1.CloudScheduler.UpdateJob] until a successful response is received.
     *
     * Generated from protobuf enum <code>UPDATE_FAILED = 4;</code>
     */
    const UPDATE_FAILED = 4;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::ENABLED => 'ENABLED',
        self::PAUSED => 'PAUSED',
        self::DISABLED => 'DISABLED',
        self::UPDATE_FAILED => 'UPDATE_FAILED',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Google\Cloud\Scheduler\V1beta1\Job_State::class);

