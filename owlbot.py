# Copyright 2022 Google LLC
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

"""This script is used to synthesize generated parts of this library."""

import logging
from pathlib import Path
import shutil
import subprocess

import synthtool as s
from synthtool.languages import php
from synthtool import _tracked_paths

logging.basicConfig(level=logging.DEBUG)

# (dirname, version)
protos = [
    ("api", "api"),
    ("extendedoperations", "cloud"),
    ("location", "cloud"),
    ("logging", "cloud"),
    ("iam", "cloud"),
    ("iam", "iam"), # we have to do this twice because there are two different locations
    ("rpc", "rpc"),
    ("type", "type"),
]

dest = Path().resolve()
for proto in protos:
    src = Path(f"{php.STAGING_DIR}/{proto[0]}-protos").resolve()

    # Added so that we can pass copy_excludes in the owlbot_main() call
    _tracked_paths.add(src)

    # use owlbot_copy_version instead of owlbot_main and set "version_string"
    # manually because common protos do not have a version
    php.owlbot_copy_version(
        src=src,
        dest=dest,
        version_string=proto[1],
        copy_excludes=[
            src / "**/[A-Z]*_*.php"
        ],
    )

shutil.rmtree(Path(php.STAGING_DIR))

s.replace(
    "src/**/*.php",
    r"^// Adding a class alias for backwards compatibility with the previous class name.$"
    + "\n"
    + r"^class_alias\(.*\);$"
    + "\n",
    '')

