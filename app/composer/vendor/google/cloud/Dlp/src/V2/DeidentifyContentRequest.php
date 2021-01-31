<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to de-identify a list of items.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DeidentifyContentRequest</code>
 */
class DeidentifyContentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Parent resource name.
     * The format of this value varies depending on whether you have [specified a
     * processing
     * location](https://cloud.google.com/dlp/docs/specifying-location):
     * + Projects scope, location specified:<br/>
     *   `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     * + Projects scope, no location specified (defaults to global):<br/>
     *   `projects/`<var>PROJECT_ID</var>
     * The following example `parent` string specifies a parent project with the
     * identifier `example-project`, and specifies the `europe-west3` location
     * for processing data:
     *     parent=projects/example-project/locations/europe-west3
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Configuration for the de-identification of the content item.
     * Items specified here will override the template referenced by the
     * deidentify_template_name argument.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DeidentifyConfig deidentify_config = 2;</code>
     */
    private $deidentify_config = null;
    /**
     * Configuration for the inspector.
     * Items specified here will override the template referenced by the
     * inspect_template_name argument.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectConfig inspect_config = 3;</code>
     */
    private $inspect_config = null;
    /**
     * The item to de-identify. Will be treated as text.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ContentItem item = 4;</code>
     */
    private $item = null;
    /**
     * Template to use. Any configuration directly specified in
     * inspect_config will override those set in the template. Singular fields
     * that are set in this request will replace their corresponding fields in the
     * template. Repeated fields are appended. Singular sub-messages and groups
     * are recursively merged.
     *
     * Generated from protobuf field <code>string inspect_template_name = 5;</code>
     */
    private $inspect_template_name = '';
    /**
     * Template to use. Any configuration directly specified in
     * deidentify_config will override those set in the template. Singular fields
     * that are set in this request will replace their corresponding fields in the
     * template. Repeated fields are appended. Singular sub-messages and groups
     * are recursively merged.
     *
     * Generated from protobuf field <code>string deidentify_template_name = 6;</code>
     */
    private $deidentify_template_name = '';
    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 7;</code>
     */
    private $location_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Parent resource name.
     *           The format of this value varies depending on whether you have [specified a
     *           processing
     *           location](https://cloud.google.com/dlp/docs/specifying-location):
     *           + Projects scope, location specified:<br/>
     *             `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     *           + Projects scope, no location specified (defaults to global):<br/>
     *             `projects/`<var>PROJECT_ID</var>
     *           The following example `parent` string specifies a parent project with the
     *           identifier `example-project`, and specifies the `europe-west3` location
     *           for processing data:
     *               parent=projects/example-project/locations/europe-west3
     *     @type \Google\Cloud\Dlp\V2\DeidentifyConfig $deidentify_config
     *           Configuration for the de-identification of the content item.
     *           Items specified here will override the template referenced by the
     *           deidentify_template_name argument.
     *     @type \Google\Cloud\Dlp\V2\InspectConfig $inspect_config
     *           Configuration for the inspector.
     *           Items specified here will override the template referenced by the
     *           inspect_template_name argument.
     *     @type \Google\Cloud\Dlp\V2\ContentItem $item
     *           The item to de-identify. Will be treated as text.
     *     @type string $inspect_template_name
     *           Template to use. Any configuration directly specified in
     *           inspect_config will override those set in the template. Singular fields
     *           that are set in this request will replace their corresponding fields in the
     *           template. Repeated fields are appended. Singular sub-messages and groups
     *           are recursively merged.
     *     @type string $deidentify_template_name
     *           Template to use. Any configuration directly specified in
     *           deidentify_config will override those set in the template. Singular fields
     *           that are set in this request will replace their corresponding fields in the
     *           template. Repeated fields are appended. Singular sub-messages and groups
     *           are recursively merged.
     *     @type string $location_id
     *           Deprecated. This field has no effect.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Parent resource name.
     * The format of this value varies depending on whether you have [specified a
     * processing
     * location](https://cloud.google.com/dlp/docs/specifying-location):
     * + Projects scope, location specified:<br/>
     *   `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     * + Projects scope, no location specified (defaults to global):<br/>
     *   `projects/`<var>PROJECT_ID</var>
     * The following example `parent` string specifies a parent project with the
     * identifier `example-project`, and specifies the `europe-west3` location
     * for processing data:
     *     parent=projects/example-project/locations/europe-west3
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Parent resource name.
     * The format of this value varies depending on whether you have [specified a
     * processing
     * location](https://cloud.google.com/dlp/docs/specifying-location):
     * + Projects scope, location specified:<br/>
     *   `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     * + Projects scope, no location specified (defaults to global):<br/>
     *   `projects/`<var>PROJECT_ID</var>
     * The following example `parent` string specifies a parent project with the
     * identifier `example-project`, and specifies the `europe-west3` location
     * for processing data:
     *     parent=projects/example-project/locations/europe-west3
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Configuration for the de-identification of the content item.
     * Items specified here will override the template referenced by the
     * deidentify_template_name argument.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DeidentifyConfig deidentify_config = 2;</code>
     * @return \Google\Cloud\Dlp\V2\DeidentifyConfig
     */
    public function getDeidentifyConfig()
    {
        return isset($this->deidentify_config) ? $this->deidentify_config : null;
    }

    public function hasDeidentifyConfig()
    {
        return isset($this->deidentify_config);
    }

    public function clearDeidentifyConfig()
    {
        unset($this->deidentify_config);
    }

    /**
     * Configuration for the de-identification of the content item.
     * Items specified here will override the template referenced by the
     * deidentify_template_name argument.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DeidentifyConfig deidentify_config = 2;</code>
     * @param \Google\Cloud\Dlp\V2\DeidentifyConfig $var
     * @return $this
     */
    public function setDeidentifyConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DeidentifyConfig::class);
        $this->deidentify_config = $var;

        return $this;
    }

    /**
     * Configuration for the inspector.
     * Items specified here will override the template referenced by the
     * inspect_template_name argument.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectConfig inspect_config = 3;</code>
     * @return \Google\Cloud\Dlp\V2\InspectConfig
     */
    public function getInspectConfig()
    {
        return isset($this->inspect_config) ? $this->inspect_config : null;
    }

    public function hasInspectConfig()
    {
        return isset($this->inspect_config);
    }

    public function clearInspectConfig()
    {
        unset($this->inspect_config);
    }

    /**
     * Configuration for the inspector.
     * Items specified here will override the template referenced by the
     * inspect_template_name argument.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectConfig inspect_config = 3;</code>
     * @param \Google\Cloud\Dlp\V2\InspectConfig $var
     * @return $this
     */
    public function setInspectConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\InspectConfig::class);
        $this->inspect_config = $var;

        return $this;
    }

    /**
     * The item to de-identify. Will be treated as text.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ContentItem item = 4;</code>
     * @return \Google\Cloud\Dlp\V2\ContentItem
     */
    public function getItem()
    {
        return isset($this->item) ? $this->item : null;
    }

    public function hasItem()
    {
        return isset($this->item);
    }

    public function clearItem()
    {
        unset($this->item);
    }

    /**
     * The item to de-identify. Will be treated as text.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ContentItem item = 4;</code>
     * @param \Google\Cloud\Dlp\V2\ContentItem $var
     * @return $this
     */
    public function setItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\ContentItem::class);
        $this->item = $var;

        return $this;
    }

    /**
     * Template to use. Any configuration directly specified in
     * inspect_config will override those set in the template. Singular fields
     * that are set in this request will replace their corresponding fields in the
     * template. Repeated fields are appended. Singular sub-messages and groups
     * are recursively merged.
     *
     * Generated from protobuf field <code>string inspect_template_name = 5;</code>
     * @return string
     */
    public function getInspectTemplateName()
    {
        return $this->inspect_template_name;
    }

    /**
     * Template to use. Any configuration directly specified in
     * inspect_config will override those set in the template. Singular fields
     * that are set in this request will replace their corresponding fields in the
     * template. Repeated fields are appended. Singular sub-messages and groups
     * are recursively merged.
     *
     * Generated from protobuf field <code>string inspect_template_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setInspectTemplateName($var)
    {
        GPBUtil::checkString($var, True);
        $this->inspect_template_name = $var;

        return $this;
    }

    /**
     * Template to use. Any configuration directly specified in
     * deidentify_config will override those set in the template. Singular fields
     * that are set in this request will replace their corresponding fields in the
     * template. Repeated fields are appended. Singular sub-messages and groups
     * are recursively merged.
     *
     * Generated from protobuf field <code>string deidentify_template_name = 6;</code>
     * @return string
     */
    public function getDeidentifyTemplateName()
    {
        return $this->deidentify_template_name;
    }

    /**
     * Template to use. Any configuration directly specified in
     * deidentify_config will override those set in the template. Singular fields
     * that are set in this request will replace their corresponding fields in the
     * template. Repeated fields are appended. Singular sub-messages and groups
     * are recursively merged.
     *
     * Generated from protobuf field <code>string deidentify_template_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDeidentifyTemplateName($var)
    {
        GPBUtil::checkString($var, True);
        $this->deidentify_template_name = $var;

        return $this;
    }

    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 7;</code>
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setLocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->location_id = $var;

        return $this;
    }

}

