<?php
/**
 * Class file for EbayTradingTypeMoveSellingManagerInventoryFolderRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMoveSellingManagerInventoryFolderRequestType
 * Documentation : Moves a Selling Manager inventory folder. <br><br> This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @date 04/07/2012
 */
class EbayTradingTypeMoveSellingManagerInventoryFolderRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The FolderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique ID of the folder that will be moved. User can retrieve the FolderId using GetSellingManagerInventoryFolder.
	 * @var long
	 */
	public $FolderID;
	/**
	 * The NewParentFolderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique folder ID for the new parent folder. If no NewParentFolderID is submitted, the folder is moved to the root level.
	 * @var long
	 */
	public $NewParentFolderID;
	/**
	 * Constructor
	 * @param long FolderID
	 * @param long NewParentFolderID
	 * @return EbayTradingTypeMoveSellingManagerInventoryFolderRequestType
	 */
	public function __construct($_FolderID = null,$_NewParentFolderID = null)
	{
		EbayTradingWsdlClass::__construct(array('FolderID'=>$_FolderID,'NewParentFolderID'=>$_NewParentFolderID));
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
	 * Set NewParentFolderID
	 * @param long NewParentFolderID
	 * @return long
	 */
	public function setNewParentFolderID($_NewParentFolderID)
	{
		return ($this->NewParentFolderID = $_NewParentFolderID);
	}
	/**
	 * Get NewParentFolderID
	 * @return long
	 */
	public function getNewParentFolderID()
	{
		return $this->NewParentFolderID;
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