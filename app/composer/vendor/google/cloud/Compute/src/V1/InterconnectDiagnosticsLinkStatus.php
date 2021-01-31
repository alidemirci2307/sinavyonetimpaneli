<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InterconnectDiagnosticsLinkStatus</code>
 */
class InterconnectDiagnosticsLinkStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of InterconnectDiagnostics.ARPEntry objects, describing the ARP neighbor entries seen on this link. This will be empty if the link is bundled
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InterconnectDiagnosticsARPEntry arp_caches = 146156305;</code>
     */
    private $arp_caches;
    /**
     * The unique ID for this link assigned during turn up by Google.
     *
     * Generated from protobuf field <code>string circuit_id = 225180977;</code>
     */
    private $circuit_id = '';
    /**
     * The Demarc address assigned by Google and provided in the LoA.
     *
     * Generated from protobuf field <code>string google_demarc = 51084;</code>
     */
    private $google_demarc = '';
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.InterconnectDiagnosticsLinkLACPStatus lacp_status = 92774959;</code>
     */
    private $lacp_status = null;
    /**
     * An InterconnectDiagnostics.LinkOpticalPower object, describing the current value and status of the received light level.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InterconnectDiagnosticsLinkOpticalPower receiving_optical_power = 244717279;</code>
     */
    private $receiving_optical_power = null;
    /**
     * An InterconnectDiagnostics.LinkOpticalPower object, describing the current value and status of the transmitted light level.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InterconnectDiagnosticsLinkOpticalPower transmitting_optical_power = 190995741;</code>
     */
    private $transmitting_optical_power = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\InterconnectDiagnosticsARPEntry[]|\Google\Protobuf\Internal\RepeatedField $arp_caches
     *           A list of InterconnectDiagnostics.ARPEntry objects, describing the ARP neighbor entries seen on this link. This will be empty if the link is bundled
     *     @type string $circuit_id
     *           The unique ID for this link assigned during turn up by Google.
     *     @type string $google_demarc
     *           The Demarc address assigned by Google and provided in the LoA.
     *     @type \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkLACPStatus $lacp_status
     *     @type \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkOpticalPower $receiving_optical_power
     *           An InterconnectDiagnostics.LinkOpticalPower object, describing the current value and status of the received light level.
     *     @type \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkOpticalPower $transmitting_optical_power
     *           An InterconnectDiagnostics.LinkOpticalPower object, describing the current value and status of the transmitted light level.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of InterconnectDiagnostics.ARPEntry objects, describing the ARP neighbor entries seen on this link. This will be empty if the link is bundled
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InterconnectDiagnosticsARPEntry arp_caches = 146156305;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArpCaches()
    {
        return $this->arp_caches;
    }

    /**
     * A list of InterconnectDiagnostics.ARPEntry objects, describing the ARP neighbor entries seen on this link. This will be empty if the link is bundled
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InterconnectDiagnosticsARPEntry arp_caches = 146156305;</code>
     * @param \Google\Cloud\Compute\V1\InterconnectDiagnosticsARPEntry[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArpCaches($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\InterconnectDiagnosticsARPEntry::class);
        $this->arp_caches = $arr;

        return $this;
    }

    /**
     * The unique ID for this link assigned during turn up by Google.
     *
     * Generated from protobuf field <code>string circuit_id = 225180977;</code>
     * @return string
     */
    public function getCircuitId()
    {
        return $this->circuit_id;
    }

    /**
     * The unique ID for this link assigned during turn up by Google.
     *
     * Generated from protobuf field <code>string circuit_id = 225180977;</code>
     * @param string $var
     * @return $this
     */
    public function setCircuitId($var)
    {
        GPBUtil::checkString($var, True);
        $this->circuit_id = $var;

        return $this;
    }

    /**
     * The Demarc address assigned by Google and provided in the LoA.
     *
     * Generated from protobuf field <code>string google_demarc = 51084;</code>
     * @return string
     */
    public function getGoogleDemarc()
    {
        return $this->google_demarc;
    }

    /**
     * The Demarc address assigned by Google and provided in the LoA.
     *
     * Generated from protobuf field <code>string google_demarc = 51084;</code>
     * @param string $var
     * @return $this
     */
    public function setGoogleDemarc($var)
    {
        GPBUtil::checkString($var, True);
        $this->google_demarc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.InterconnectDiagnosticsLinkLACPStatus lacp_status = 92774959;</code>
     * @return \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkLACPStatus
     */
    public function getLacpStatus()
    {
        return isset($this->lacp_status) ? $this->lacp_status : null;
    }

    public function hasLacpStatus()
    {
        return isset($this->lacp_status);
    }

    public function clearLacpStatus()
    {
        unset($this->lacp_status);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.InterconnectDiagnosticsLinkLACPStatus lacp_status = 92774959;</code>
     * @param \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkLACPStatus $var
     * @return $this
     */
    public function setLacpStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkLACPStatus::class);
        $this->lacp_status = $var;

        return $this;
    }

    /**
     * An InterconnectDiagnostics.LinkOpticalPower object, describing the current value and status of the received light level.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InterconnectDiagnosticsLinkOpticalPower receiving_optical_power = 244717279;</code>
     * @return \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkOpticalPower
     */
    public function getReceivingOpticalPower()
    {
        return isset($this->receiving_optical_power) ? $this->receiving_optical_power : null;
    }

    public function hasReceivingOpticalPower()
    {
        return isset($this->receiving_optical_power);
    }

    public function clearReceivingOpticalPower()
    {
        unset($this->receiving_optical_power);
    }

    /**
     * An InterconnectDiagnostics.LinkOpticalPower object, describing the current value and status of the received light level.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InterconnectDiagnosticsLinkOpticalPower receiving_optical_power = 244717279;</code>
     * @param \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkOpticalPower $var
     * @return $this
     */
    public function setReceivingOpticalPower($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkOpticalPower::class);
        $this->receiving_optical_power = $var;

        return $this;
    }

    /**
     * An InterconnectDiagnostics.LinkOpticalPower object, describing the current value and status of the transmitted light level.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InterconnectDiagnosticsLinkOpticalPower transmitting_optical_power = 190995741;</code>
     * @return \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkOpticalPower
     */
    public function getTransmittingOpticalPower()
    {
        return isset($this->transmitting_optical_power) ? $this->transmitting_optical_power : null;
    }

    public function hasTransmittingOpticalPower()
    {
        return isset($this->transmitting_optical_power);
    }

    public function clearTransmittingOpticalPower()
    {
        unset($this->transmitting_optical_power);
    }

    /**
     * An InterconnectDiagnostics.LinkOpticalPower object, describing the current value and status of the transmitted light level.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InterconnectDiagnosticsLinkOpticalPower transmitting_optical_power = 190995741;</code>
     * @param \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkOpticalPower $var
     * @return $this
     */
    public function setTransmittingOpticalPower($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkOpticalPower::class);
        $this->transmitting_optical_power = $var;

        return $this;
    }

}

