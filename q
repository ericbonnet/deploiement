# This file contains default .gitignore rules. To use it, copy it to .gitignore,
# and it will cause files like your settings.php and user-uploaded files to be
# excluded from Git version control. This is a common strategy to avoid
# accidentally including private information in public repositories and patch
# files.
#
# Because .gitignore can be specific to your site, this file has a different
# name; updating Drupal core will not override your custom .gitignore file.

# Ignore core when managing all of a project's dependencies with Composer
# including Drupal core.
# core

# Core's dependencies are managed with Composer.
vendor

# Ignore configuration files that may contain sensitive information.
sites/*/settings*.php
sites/*/services*.yml

# Ignore paths that contain user-generated content.
sites/*/files
sites/*/private

# Ignore SimpleTest multi-site environment.
sites/simpletest

# If you prefer to store your .gitignore file in the sites/ folder, comment
# or delete the previous settings and uncomment the following ones, instead.

# Ignore configuration files that may contain sensitive information.
# */settings*.php

# Ignore paths that contain user-generated content.
# */files
# */private

# Ignore SimpleTest multi-site environment.
# simpletest

# Ignore core phpcs.xml and phpunit.xml.
core/phpcs.xml
core/phpunit.xml
dev
