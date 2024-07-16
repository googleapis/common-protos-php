<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/billing.proto

namespace Google\Api\Billing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of a specific billing destination (Currently only support
 * bill against consumer project).
 *
 * Generated from protobuf message <code>google.api.Billing.BillingDestination</code>
 */
class BillingDestination extends \Google\Protobuf\Internal\Message
{
    /**
     * The monitored resource type. The type must be defined in
     * [Service.monitored_resources][google.api.Service.monitored_resources]
     * section.
     *
     * Generated from protobuf field <code>string monitored_resource = 1;</code>
     */
    protected $monitored_resource = '';
    /**
     * Names of the metrics to report to this billing destination.
     * Each name must be defined in
     * [Service.metrics][google.api.Service.metrics] section.
     *
     * Generated from protobuf field <code>repeated string metrics = 2;</code>
     */
    private $metrics;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $monitored_resource
     *           The monitored resource type. The type must be defined in
     *           [Service.monitored_resources][google.api.Service.monitored_resources]
     *           section.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $metrics
     *           Names of the metrics to report to this billing destination.
     *           Each name must be defined in
     *           [Service.metrics][google.api.Service.metrics] section.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Billing::initOnce();
        parent::__construct($data);
    }

    /**
     * The monitored resource type. The type must be defined in
     * [Service.monitored_resources][google.api.Service.monitored_resources]
     * section.
     *
     * Generated from protobuf field <code>string monitored_resource = 1;</code>
     * @return string
     */
    public function getMonitoredResource()
    {
        return $this->monitored_resource;
    }

    /**
     * The monitored resource type. The type must be defined in
     * [Service.monitored_resources][google.api.Service.monitored_resources]
     * section.
     *
     * Generated from protobuf field <code>string monitored_resource = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMonitoredResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->monitored_resource = $var;

        return $this;
    }

    /**
     * Names of the metrics to report to this billing destination.
     * Each name must be defined in
     * [Service.metrics][google.api.Service.metrics] section.
     *
     * Generated from protobuf field <code>repeated string metrics = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * Names of the metrics to report to this billing destination.
     * Each name must be defined in
     * [Service.metrics][google.api.Service.metrics] section.
     *
     * Generated from protobuf field <code>repeated string metrics = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metrics = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BillingDestination::class, \Google\Api\Billing_BillingDestination::class);

