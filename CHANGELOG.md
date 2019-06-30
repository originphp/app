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

