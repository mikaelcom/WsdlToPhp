<?php
/**
 * Class file for EbayTradingTypeDeleteSellingManagerInventoryFolderRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDeleteSellingManagerInventoryFolderRequestType
 * Documentation : Removes an inventory folder when a user deletes it in My eBay. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @date 04/07/2012
 */
class EbayTradingTypeDeleteSellingManagerInventoryFolderRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The FolderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique ID of the folder to be deleted.
	 * @var long
	 */
	public $FolderID;
	/**
	 * Constructor
	 * @param long FolderID
	 * @return EbayTradingTypeDeleteSellingManagerInventoryFolderRequestType
	 */
	public function __construct($_FolderID = null)
	{
		EbayTradingWsdlClass::__construct(array('FolderID'=>$_FolderID));
	}
	/**
	 * Set FolderID
	 * @param long FolderID
	 * @return long
	 */
	public function setFolderID($_FolderID)
	{
		return ($this->FolderID = $_FolderID);
	}
	/**
	 * Get FolderID
	 * @return long
	 */
	public function getFolderID()
	{
		return $this->FolderID;
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