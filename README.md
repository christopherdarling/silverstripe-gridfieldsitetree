[![Build Status](https://secure.travis-ci.org/Respect/Validation.png)](http://travis-ci.org/Respect/Validation)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Respect/Validation/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Respect/Validation/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/Respect/Validation/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Respect/Validation/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/respect/validation/v/stable.png)](https://packagist.org/packages/respect/validation)
[![Total Downloads](https://poser.pugx.org/respect/validation/downloads.png)](https://packagist.org/packages/respect/validation)
[![License](https://poser.pugx.org/respect/validation/license.png)](https://packagist.org/packages/respect/validation)

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
