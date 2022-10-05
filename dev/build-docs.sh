#!/bin/bash
# Copyright 2018 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

# Script to build doc site.
# This script expects to be invoked from the common-protos-php root. It requires
# a git tag as the first argument.

set -ev

if [[ $# -lt 1 ]]
then
    echo "Usage: $0 <tag>"
    exit 1
fi

GIT_TAG_NAME=$1
# Remove "v" from start of the version string if it exists
if [[ ${GIT_TAG_NAME::1} == "v" ]]
then
  GIT_TAG_NAME="${GIT_TAG_NAME:1}"
fi

ROOT_DIR=$(pwd)
DOC_OUTPUT_DIR=${ROOT_DIR}/tmp_gh-pages

function buildDocs() {
  SAMI_EXECUTABLE=${ROOT_DIR}/vendor/sami/sami/sami.php
  SAMI_CONFIG=${ROOT_DIR}/dev/sami-config.php
  COMMON_PROTOS_DOCS_VERSION=${GIT_TAG_NAME} php ${SAMI_EXECUTABLE} update ${SAMI_CONFIG} -v
}

buildDocs ${GIT_TAG_NAME}

# Construct the base index file to redirects to the latest version of the docs.
UPDATED_INDEX_FILE=$(cat << EndOfMessage
<html><head><script>window.location.replace('/common-protos-php/${GIT_TAG_NAME}/' + location.hash.substring(1))</script></head><body></body></html>
EndOfMessage
)
echo ${UPDATED_INDEX_FILE} > ${DOC_OUTPUT_DIR}/index.html

