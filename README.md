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
