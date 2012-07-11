<?php
/**
 * Class file for EbayTradingTypeReviseSellingManagerInventoryFolderRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReviseSellingManagerInventoryFolderRequestType
 * Documentation : Renames a Selling Manager inventory folder. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @date 04/07/2012
 */
class EbayTradingTypeReviseSellingManagerInventoryFolderRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The Folder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Identifier of the folder to be modified. Valid inputs are folder ID, folder name, and comments.
	 * @var EbayTradingTypeSellingManagerFolderDetailsType
	 */
	public $Folder;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingManagerFolderDetailsType Folder
	 * @return EbayTradingTypeReviseSellingManagerInventoryFolderRequestType
	 */
	public function __construct($_Folder = null)
	{
		EbayTradingWsdlClass::__construct(array('Folder'=>$_Folder));
	}
	/**
	 * Set Folder
	 * @param SellingManagerFolderDetailsType Folder
	 * @return SellingManagerFolderDetailsType
	 */
	public function setFolder($_Folder)
	{
		return ($this->Folder = $_Folder);
	}
	/**
	 * Get Folder
	 * @return EbayTradingTypeSellingManagerFolderDetailsType
	 */
	public function getFolder()
	{
		return $this->Folder;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>