<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/application_service.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for updating a specified application.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.UpdateApplicationRequest</code>
 */
class UpdateApplicationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The application resource to replace the current resource in the system.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Application application = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $application = null;
    /**
     * Strongly recommended for the best service experience.
     * If [update_mask][google.cloud.talent.v4beta1.UpdateApplicationRequest.update_mask] is provided, only the specified fields in
     * [application][google.cloud.talent.v4beta1.UpdateApplicationRequest.application] are updated. Otherwise all the fields are updated.
     * A field mask to specify the application fields to be updated. Only
     * top level fields of [Application][google.cloud.talent.v4beta1.Application] are supported.
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
     *     @type \Google\Cloud\Talent\V4beta1\Application $application
     *           Required. The application resource to replace the current resource in the system.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Strongly recommended for the best service experience.
     *           If [update_mask][google.cloud.talent.v4beta1.UpdateApplicationRequest.update_mask] is provided, only the specified fields in
     *           [application][google.cloud.talent.v4beta1.UpdateApplicationRequest.application] are updated. Otherwise all the fields are updated.
     *           A field mask to specify the application fields to be updated. Only
     *           top level fields of [Application][google.cloud.talent.v4beta1.Application] are supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\ApplicationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The application resource to replace the current resource in the system.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Application application = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Talent\V4beta1\Application
     */
    public function getApplication()
    {
        return isset($this->application) ? $this->application : null;
    }

    public function hasApplication()
    {
        return isset($this->application);
    }

    public function clearApplication()
    {
        unset($this->application);
    }

    /**
     * Required. The application resource to replace the current resource in the system.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Application application = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Talent\V4beta1\Application $var
     * @return $this
     */
    public function setApplication($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Talent\V4beta1\Application::class);
        $this->application = $var;

        return $this;
    }

    /**
     * Strongly recommended for the best service experience.
     * If [update_mask][google.cloud.talent.v4beta1.UpdateApplicationRequest.update_mask] is provided, only the specified fields in
     * [application][google.cloud.talent.v4beta1.UpdateApplicationRequest.application] are updated. Otherwise all the fields are updated.
     * A field mask to specify the application fields to be updated. Only
     * top level fields of [Application][google.cloud.talent.v4beta1.Application] are supported.
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
     * Strongly recommended for the best service experience.
     * If [update_mask][google.cloud.talent.v4beta1.UpdateApplicationRequest.update_mask] is provided, only the specified fields in
     * [application][google.cloud.talent.v4beta1.UpdateApplicationRequest.application] are updated. Otherwise all the fields are updated.
     * A field mask to specify the application fields to be updated. Only
     * top level fields of [Application][google.cloud.talent.v4beta1.Application] are supported.
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
