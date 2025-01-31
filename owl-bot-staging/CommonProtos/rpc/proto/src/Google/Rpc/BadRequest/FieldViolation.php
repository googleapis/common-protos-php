<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/rpc/error_details.proto

namespace Google\Rpc\BadRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message type used to describe a single bad request field.
 *
 * Generated from protobuf message <code>google.rpc.BadRequest.FieldViolation</code>
 */
class FieldViolation extends \Google\Protobuf\Internal\Message
{
    /**
     * A path that leads to a field in the request body. The value will be a
     * sequence of dot-separated identifiers that identify a protocol buffer
     * field.
     * Consider the following:
     *     message CreateContactRequest {
     *       message EmailAddress {
     *         enum Type {
     *           TYPE_UNSPECIFIED = 0;
     *           HOME = 1;
     *           WORK = 2;
     *         }
     *         optional string email = 1;
     *         repeated EmailType type = 2;
     *       }
     *       string full_name = 1;
     *       repeated EmailAddress email_addresses = 2;
     *     }
     * In this example, in proto `field` could take one of the following values:
     * * `full_name` for a violation in the `full_name` value
     * * `email_addresses[1].email` for a violation in the `email` field of the
     *   first `email_addresses` message
     * * `email_addresses[3].type[2]` for a violation in the second `type`
     *   value in the third `email_addresses` message.
     * In JSON, the same values are represented as:
     * * `fullName` for a violation in the `fullName` value
     * * `emailAddresses[1].email` for a violation in the `email` field of the
     *   first `emailAddresses` message
     * * `emailAddresses[3].type[2]` for a violation in the second `type`
     *   value in the third `emailAddresses` message.
     *
     * Generated from protobuf field <code>string field = 1;</code>
     */
    protected $field = '';
    /**
     * A description of why the request element is bad.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';
    /**
     * The reason of the field-level error. This is a constant value that
     * identifies the proximate cause of the field-level error. It should
     * uniquely identify the type of the FieldViolation within the scope of the
     * google.rpc.ErrorInfo.domain. This should be at most 63
     * characters and match a regular expression of `[A-Z][A-Z0-9_]+[A-Z0-9]`,
     * which represents UPPER_SNAKE_CASE.
     *
     * Generated from protobuf field <code>string reason = 3;</code>
     */
    protected $reason = '';
    /**
     * Provides a localized error message for field-level errors that is safe to
     * return to the API consumer.
     *
     * Generated from protobuf field <code>.google.rpc.LocalizedMessage localized_message = 4;</code>
     */
    protected $localized_message = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field
     *           A path that leads to a field in the request body. The value will be a
     *           sequence of dot-separated identifiers that identify a protocol buffer
     *           field.
     *           Consider the following:
     *               message CreateContactRequest {
     *                 message EmailAddress {
     *                   enum Type {
     *                     TYPE_UNSPECIFIED = 0;
     *                     HOME = 1;
     *                     WORK = 2;
     *                   }
     *                   optional string email = 1;
     *                   repeated EmailType type = 2;
     *                 }
     *                 string full_name = 1;
     *                 repeated EmailAddress email_addresses = 2;
     *               }
     *           In this example, in proto `field` could take one of the following values:
     *           * `full_name` for a violation in the `full_name` value
     *           * `email_addresses[1].email` for a violation in the `email` field of the
     *             first `email_addresses` message
     *           * `email_addresses[3].type[2]` for a violation in the second `type`
     *             value in the third `email_addresses` message.
     *           In JSON, the same values are represented as:
     *           * `fullName` for a violation in the `fullName` value
     *           * `emailAddresses[1].email` for a violation in the `email` field of the
     *             first `emailAddresses` message
     *           * `emailAddresses[3].type[2]` for a violation in the second `type`
     *             value in the third `emailAddresses` message.
     *     @type string $description
     *           A description of why the request element is bad.
     *     @type string $reason
     *           The reason of the field-level error. This is a constant value that
     *           identifies the proximate cause of the field-level error. It should
     *           uniquely identify the type of the FieldViolation within the scope of the
     *           google.rpc.ErrorInfo.domain. This should be at most 63
     *           characters and match a regular expression of `[A-Z][A-Z0-9_]+[A-Z0-9]`,
     *           which represents UPPER_SNAKE_CASE.
     *     @type \Google\Rpc\LocalizedMessage $localized_message
     *           Provides a localized error message for field-level errors that is safe to
     *           return to the API consumer.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Rpc\ErrorDetails::initOnce();
        parent::__construct($data);
    }

    /**
     * A path that leads to a field in the request body. The value will be a
     * sequence of dot-separated identifiers that identify a protocol buffer
     * field.
     * Consider the following:
     *     message CreateContactRequest {
     *       message EmailAddress {
     *         enum Type {
     *           TYPE_UNSPECIFIED = 0;
     *           HOME = 1;
     *           WORK = 2;
     *         }
     *         optional string email = 1;
     *         repeated EmailType type = 2;
     *       }
     *       string full_name = 1;
     *       repeated EmailAddress email_addresses = 2;
     *     }
     * In this example, in proto `field` could take one of the following values:
     * * `full_name` for a violation in the `full_name` value
     * * `email_addresses[1].email` for a violation in the `email` field of the
     *   first `email_addresses` message
     * * `email_addresses[3].type[2]` for a violation in the second `type`
     *   value in the third `email_addresses` message.
     * In JSON, the same values are represented as:
     * * `fullName` for a violation in the `fullName` value
     * * `emailAddresses[1].email` for a violation in the `email` field of the
     *   first `emailAddresses` message
     * * `emailAddresses[3].type[2]` for a violation in the second `type`
     *   value in the third `emailAddresses` message.
     *
     * Generated from protobuf field <code>string field = 1;</code>
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * A path that leads to a field in the request body. The value will be a
     * sequence of dot-separated identifiers that identify a protocol buffer
     * field.
     * Consider the following:
     *     message CreateContactRequest {
     *       message EmailAddress {
     *         enum Type {
     *           TYPE_UNSPECIFIED = 0;
     *           HOME = 1;
     *           WORK = 2;
     *         }
     *         optional string email = 1;
     *         repeated EmailType type = 2;
     *       }
     *       string full_name = 1;
     *       repeated EmailAddress email_addresses = 2;
     *     }
     * In this example, in proto `field` could take one of the following values:
     * * `full_name` for a violation in the `full_name` value
     * * `email_addresses[1].email` for a violation in the `email` field of the
     *   first `email_addresses` message
     * * `email_addresses[3].type[2]` for a violation in the second `type`
     *   value in the third `email_addresses` message.
     * In JSON, the same values are represented as:
     * * `fullName` for a violation in the `fullName` value
     * * `emailAddresses[1].email` for a violation in the `email` field of the
     *   first `emailAddresses` message
     * * `emailAddresses[3].type[2]` for a violation in the second `type`
     *   value in the third `emailAddresses` message.
     *
     * Generated from protobuf field <code>string field = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkString($var, True);
        $this->field = $var;

        return $this;
    }

    /**
     * A description of why the request element is bad.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A description of why the request element is bad.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * The reason of the field-level error. This is a constant value that
     * identifies the proximate cause of the field-level error. It should
     * uniquely identify the type of the FieldViolation within the scope of the
     * google.rpc.ErrorInfo.domain. This should be at most 63
     * characters and match a regular expression of `[A-Z][A-Z0-9_]+[A-Z0-9]`,
     * which represents UPPER_SNAKE_CASE.
     *
     * Generated from protobuf field <code>string reason = 3;</code>
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * The reason of the field-level error. This is a constant value that
     * identifies the proximate cause of the field-level error. It should
     * uniquely identify the type of the FieldViolation within the scope of the
     * google.rpc.ErrorInfo.domain. This should be at most 63
     * characters and match a regular expression of `[A-Z][A-Z0-9_]+[A-Z0-9]`,
     * which represents UPPER_SNAKE_CASE.
     *
     * Generated from protobuf field <code>string reason = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->reason = $var;

        return $this;
    }

    /**
     * Provides a localized error message for field-level errors that is safe to
     * return to the API consumer.
     *
     * Generated from protobuf field <code>.google.rpc.LocalizedMessage localized_message = 4;</code>
     * @return \Google\Rpc\LocalizedMessage|null
     */
    public function getLocalizedMessage()
    {
        return $this->localized_message;
    }

    public function hasLocalizedMessage()
    {
        return isset($this->localized_message);
    }

    public function clearLocalizedMessage()
    {
        unset($this->localized_message);
    }

    /**
     * Provides a localized error message for field-level errors that is safe to
     * return to the API consumer.
     *
     * Generated from protobuf field <code>.google.rpc.LocalizedMessage localized_message = 4;</code>
     * @param \Google\Rpc\LocalizedMessage $var
     * @return $this
     */
    public function setLocalizedMessage($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\LocalizedMessage::class);
        $this->localized_message = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FieldViolation::class, \Google\Rpc\BadRequest_FieldViolation::class);

