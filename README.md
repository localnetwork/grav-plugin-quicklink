# Quicklink Plugin

<p align="center">
  <img src="https://i.imgur.com/NVRZLHv.png" width="640" alt="quicklink">
  <br>
  <a href="https://www.npmjs.org/package/quicklink"><img src="https://img.shields.io/npm/v/quicklink.svg?style=flat" alt="npm"></a>
  <a href="https://unpkg.com/quicklink"><img src="https://img.badgesize.io/https://unpkg.com/quicklink/dist/quicklink.js?compression=gzip" alt="gzip size"></a>
  <a href="https://www.npmjs.com/package/quicklink"><img src="https://img.shields.io/npm/dt/quicklink.svg" alt="downloads" ></a>
  <a href="https://travis-ci.org/GoogleChromeLabs/quicklink"><img src="https://travis-ci.org/GoogleChromeLabs/quicklink.svg?branch=master" alt="travis"></a>
</p>

# quicklink
> Faster subsequent page-loads by prefetching in-viewport links during idle time

## How it works

Quicklink attempts to make navigations to subsequent pages load faster. It:

* **Detects links within the viewport** (using [Intersection Observer](https://developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API))
* **Waits until the browser is idle** (using [requestIdleCallback](https://developer.mozilla.org/en-US/docs/Web/API/Window/requestIdleCallback))
* **Checks if the user isn't on a slow connection** (using `navigator.connection.effectiveType`) or has data-saver enabled (using `navigator.connection.saveData`)
* **Prefetches URLs to the links** (using [`<link rel=prefetch>`](https://www.w3.org/TR/resource-hints/#prefetch) or XHR). Provides some control over the request priority (can switch to `fetch()` if supported).

The **Quicklink** Plugin is an extension for [Grav CMS](http://github.com/getgrav/grav). Faster subsequent page-loads by prefetching in-viewport links during idle time

## Installation

Installing the Quicklink plugin can be done in one of three ways: The GPM (Grav Package Manager) installation method lets you quickly install the plugin with a simple terminal command, the manual method lets you do so via a zip file, and the admin method lets you do so via the Admin Plugin.

### GPM Installation (Preferred)

To install the plugin via the [GPM](http://learn.getgrav.org/advanced/grav-gpm), through your system's terminal (also called the command line), navigate to the root of your Grav-installation, and enter:

    bin/gpm install quicklink

This will install the Quicklink plugin into your `/user/plugins`-directory within Grav. Its files can be found under `/your/site/grav/user/plugins/quicklink`.

### Manual Installation

To install the plugin manually, download the zip-version of this repository and unzip it under `/your/site/grav/user/plugins`. Then rename the folder to `quicklink`. You can find these files on [GitHub](https://github.com/localnetwork/grav-plugin-quicklink) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/quicklink
	
> NOTE: This plugin is a modular component for Grav which may require other plugins to operate, please see its [blueprints.yaml-file on GitHub](https://github.com/localnetwork/grav-plugin-quicklink/blob/master/blueprints.yaml).

### Admin Plugin

If you use the Admin Plugin, you can install the plugin directly by browsing the `Plugins`-menu and clicking on the `Add` button.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/quicklink/quicklink.yaml` to `user/config/plugins/quicklink.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

Note that if you use the Admin Plugin, a file with your configuration named quicklink.yaml will be saved in the `user/config/plugins/`-folder once the configuration is saved in the Admin.

## Usage

**Describe how to use the plugin.**

## Credits

**Did you incorporate third-party code? Want to thank somebody?**

## To Do

- [ ] Future plans, if any

