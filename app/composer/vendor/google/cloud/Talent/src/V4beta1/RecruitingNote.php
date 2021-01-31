<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/profile.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * RecruitingNote represents a note/comment regarding the recruiting for a
 * candidate. For example, "This candidate is a potential match for a frontend
 * engineer at SF".
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.RecruitingNote</code>
 */
class RecruitingNote extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional.
     * The content of note.
     * Number of characters allowed is 4,000.
     *
     * Generated from protobuf field <code>string note = 1;</code>
     */
    private $note = '';
    /**
     * Optional.
     * The person who wrote the notes.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string commenter = 2;</code>
     */
    private $commenter = '';
    /**
     * Optional.
     * The create date of the note.
     *
     * Generated from protobuf field <code>.google.type.Date create_date = 3;</code>
     */
    private $create_date = null;
    /**
     * Optional.
     * The note type.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string type = 4;</code>
     */
    private $type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $note
     *           Optional.
     *           The content of note.
     *           Number of characters allowed is 4,000.
     *     @type string $commenter
     *           Optional.
     *           The person who wrote the notes.
     *           Number of characters allowed is 100.
     *     @type \Google\Type\Date $create_date
     *           Optional.
     *           The create date of the note.
     *     @type string $type
     *           Optional.
     *           The note type.
     *           Number of characters allowed is 100.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Profile::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional.
     * The content of note.
     * Number of characters allowed is 4,000.
     *
     * Generated from protobuf field <code>string note = 1;</code>
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Optional.
     * The content of note.
     * Number of characters allowed is 4,000.
     *
     * Generated from protobuf field <code>string note = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNote($var)
    {
        GPBUtil::checkString($var, True);
        $this->note = $var;

        return $this;
    }

    /**
     * Optional.
     * The person who wrote the notes.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string commenter = 2;</code>
     * @return string
     */
    public function getCommenter()
    {
        return $this->commenter;
    }

    /**
     * Optional.
     * The person who wrote the notes.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string commenter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCommenter($var)
    {
        GPBUtil::checkString($var, True);
        $this->commenter = $var;

        return $this;
    }

    /**
     * Optional.
     * The create date of the note.
     *
     * Generated from protobuf field <code>.google.type.Date create_date = 3;</code>
     * @return \Google\Type\Date
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * Optional.
     * The create date of the note.
     *
     * Generated from protobuf field <code>.google.type.Date create_date = 3;</code>
     * @param \Google\Type\Date $var
     * @return $this
     */
    public function setCreateDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Date::class);
        $this->create_date = $var;

        return $this;
    }

    /**
     * Optional.
     * The note type.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string type = 4;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Optional.
     * The note type.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string type = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

}
