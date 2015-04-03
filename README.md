# calendar-summary 

[![Build Status](https://travis-ci.org/cultuurnet/calendar-summary.svg?branch=master)](https://travis-ci.org/cultuurnet/calendar-summary)

## Installation

You can install the CultuurNet\calendar-summary PHP library in different ways:

* Standalone. Clone or download from github and use [Composer][composer]. Run ``composer install`` from
  the root of the clone to download the necessary dependencies. Standalone usage is probably only useful for testing
  purposes.
* Inside your project: require the cultuurnet/calendar-summary package (it is
  [registered on Packagist][packagist]) and the cultuurnet/cdb package in your project's
  composer.json file and run ``composer update``.

```json
{
    "require": {
        "cultuurnet/calendar-summary": "~1.0",
    }
}
```

## How it works

The calendar-summary PHP takes a CultureFeed_Cdb_Data_Calendar object (hence the dependency on cultuurnet/cdb, 
and formats it. 
Right now there's a HTML formatter and a plain text formatter. But other formatters can easily be implemented.
