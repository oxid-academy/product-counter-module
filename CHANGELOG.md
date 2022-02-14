# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.0.1] - 2022-02-14
### Changed
- `StartController` declared strict type mode.
- `GreetingController` declared strict type mode.
- `composer.json` increased required PHP version to version 8.0.

## [1.0.0] - 2020-08-14
### Added
- `StartController` extends the OXID `StartController` and assigns the number of products to a template variable.
- `GreetingController` extends the OXID admin area with a custom settings page for the greeting option.
- `greeting_settings.tpl` presentation of the custom settings page in admin area.
- `layout_header_bottom.tpl` extends the template block by displaying the number of products and greeting.
- `menu.xml` extends the OXID admin area menu on the left side.
