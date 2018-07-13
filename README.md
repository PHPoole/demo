# PHPoole demo [![Build Status](https://www.travis-ci.org/PHPoole/demo.svg?branch=master)](https://www.travis-ci.org/PHPoole/demo)

This [PHPoole](http://phpoole.org) demo is a simple blog, based on the [Hyde](https://github.com/PHPoole/PHPoole-theme-hyde) theme.

## Installation

```
$ composer create-project phpoole/demo
```

## Usage

### Create fake content

```shell
$ cd demo
$ composer run-script fake
```

### Generate and serve

With [PHPoole CLI](http://phpoole.org):
```shell
$ cd demo
$ phpoole build -s
```

**Or** with the included PHP script:
```shell
$ cd demo
$ php build.php
```
