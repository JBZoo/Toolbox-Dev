# JBZoo / Toolbox-Dev

[![CI](https://github.com/JBZoo/Toolbox-Dev/actions/workflows/main.yml/badge.svg?branch=master)](https://github.com/JBZoo/Toolbox-Dev/actions/workflows/main.yml?query=branch%3Amaster)
[![Coverage Status](https://coveralls.io/repos/github/JBZoo/Toolbox-Dev/badge.svg?branch=master)](https://coveralls.io/github/JBZoo/Toolbox-Dev?branch=master)
[![Psalm Coverage](https://shepherd.dev/github/JBZoo/Toolbox-Dev/coverage.svg)](https://shepherd.dev/github/JBZoo/Toolbox-Dev)
[![Psalm Level](https://shepherd.dev/github/JBZoo/Toolbox-Dev/level.svg)](https://shepherd.dev/github/JBZoo/Toolbox-Dev)
[![CodeFactor](https://www.codefactor.io/repository/github/jbzoo/toolbox-dev/badge)](https://www.codefactor.io/repository/github/jbzoo/toolbox-dev/issues)

[![Stable Version](https://poser.pugx.org/jbzoo/toolbox-dev/version)](https://packagist.org/packages/jbzoo/toolbox-dev/)
[![Total Downloads](https://poser.pugx.org/jbzoo/toolbox-dev/downloads)](https://packagist.org/packages/jbzoo/toolbox-dev/stats)
[![Dependents](https://poser.pugx.org/jbzoo/toolbox-dev/dependents)](https://packagist.org/packages/jbzoo/toolbox-dev/dependents?order_by=downloads)
[![GitHub License](https://img.shields.io/github/license/jbzoo/toolbox-dev)](https://github.com/JBZoo/Toolbox-Dev/blob/master/LICENSE)


Developer toolbox library that provides standardized development dependencies and debugging utilities for JBZoo projects on GitHub.

## Features

- **Enhanced Debugging**: Customized Symfony VarDumper configuration optimized for CLI development
- **Development Dependencies**: Unified package for all necessary JBZoo development tools
- **Standardized Toolchain**: Consistent development environment across JBZoo ecosystem
- **Quality Assurance**: Integrated code style checking and testing framework

## Installation

```bash
composer require --dev jbzoo/toolbox-dev
```

## Key Components

### VarDumper Enhancement
Provides an optimized debugging experience with:
- Output redirected to `php://stderr` to avoid breaking script output
- 16KB string limit for performance
- Classic indentation style for better readability
- UTF-8 encoding support

### Development Tools Integration
Includes standardized versions of:
- **jbzoo/phpunit** - Enhanced PHPUnit testing framework
- **jbzoo/codestyle** - Comprehensive code quality tools
- **jbzoo/markdown** - Markdown processing utilities
- **symfony/var-dumper** - Advanced debugging capabilities
- **php-coveralls/php-coveralls** - Coverage reporting
- **fakerphp/faker** - Test data generation

## Usage

### Development Setup
```bash
make update    # Install/update all dependencies
```

### Testing and Quality Assurance
```bash
make test      # Run PHPUnit tests
make test-all  # Run tests and code style checks
make codestyle # Run all code quality tools
```

### Debugging
The VarDumper configuration is automatically loaded, enhancing the `dump()` function:

```php
// Enhanced debugging output
dump($variable);  // Outputs to stderr with optimized formatting
```

## Requirements

- PHP 8.3 or higher
- Composer for dependency management

## Integration

This package is designed to be included as a development dependency in JBZoo projects:

```json
{
    "require-dev": {
        "jbzoo/toolbox-dev": "^8.0"
    }
}
```

## License

MIT
