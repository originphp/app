# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

**Types Of Changes:**
- Added for new features.
- Changed for changes in existing functionality.
- Deprecated for soon-to-be removed features.
- Removed for now removed features.
- Fixed for any bug fixes.
- Security in case of vulnerabilities.

**Git Commands:**
List:         git tag
Create:       git tag -a <tag_name> -m '<tag_message>'
Upload:       git push origin --tags
Delete tag:   git tag -d <tag_name>

## [Unreleased]
## [2.2.4] - 2019-09-21
- Fixed CSS navbar hover color

## [2.2.3] - 2019-09-10
### Fixed 
- Fixed comment in AppModel

## [2.2.2] - 2019-09-05
### Fixed
- Fixed collation errors on MySQL 5.x. Removed so that schema is more flexible.

## [2.2.1] - 2019-09-04
### Fixed
- phpunit.xml to app directory (caused in 2.0.0)

## [2.2.0] - 2019-09-02
### Added
- Addded 400 error template

### Fixed
- Added missing closing p tag in error template

## [2.1.0] - 2019-08-30
### Added
- Composer post install script to copy default .env.php file

## [2.0.0] - 2019-08-30

## Changed
- Reverting from using src to app folder as this makes development easier
- db folder is now database, and migrate is migrations
- It comes with configured to use .env.php file

## [1.15.0] - 2019-08-28
### Added
- AppMailer
- mailer layout

### Removed
- removed legacy autoloader.php

## [1.14.0] - 2019-08-26
### Added
- AppService
- AppJob

### Changed
- Change the queue schema file to work with the new queue system aka Job

## [1.12.1] - 2019-08-21
### Fixed
- Changed index name on queue migration

## [1.12.0] - 2019-08-12
### Changed
- Changed default schema types from sql to php
- Changed seed.sql to seed.php


## [1.11.0] - 2019-08-01

### Added
- Cache configuration settings for model schema
- Migrations agnostic schema
- Queue agnostic schema

## [1.10.0] - 2019-07-23
### Added
- Delocalize behavior loaded by default

### Changed
- CSS alert text color for warning and info

### Security
- Disabled directory listing from Apache config for Dockerized Development Environment

## [1.9.1] - 2019-07-12
### Fixed
- CSS for notices
- @Property for Html helper
- Corrected locale:generate command name in comment

## [1.9.0] - 2019-06-30
### Changed
- Changed namespace for Cache and Storage

### Added
- Added Cookie.key configuration

## [1.8.4] - 2019-06-24
### Fixed
- PHP server not running properly when run in a folder with spaces e.g. 'the folder'

## [1.8.3] - 2019-06-24
### Changed
- Security.salt to Security.pepper

## [1.8.2] - 2019-06-24
### Changed
- Composer.json - cleaned this up and improved

### Security
- Changed the Docker development environment apache configuration file to serve public folder.

## [1.8.1] - 2019-06-20
### Fixed
- Public/index.php to use the new method of dispatching

## [1.8.0] - 2019-06-20
### Removed
- Old shell files

### Changed
- Loads CSRF Protection Middleware

## [1.7.2] - 2019-06-12
### Fixed
- Fixed built in server issue loading index.php

## [1.7.1] - 2019-06-12
### Changed
- server Windows friendly directory separator

## [1.7.0] - 2019-06-12
### Changed
- bin scripts are now all PHP
- Default locale for app uses I18N config

### Added
- en_GB and en_US locales

## [1.6.1] - 2019-06-08
### Fixed
- Storage template root

## [1.6.0] - 2019-06-06
### Added
- Added development bin/server

## [1.5.1] - 2019-06-06
### Added
- Added sample console application (db)

## [1.5.0] - 2019-06-06
### Changed
- bootstrap handles autoloading and loads application.php

## [1.4.4] - 2019-06-06
### Fixed
- Storage template

### Changed
- .gitignore

## [1.4.3] - 2019-06-06
### Removed
- default environments

## [1.4.2] - 2019-06-05
### Fixed
- Fixed paths due to framework name change

## [1.4.1] - 2019-06-05
- added default storage template

## [1.4.0] - 2019-06-05
### Removed
- Bookmarks shell

### Changed
- Change framework name

### 
## [1.3.0] - 2019-05-31

### Added
- default environments

## [1.2.4] - 2019-05-28
### Fixed
- Fixed MySQL 8 password issue

## [1.2.3] - 2019-05-27
### Added
- empty schema and seed sql files

### Removed
- Removed accidentally commited files

## [1.2.2] - 2019-05-25
### Removed
- load legacy plugin from bootstrap

## [1.2.1] - 2019-05-25
### Fixed
- composer.json issue

## [1.2.0] - 2019-05-25
### Changed
- Refactored Shell scripts into Commands
- Adjusted to console bash script to work from anydirectory

## [1.0.0] - xxxx-xx-xx
### Changed
- Plugins moved to own repos

