<?php
/**
 * Class file for EbayTradingTypeReviseSellingManagerInventoryFolderResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReviseSellingManagerInventoryFolderResponseType
 * Documentation : Returns the status of a revise folder operation.
 * @date 04/07/2012
 */
class EbayTradingTypeReviseSellingManagerInventoryFolderResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The Folder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information about the folder that has been renamed.
	 * @var EbayTradingTypeSellingManagerFolderDetailsType
	 */
	public $Folder;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingManagerFolderDetailsType Folder
	 * @return EbayTradingTypeReviseSellingManagerInventoryFolderResponseType
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