<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/client.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This message configures the settings for publishing [Google Cloud Client
 * libraries](https://cloud.google.com/apis/docs/cloud-client-libraries)
 * generated from the service config.
 *
 * Generated from protobuf message <code>google.api.Publishing</code>
 */
class Publishing extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of API method settings, e.g. the behavior for methods that use the
     * long-running operation pattern.
     *
     * Generated from protobuf field <code>repeated .google.api.MethodSettings method_settings = 2;</code>
     */
    private $method_settings;
    /**
     * Link to a place that API users can report issues.  Example:
     * https://issuetracker.google.com/issues/new?component=190865&template=1161103
     *
     * Generated from protobuf field <code>string new_issue_uri = 101;</code>
     */
    protected $new_issue_uri = '';
    /**
     * Link to product home page.  Example:
     * https://cloud.google.com/asset-inventory/docs/overview
     *
     * Generated from protobuf field <code>string documentation_uri = 102;</code>
     */
    protected $documentation_uri = '';
    /**
     * Used as a tracking tag when collecting data about the APIs developer
     * relations artifacts like docs, packages delivered to package managers,
     * etc.  Example: "speech".
     *
     * Generated from protobuf field <code>string api_short_name = 103;</code>
     */
    protected $api_short_name = '';
    /**
     * GitHub label to apply to issues and pull requests opened for this API.
     *
     * Generated from protobuf field <code>string github_label = 104;</code>
     */
    protected $github_label = '';
    /**
     * GitHub teams to be added to CODEOWNERS in the directory in GitHub
     * containing source code for the client libraries for this API.
     *
     * Generated from protobuf field <code>repeated string codeowner_github_teams = 105;</code>
     */
    private $codeowner_github_teams;
    /**
     * A prefix used in sample code when demarking regions to be included in
     * documentation.
     *
     * Generated from protobuf field <code>string doc_tag_prefix = 106;</code>
     */
    protected $doc_tag_prefix = '';
    /**
     * For whom the client library is being published.
     *
     * Generated from protobuf field <code>.google.api.ClientLibraryOrganization organization = 107;</code>
     */
    protected $organization = 0;
    /**
     * Client library settings.  If the same version string appears multiple
     * times in this list, then the last one wins.  Settings from earlier
     * settings with the same version string are discarded.
     *
     * Generated from protobuf field <code>repeated .google.api.ClientLibrarySettings library_settings = 109;</code>
     */
    private $library_settings;
    /**
     * Optional link to proto reference documentation.  Example:
     * https://cloud.google.com/pubsub/lite/docs/reference/rpc
     *
     * Generated from protobuf field <code>string proto_reference_documentation_uri = 110;</code>
     */
    protected $proto_reference_documentation_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Api\MethodSettings>|\Google\Protobuf\Internal\RepeatedField $method_settings
     *           A list of API method settings, e.g. the behavior for methods that use the
     *           long-running operation pattern.
     *     @type string $new_issue_uri
     *           Link to a place that API users can report issues.  Example:
     *           https://issuetracker.google.com/issues/new?component=190865&template=1161103
     *     @type string $documentation_uri
     *           Link to product home page.  Example:
     *           https://cloud.google.com/asset-inventory/docs/overview
     *     @type string $api_short_name
     *           Used as a tracking tag when collecting data about the APIs developer
     *           relations artifacts like docs, packages delivered to package managers,
     *           etc.  Example: "speech".
     *     @type string $github_label
     *           GitHub label to apply to issues and pull requests opened for this API.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $codeowner_github_teams
     *           GitHub teams to be added to CODEOWNERS in the directory in GitHub
     *           containing source code for the client libraries for this API.
     *     @type string $doc_tag_prefix
     *           A prefix used in sample code when demarking regions to be included in
     *           documentation.
     *     @type int $organization
     *           For whom the client library is being published.
     *     @type array<\Google\Api\ClientLibrarySettings>|\Google\Protobuf\Internal\RepeatedField $library_settings
     *           Client library settings.  If the same version string appears multiple
     *           times in this list, then the last one wins.  Settings from earlier
     *           settings with the same version string are discarded.
     *     @type string $proto_reference_documentation_uri
     *           Optional link to proto reference documentation.  Example:
     *           https://cloud.google.com/pubsub/lite/docs/reference/rpc
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Client::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of API method settings, e.g. the behavior for methods that use the
     * long-running operation pattern.
     *
     * Generated from protobuf field <code>repeated .google.api.MethodSettings method_settings = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMethodSettings()
    {
        return $this->method_settings;
    }

    /**
     * A list of API method settings, e.g. the behavior for methods that use the
     * long-running operation pattern.
     *
     * Generated from protobuf field <code>repeated .google.api.MethodSettings method_settings = 2;</code>
     * @param array<\Google\Api\MethodSettings>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMethodSettings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\MethodSettings::class);
        $this->method_settings = $arr;

        return $this;
    }

    /**
     * Link to a place that API users can report issues.  Example:
     * https://issuetracker.google.com/issues/new?component=190865&template=1161103
     *
     * Generated from protobuf field <code>string new_issue_uri = 101;</code>
     * @return string
     */
    public function getNewIssueUri()
    {
        return $this->new_issue_uri;
    }

    /**
     * Link to a place that API users can report issues.  Example:
     * https://issuetracker.google.com/issues/new?component=190865&template=1161103
     *
     * Generated from protobuf field <code>string new_issue_uri = 101;</code>
     * @param string $var
     * @return $this
     */
    public function setNewIssueUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_issue_uri = $var;

        return $this;
    }

    /**
     * Link to product home page.  Example:
     * https://cloud.google.com/asset-inventory/docs/overview
     *
     * Generated from protobuf field <code>string documentation_uri = 102;</code>
     * @return string
     */
    public function getDocumentationUri()
    {
        return $this->documentation_uri;
    }

    /**
     * Link to product home page.  Example:
     * https://cloud.google.com/asset-inventory/docs/overview
     *
     * Generated from protobuf field <code>string documentation_uri = 102;</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentationUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->documentation_uri = $var;

        return $this;
    }

    /**
     * Used as a tracking tag when collecting data about the APIs developer
     * relations artifacts like docs, packages delivered to package managers,
     * etc.  Example: "speech".
     *
     * Generated from protobuf field <code>string api_short_name = 103;</code>
     * @return string
     */
    public function getApiShortName()
    {
        return $this->api_short_name;
    }

    /**
     * Used as a tracking tag when collecting data about the APIs developer
     * relations artifacts like docs, packages delivered to package managers,
     * etc.  Example: "speech".
     *
     * Generated from protobuf field <code>string api_short_name = 103;</code>
     * @param string $var
     * @return $this
     */
    public function setApiShortName($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_short_name = $var;

        return $this;
    }

    /**
     * GitHub label to apply to issues and pull requests opened for this API.
     *
     * Generated from protobuf field <code>string github_label = 104;</code>
     * @return string
     */
    public function getGithubLabel()
    {
        return $this->github_label;
    }

    /**
     * GitHub label to apply to issues and pull requests opened for this API.
     *
     * Generated from protobuf field <code>string github_label = 104;</code>
     * @param string $var
     * @return $this
     */
    public function setGithubLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->github_label = $var;

        return $this;
    }

    /**
     * GitHub teams to be added to CODEOWNERS in the directory in GitHub
     * containing source code for the client libraries for this API.
     *
     * Generated from protobuf field <code>repeated string codeowner_github_teams = 105;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCodeownerGithubTeams()
    {
        return $this->codeowner_github_teams;
    }

    /**
     * GitHub teams to be added to CODEOWNERS in the directory in GitHub
     * containing source code for the client libraries for this API.
     *
     * Generated from protobuf field <code>repeated string codeowner_github_teams = 105;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCodeownerGithubTeams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->codeowner_github_teams = $arr;

        return $this;
    }

    /**
     * A prefix used in sample code when demarking regions to be included in
     * documentation.
     *
     * Generated from protobuf field <code>string doc_tag_prefix = 106;</code>
     * @return string
     */
    public function getDocTagPrefix()
    {
        return $this->doc_tag_prefix;
    }

    /**
     * A prefix used in sample code when demarking regions to be included in
     * documentation.
     *
     * Generated from protobuf field <code>string doc_tag_prefix = 106;</code>
     * @param string $var
     * @return $this
     */
    public function setDocTagPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->doc_tag_prefix = $var;

        return $this;
    }

    /**
     * For whom the client library is being published.
     *
     * Generated from protobuf field <code>.google.api.ClientLibraryOrganization organization = 107;</code>
     * @return int
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * For whom the client library is being published.
     *
     * Generated from protobuf field <code>.google.api.ClientLibraryOrganization organization = 107;</code>
     * @param int $var
     * @return $this
     */
    public function setOrganization($var)
    {
        GPBUtil::checkEnum($var, \Google\Api\ClientLibraryOrganization::class);
        $this->organization = $var;

        return $this;
    }

    /**
     * Client library settings.  If the same version string appears multiple
     * times in this list, then the last one wins.  Settings from earlier
     * settings with the same version string are discarded.
     *
     * Generated from protobuf field <code>repeated .google.api.ClientLibrarySettings library_settings = 109;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLibrarySettings()
    {
        return $this->library_settings;
    }

    /**
     * Client library settings.  If the same version string appears multiple
     * times in this list, then the last one wins.  Settings from earlier
     * settings with the same version string are discarded.
     *
     * Generated from protobuf field <code>repeated .google.api.ClientLibrarySettings library_settings = 109;</code>
     * @param array<\Google\Api\ClientLibrarySettings>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLibrarySettings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\ClientLibrarySettings::class);
        $this->library_settings = $arr;

        return $this;
    }

    /**
     * Optional link to proto reference documentation.  Example:
     * https://cloud.google.com/pubsub/lite/docs/reference/rpc
     *
     * Generated from protobuf field <code>string proto_reference_documentation_uri = 110;</code>
     * @return string
     */
    public function getProtoReferenceDocumentationUri()
    {
        return $this->proto_reference_documentation_uri;
    }

    /**
     * Optional link to proto reference documentation.  Example:
     * https://cloud.google.com/pubsub/lite/docs/reference/rpc
     *
     * Generated from protobuf field <code>string proto_reference_documentation_uri = 110;</code>
     * @param string $var
     * @return $this
     */
    public function setProtoReferenceDocumentationUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->proto_reference_documentation_uri = $var;

        return $this;
    }

}

