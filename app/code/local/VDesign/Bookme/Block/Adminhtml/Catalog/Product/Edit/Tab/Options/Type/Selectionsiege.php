<?php

/**
 * Magento
*
* NOTICE OF LICENSE
*
* This source file is subject to the End User License Agreement (EULA)
* that is bundled with this package in the file LICENSE.txt.
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to vdesign.support@outlook.com so we can send you a copy immediately.
*
* @category   Mage
* @copyright  Copyright (c) 2014 VDesign
* @license    End User License Agreement (EULA)
*/

//Eric: New Class

class VDesign_Bookme_Block_Adminhtml_Catalog_Product_Edit_Tab_Options_Type_Selectionsiege
extends Mage_Adminhtml_Block_Catalog_Product_Edit_Tab_Options_Type_Abstract
{


	public function __construct()
	{
		Mage::log('option type edit Selectionsiege');
		parent::__construct();
		$this->setTemplate('vdesign_bookme/options/type/selectionsiege.phtml');
	}
}