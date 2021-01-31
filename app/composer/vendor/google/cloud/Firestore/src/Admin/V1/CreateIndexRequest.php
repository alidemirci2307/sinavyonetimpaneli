<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/firestore_admin.proto

namespace Google\Cloud\Firestore\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [FirestoreAdmin.CreateIndex][google.firestore.admin.v1.FirestoreAdmin.CreateIndex].
 *
 * Generated from protobuf message <code>google.firestore.admin.v1.CreateIndexRequest</code>
 */
class CreateIndexRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A parent name of the form
     * `projects/{project_id}/databases/{database_id}/collectionGroups/{collection_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The composite index to create.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Index index = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $index = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. A parent name of the form
     *           `projects/{project_id}/databases/{database_id}/collectionGroups/{collection_id}`
     *     @type \Google\Cloud\Firestore\Admin\V1\Index $index
     *           Required. The composite index to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\Admin\V1\FirestoreAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A parent name of the form
     * `projects/{project_id}/databases/{database_id}/collectionGroups/{collection_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. A parent name of the form
     * `projects/{project_id}/databases/{database_id}/collectionGroups/{collection_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The composite index to create.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Index index = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Firestore\Admin\V1\Index
     */
    public function getIndex()
    {
        return isset($this->index) ? $this->index : null;
    }

    public function hasIndex()
    {
        return isset($this->index);
    }

    public function clearIndex()
    {
        unset($this->index);
    }

    /**
     * Required. The composite index to create.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Index index = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Firestore\Admin\V1\Index $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\Admin\V1\Index::class);
        $this->index = $var;

        return $this;
    }

}

