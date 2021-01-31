<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1beta/scan_config.proto

namespace Google\Cloud\WebSecurityScanner\V1beta\ScanConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Scan authentication configuration.
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1beta.ScanConfig.Authentication</code>
 */
class Authentication extends \Google\Protobuf\Internal\Message
{
    protected $authentication;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig\Authentication\GoogleAccount $google_account
     *           Authentication using a Google account.
     *     @type \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig\Authentication\CustomAccount $custom_account
     *           Authentication using a custom account.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\ScanConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Authentication using a Google account.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfig.Authentication.GoogleAccount google_account = 1;</code>
     * @return \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig\Authentication\GoogleAccount
     */
    public function getGoogleAccount()
    {
        return $this->readOneof(1);
    }

    public function hasGoogleAccount()
    {
        return $this->hasOneof(1);
    }

    /**
     * Authentication using a Google account.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfig.Authentication.GoogleAccount google_account = 1;</code>
     * @param \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig\Authentication\GoogleAccount $var
     * @return $this
     */
    public function setGoogleAccount($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig\Authentication\GoogleAccount::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Authentication using a custom account.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfig.Authentication.CustomAccount custom_account = 2;</code>
     * @return \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig\Authentication\CustomAccount
     */
    public function getCustomAccount()
    {
        return $this->readOneof(2);
    }

    public function hasCustomAccount()
    {
        return $this->hasOneof(2);
    }

    /**
     * Authentication using a custom account.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfig.Authentication.CustomAccount custom_account = 2;</code>
     * @param \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig\Authentication\CustomAccount $var
     * @return $this
     */
    public function setCustomAccount($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig\Authentication\CustomAccount::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthentication()
    {
        return $this->whichOneof("authentication");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Authentication::class, \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig_Authentication::class);

