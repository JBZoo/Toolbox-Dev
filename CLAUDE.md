# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

JBZoo Toolbox-Dev is a developer toolbox library that provides development dependencies and debugging utilities for JBZoo libraries on GitHub. It primarily serves as a development-only package to standardize debugging and development tools across JBZoo projects.

## Core Architecture

### Minimal Library Structure
This is a lightweight library with minimal source code:
- `src/var-dumper.php` - Main functionality: customized Symfony VarDumper configuration
- The library primarily serves as a composer dependency aggregator for development tools

### Symfony VarDumper Integration
The main feature is a customized VarDumper configuration that:
- Outputs to `php://stderr` instead of `php://stdout` to avoid breaking main script output during debugging
- Optimized for CLI debugging with 16KB string limit
- Configures classic indentation style and UTF-8 encoding
- Disables PhpStorm file links for broader compatibility

### Dependency Management
Acts as a meta-package providing standardized versions of:
- `jbzoo/phpunit` - PHPUnit testing framework extensions
- `jbzoo/codestyle` - Code quality and linting tools
- `jbzoo/markdown` - Markdown processing utilities
- `symfony/var-dumper` - Enhanced debugging output
- `php-coveralls/php-coveralls` - Coverage reporting
- `fakerphp/faker` - Test data generation

## Common Commands

### Development Setup
```bash
make update     # Install/update all dependencies via composer
```

### Testing and Quality Assurance
```bash
make test-all   # Run both PHPUnit tests and all code style checks
make test       # Run PHPUnit tests only
make codestyle  # Run all code quality tools (inherited from jbzoo/codestyle)
```

## Dependencies and Integration

### JBZoo Ecosystem Integration
This package includes JBZoo's standardized toolchain via the Makefile system:
- Inherits comprehensive make targets from `jbzoo/codestyle`
- Provides unified development environment across JBZoo projects
- Acts as a single dependency to pull in all necessary development tools

### PHP Version Requirements
- PHP 8.3+ required
- Compatible with PHP 8.3 and 8.4 (tested in CI)

### Testing Framework
Uses JBZoo's extended PHPUnit framework:
- Tests extend `JBZoo\PHPUnit\PHPUnit` base class
- Test files in `tests/` directory with `*Test.php` naming pattern
- PHPUnit configuration in `phpunit.xml.dist`

## Usage Pattern

This package is typically included as a development dependency in other JBZoo projects:
```json
{
    "require-dev": {
        "jbzoo/toolbox-dev": "^8.0"
    }
}
```

The VarDumper configuration is automatically loaded via Composer's `files` autoloader, providing enhanced debugging capabilities across all JBZoo projects without additional setup.

## Key Files

- `composer.json` - Defines dependencies and autoload configuration
- `Makefile` - Minimal makefile that includes JBZoo codestyle system
- `src/var-dumper.php` - Main functionality for debugging enhancements
- `phpunit.xml.dist` - PHPUnit configuration with coverage reporting