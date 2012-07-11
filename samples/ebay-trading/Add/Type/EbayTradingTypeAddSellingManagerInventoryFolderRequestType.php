<?php
/**
 * Class file for EbayTradingTypeAddSellingManagerInventoryFolderRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddSellingManagerInventoryFolderRequestType
 * Documentation : Adds a new product folder to a user's Selling Manager account. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @date 04/07/2012
 */
class EbayTradingTypeAddSellingManagerInventoryFolderRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The FolderName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name of the new Selling Manager inventory folder.
	 * @var string
	 */
	public $FolderName;
	/**
	 * The ParentFolderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique Folder ID of parent folder. If no ParentFolderID is submitted, Folder is added to root level.
	 * @var long
	 */
	public $ParentFolderID;
	/**
	 * The Comment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains comments that will be associated with this folder.
	 * @var string
	 */
	public $Comment;
	/**
	 * Constructor
	 * @param string FolderName
	 * @param long ParentFolderID
	 * @param string Comment
	 * @return EbayTradingTypeAddSellingManagerInventoryFolderRequestType
	 */
	public function __construct($_FolderName = null,$_ParentFolderID = null,$_Comment = null)
	{
		EbayTradingWsdlClass::__construct(array('FolderName'=>$_FolderName,'ParentFolderID'=>$_ParentFolderID,'Comment'=>$_Comment));
	}
	/**
	 * Set FolderName
	 * @param string FolderName
	 * @return string
	 */
	public function setFolderName($_FolderName)
	{
		return ($this->FolderName = $_FolderName);
	}
	/**
	 * Get FolderName
	 * @return string
	 */
	public function getFolderName()
	{
		return $this->FolderName;
	}
	/**
	 * Set ParentFolderID
	 * @param long ParentFolderID
	 * @return long
	 */
	public function setParentFolderID($_ParentFolderID)
	{
		return ($this->ParentFolderID = $_ParentFolderID);
	}
	/**
	 * Get ParentFolderID
	 * @return long
	 */
	public function getParentFolderID()
	{
		return $this->ParentFolderID;
	}
	/**
	 * Set Comment
	 * @param string Comment
	 * @return string
	 */
	public function setComment($_Comment)
	{
		return ($this->Comment = $_Comment);
	}
	/**
	 * Get Comment
	 * @return string
	 */
	public function getComment()
	{
		return $this->Comment;
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