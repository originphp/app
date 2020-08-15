# Changelog

## [3.10.0] - 2020-08-15

### Changed

- Changed default database host to `localhost` from docker `db`

### Added

- Added `Storage` constant
- Added `Collection` to composer.json
- Added `Filesystem` to composer.json

### Changed

- Changed `ImapFixture` to not create table using schema as `db:test:prepare` now handles this
- Changed `MailboxFixture` to not create table using schema as `db:test:prepare` now handles this
- Changed `QueueFixture` to not create table using schema as `db:test:prepare` now handles this

## [3.9.1] - 2020-07-21

### Fixed

- Fixed `phpunit.xml.dist` which was still configured for split version

## [3.9.0] - 2020-07-19

### Added

- Added `public/maintenance.html`


### Changed

- Changed `Http\Application` to load `MaintenanceModeMiddleware`
- Changed error templates to load local bootstrap

## [3.8.1] - 2020-07-18

### Changed

- Changed error 500 template to show error code and message

## [3.8.0] - 2020-07-17

Technically this should be version 4.0, however this package does not update, and I want to try and sync with the
framework versioning numbers.

### Changed

- Changed OriginPHP framework minimum version 3
- Changed PHP minimum version 7.3
- Changed PHPUnit minimum version 9.2

### Added

- Added `config/autoload.php`
- Added `config/preload.php`

## [3.7.2] - 2020-07-02

### Added

- Added Flash component DocBlock property tag

## [3.7.1] - 2020-06-12

### Added

- Added SQLite to Dockerfile
- Added HTML Helper DocBlock property tag

## [3.7.0] - 2020-05-30

### Fixed
- Fixed application.css was missing from template

### Changed

- Changed debugger code color scheme
- Changed location of docker configuration folder, moved this to config

## [3.6.1] - 2020-05-25

### Fixed

- Fixed bootstrap dropdowns not working,renamed popper.js to popper.min.js
- Fixed home.ctp to check .env not the cached version

## [3.6.0] - 2020-05-19

### Added

- Added bin/docker bash script
- Added Elasticsearch docker service
- Added Mailhog docker service
- Added Memcahed docker service
- Added Minio (s3) docker service
- Added Postgresql docker service
- Added MySQL docker service
- Added Redis docker service
- Added Postwoman docker service

### Changed

- Changed Docker MySQL port to 3307
- Renamed application.php to app.php, and changed to array
- Changed config/cache to array
- Changed config/database to array
- Changed config/email to array
- Changed config/log to array
- Changed config/mailbox to array
- Changed config/storage to array
- Changed default database name to `application`

### Removed

- Removed MySQL from default docker-compose


## [3.5.0] - 2020-05-16

### Added
- Added Bootstrap dist
- Added Jquery dist

### Changed
- Updated normalize version

## [3.4.0] - 2020-05-02
### Changed
- Changed Dockerfile to use Ubuntu 20.04/PHP 7.4

## [3.3.0] - 2019-11-22
### Added
- Mailbox configuration 
- Mailbox fixtures

### Changed
- Added mailparse extension to Dockerfile

## [3.2.0] - 2019-11-06
### Added
- Added default Favicon using Fontawesome

### Changed
- 500 template adjusted to use dynamic vars

## [3.1.0] - 2019-11-01
### Added
- Added Cache configuration for framework caching

## [3.0.1] - 2019-10-29
### Fixed
- Fixed bin/db command to work with Commands package

## [3.0.0] - 2019-10-25

Released new version with OriginPHP v2.0

## [2.2.6] - 2019-09-25
### Fixed
- Fixed composer.json

## [2.2.5] - 2019-09-24
### Changed
- Changed composer.json to update non breaking changes

## [2.2.4] - 2019-09-21
### Fixed
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