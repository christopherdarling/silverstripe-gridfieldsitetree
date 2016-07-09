<?php

/*
 * @author Christopher Darling (www.christopherdarling.co.uk)
 */
class GridFieldSiteTree_PageHolderExtension extends DataExtension
{

    /**
     * Prevent children pages from showing up in the SiteTree TreeView
     **/
    public function AllChildrenIncludingDeleted()
    {
        return false;
    }

    /*
     * Create a GridField to display the pages.
     *
     * @see CMSMain::ListViewForm() heavily based on this code.
     * @param string $name
     * @param string $title
     * @param SS_List $dataList
     * @return GridField
     */
    public function getGridFieldSiteTreeField($name, $title=null, SS_List $dataList = null)
    {
        $gf = GridField::create(
            $name,
            $title,
            $dataList,
            $config = GridFieldConfig::create()
        );

        $config->addComponents(
            new GridFieldSortableHeader(),
            $columns = new GridFieldDataColumns(),
            new GridFieldPaginator(15)
        );

        $fields = array(
            'getTreeTitle' => _t('SiteTree.PAGETITLE', 'Page Title'),
            'singular_name' => _t('SiteTree.PAGETYPE'),
            'LastEdited' => _t('SiteTree.LASTUPDATED', 'Last Updated'),
        );
        $columns->setDisplayFields($fields);
        $columns->setFieldCasting(array(
            'Created' => 'Datetime->Ago',
            'LastEdited' => 'Datetime->Ago',
            'getTreeTitle' => 'HTMLText'
        ));

        $config->getComponentByType('GridFieldSortableHeader')->setFieldSorting(array('getTreeTitle' => 'Title'));

        $controller = $this;
        $columns->setFieldFormatting(array(
            'getTreeTitle' => function ($value, &$item) use ($controller) {
                return '<a class="action-detail" href="' . singleton('CMSPageEditController')->Link('show') . '/' . $item->ID . '">' . $item->TreeTitle . '</a>';
            }
        ));

        return $gf;
    }
}
