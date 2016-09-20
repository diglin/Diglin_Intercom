# Diglin Intercom - Magento 1.x Module #

This <b>OFFICIAL</b> Magento extension displays the [Intercom.com](https://www.intercom.com/) Chat Widget into your shop. Main advantage of this extension is to configure the chat widget in a fast way directly from your Magento installation and customize it per each store and store view.

Please visit [Intercom.com](https://www.intercom.com/) to create an account.

## Features

This module allows you to integrate the Intercom Chat service into your Magento installation in a quick way.

- Add the current visitor firstname, lastname, email and current customer ID of a customer when he is logged in to the intercom widget

## Documentation

### Via modman
- Install [modman](https://github.com/colinmollenhour/modman)
- Use the command from your Magento installation folder: `modman clone https://github.com/diglin/Diglin_Intercom`

### Via Composer
- Install [composer](http://getcomposer.org/download/)
- Create a composer.json into your project like the following sample:

```json
{
    ...
    "require": {
        "diglin/diglin_intercom":"*"
    },
    "repositories": [
	    {
            "type": "composer",
            "url": "http://packages.firegento.com"
        }
    ],
    "extra":{
        "magento-root-dir": "./"
    }
}

```

- Then from your composer.json folder: `php composer.phar install` or `composer install`

### Via manually
- You can copy the files from the folders of this repository to the same folders structure of your installation

### Post Installation

If you have an error 404 after install the extension and you get access to the configuration pages, do the followings:

- Clear your cache, see the menu <b>System > Cache Management</b>
- Login and logout from your backend to update the access control
- Or after installation, save again the Administrator Role to get access to the configuration page of this module. Go to your Magento Backend, then Menu <b>System > Permissions > Roles > Administrator</b> and save again this role.
- Just configure the Application ID of your account by signin into your Intercom account and get the Application ID (check the Url, it should looks like to https://app.intercom.io/a/apps/MYAPPID)
- Copy the Application ID to the configuration of the module. Follow in Magento Backend, the menu System > Configuration > Diglin > Intercom

## Customized template
If you have a customized template, check that you have <b>getChildHtml('before_body_end')</b> in files <b>/frontend/mypackage/mytemplate/template/page/1column.phtml, 2columns-left.phtml, 2columns-right.phtml, 3columns.phtml and empty.phtml</b> after <b>getChildHtml('footer')</b> Eventually you will need to copy the file <b>app/design/frontend/base/default/layout/chat.xml</b> in your layout template.

## Author

* Sylvain Rayé
* [www.diglin.com](http://www.diglin.com)
* [@diglin_](https://twitter.com/diglin_)
* [Follow us on github!](https://github.com/diglin)

