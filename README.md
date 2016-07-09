[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/christopherdarling/silverstripe-gridfieldsitetree/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/christopherdarling/silverstripe-gridfieldsitetree/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/christopherdarling/silverstripe-gridfieldsitetree/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/christopherdarling/silverstripe-gridfieldsitetree/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/christopherdarling/silverstripe-gridfieldsitetree/v/stable.png)](https://packagist.org/packages/christopherdarling/silverstripe-gridfieldsitetree)
[![Total Downloads](https://poser.pugx.org/christopherdarling/silverstripe-gridfieldsitetree/downloads.png)](https://packagist.org/packages/christopherdarling/silverstripe-gridfieldsitetree)
[![License](https://poser.pugx.org/christopherdarling/silverstripe-gridfieldsitetree/license.png)](https://packagist.org/packages/christopherdarling/silverstripe-gridfieldsitetree)

GridFieldSiteTree
=================

Allows you to manage children SiteTree pages via GridField.

## Requirments
* SilverStripe 3.1

## Usage
Add GridFieldSiteTree_PageHolderExtension as an Extension to the page you're adding the GridField to.

	:::php
	BlogHolder::add_extension('GridFieldSiteTree_PageHolderExtension');

Add the GridField to the pagetype

	:::php
	$fields->addFieldToTab('Root.Pages', $this->getGridFieldSiteTreeField('BlogPages', 'Blog pages', $this->AllChildren()));
