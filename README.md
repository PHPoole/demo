# PHPoole demo [![Build Status](https://www.travis-ci.org/PHPoole/demo.svg?branch=master)](https://www.travis-ci.org/PHPoole/demo)

This [PHPoole](https://phpoole.org) demo is a simple blog, based on the [Hyde](https://github.com/PHPoole/theme-hyde) theme.

## Installation

```
$ composer create-project phpoole/demo
```

## Usage

### 1. Create fake content

```shell
$ cd demo
$ composer run-script fake
```

### 2. Generate and serve

With [PHPoole CLI](http://phpoole.org):
```shell
$ phpoole build -s
```

**Or** with the included PHP script:
```shell
$ php build.php
```
