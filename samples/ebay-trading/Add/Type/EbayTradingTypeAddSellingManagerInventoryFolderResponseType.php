<?php
/**
 * Class file for EbayTradingTypeAddSellingManagerInventoryFolderResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddSellingManagerInventoryFolderResponseType
 * Documentation : Returns the status of an add folder operation.
 * @date 04/07/2012
 */
class EbayTradingTypeAddSellingManagerInventoryFolderResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The FolderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : New ID of the folder newly created in the user's Selling Manager account.
	 * @var long
	 */
	public $FolderID;
	/**
	 * Constructor
	 * @param long FolderID
	 * @return EbayTradingTypeAddSellingManagerInventoryFolderResponseType
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