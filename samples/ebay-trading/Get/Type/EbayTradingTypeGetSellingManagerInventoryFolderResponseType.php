<?php
/**
 * Class file for EbayTradingTypeGetSellingManagerInventoryFolderResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSellingManagerInventoryFolderResponseType
 * Documentation : Returns the folder structure of the input folderID.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSellingManagerInventoryFolderResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The Folder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Details of the requested folder.
	 * @var EbayTradingTypeSellingManagerFolderDetailsType
	 */
	public $Folder;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingManagerFolderDetailsType Folder
	 * @return EbayTradingTypeGetSellingManagerInventoryFolderResponseType
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