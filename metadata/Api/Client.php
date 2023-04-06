<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/client.proto

namespace GPBMetadata\Google\Api;

class Client
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
google/api/client.proto
google.api google/protobuf/descriptor.protogoogle/protobuf/duration.proto"t
CommonLanguageSettings
reference_docs_uri (	B:
destinations (2$.google.api.ClientLibraryDestination"�
ClientLibrarySettings
version (	-
launch_stage (2.google.api.LaunchStage
rest_numeric_enums (/
java_settings (2.google.api.JavaSettings-
cpp_settings (2.google.api.CppSettings-
php_settings (2.google.api.PhpSettings3
python_settings (2.google.api.PythonSettings/
node_settings (2.google.api.NodeSettings3
dotnet_settings (2.google.api.DotnetSettings/
ruby_settings (2.google.api.RubySettings+
go_settings (2.google.api.GoSettings"�

Publishing3
method_settings (2.google.api.MethodSettings
new_issue_urie (	
documentation_urif (	
api_short_nameg (	
github_labelh (	
codeowner_github_teamsi (	
doc_tag_prefixj (	;
organizationk (2%.google.api.ClientLibraryOrganization;
library_settingsm (2!.google.api.ClientLibrarySettings)
!proto_reference_documentation_urin (	"�
JavaSettings
library_package (	L
service_class_names (2/.google.api.JavaSettings.ServiceClassNamesEntry2
common (2".google.api.CommonLanguageSettings8
ServiceClassNamesEntry
key (	
value (	:8"A
CppSettings2
common (2".google.api.CommonLanguageSettings"A
PhpSettings2
common (2".google.api.CommonLanguageSettings"D
PythonSettings2
common (2".google.api.CommonLanguageSettings"B
NodeSettings2
common (2".google.api.CommonLanguageSettings"�
DotnetSettings2
common (2".google.api.CommonLanguageSettingsI
renamed_services (2/.google.api.DotnetSettings.RenamedServicesEntryK
renamed_resources (20.google.api.DotnetSettings.RenamedResourcesEntry
ignored_resources (	 
forced_namespace_aliases (	
handwritten_signatures (	6
RenamedServicesEntry
key (	
value (	:87
RenamedResourcesEntry
key (	
value (	:8"B
RubySettings2
common (2".google.api.CommonLanguageSettings"@

GoSettings2
common (2".google.api.CommonLanguageSettings"�
MethodSettings
selector (	<
long_running (2&.google.api.MethodSettings.LongRunning�
LongRunning5
initial_poll_delay (2.google.protobuf.Duration
poll_delay_multiplier (1
max_poll_delay (2.google.protobuf.Duration5
total_poll_timeout (2.google.protobuf.Duration*y
ClientLibraryOrganization+
\'CLIENT_LIBRARY_ORGANIZATION_UNSPECIFIED 	
CLOUD
ADS

PHOTOS
STREET_VIEW*g
ClientLibraryDestination*
&CLIENT_LIBRARY_DESTINATION_UNSPECIFIED 

GITHUB

PACKAGE_MANAGERBi
com.google.apiBClientProtoPZAgoogle.golang.org/genproto/googleapis/api/annotations;annotations�GAPIbproto3'
        , true);

        static::$is_initialized = true;
    }
}

