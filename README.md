# com_disqus

## Description

This is a wrapper component for [Disqus](http://disqus.com). Disqus is an online discussion platform, which can be easily plugged into a website.

The `com_disqus` component plugs into our CCK as an optional field. If enabled, a discussion forum is generated.

## Requirements

* Joomla 3.X . Untested in Joomla 2.5.
* Koowa 0.9 or 1.0 (as yet, Koowa 2 is not supported)
* PHP 5.3.10 or better
* Composer
* Moyo Components
    * com_cck
    * com_moyo

## Installation

### Composer

Installation is done through composer. In your `composer.json` file, you should add the following lines to the repositories section:

```json
{
    "name": "cta/disqus",
    "type": "vcs",
    "url": "https://github.com/cta-int/disqus.git"
}
```

The require section should contain the following line:

```json
    "cta/disqus": "1.0.*",
```

Afterward, just run `composer update` from the root of your Joomla project. Please make sure that the Moyo components described above are to be added as well.

### jsymlinker

Another option, currently only available for Moyo developers, is by using the jsymlink script from the [Moyo Git
Tools](https://github.com/derjoachim/moyo-git-tools).

## Usage


## TODO

Update documentation, use cases.
