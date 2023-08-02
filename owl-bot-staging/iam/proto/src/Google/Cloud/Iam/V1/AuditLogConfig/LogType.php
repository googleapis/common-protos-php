<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/v1/policy.proto

namespace Google\Cloud\Iam\V1\AuditLogConfig;

use UnexpectedValueException;

/**
 * The list of valid permission types for which logging can be configured.
 * Admin writes are always logged, and are not configurable.
 *
 * Protobuf type <code>google.iam.v1.AuditLogConfig.LogType</code>
 */
class LogType
{
    /**
     * Default case. Should never be this.
     *
     * Generated from protobuf enum <code>LOG_TYPE_UNSPECIFIED = 0;</code>
     */
    const LOG_TYPE_UNSPECIFIED = 0;
    /**
     * Admin reads. Example: CloudIAM getIamPolicy
     *
     * Generated from protobuf enum <code>ADMIN_READ = 1;</code>
     */
    const ADMIN_READ = 1;
    /**
     * Data writes. Example: CloudSQL Users create
     *
     * Generated from protobuf enum <code>DATA_WRITE = 2;</code>
     */
    const DATA_WRITE = 2;
    /**
     * Data reads. Example: CloudSQL Users list
     *
     * Generated from protobuf enum <code>DATA_READ = 3;</code>
     */
    const DATA_READ = 3;

    private static $valueToName = [
        self::LOG_TYPE_UNSPECIFIED => 'LOG_TYPE_UNSPECIFIED',
        self::ADMIN_READ => 'ADMIN_READ',
        self::DATA_WRITE => 'DATA_WRITE',
        self::DATA_READ => 'DATA_READ',
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
class_alias(LogType::class, \Google\Cloud\Iam\V1\AuditLogConfig_LogType::class);
