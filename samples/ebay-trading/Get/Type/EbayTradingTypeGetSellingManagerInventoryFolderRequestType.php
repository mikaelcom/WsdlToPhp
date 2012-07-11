<?php
/**
 * Class file for EbayTradingTypeGetSellingManagerInventoryFolderRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSellingManagerInventoryFolderRequestType
 * Documentation : Retrieves Selling Manager inventory folders. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSellingManagerInventoryFolderRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The FolderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If a FolderID is submitted, all child-folders below this folder will be returned.
	 * @var long
	 */
	public $FolderID;
	/**
	 * The MaxDepth
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the number of levels of subfolders to be returned. If 0, the parent folder is returned. If 1, the parent and child folders are returned. If 2, the parent and two levels of child folders are returned. Ignored if FullRecursion is set to True.
	 * @var int
	 */
	public $MaxDepth;
	/**
	 * The FullRecursion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Displays the entire tree of a user's folders. If this is provided, FolderID and MaxDepth need not be given.
	 * @var boolean
	 */
	public $FullRecursion;
	/**
	 * Constructor
	 * @param long FolderID
	 * @param int MaxDepth
	 * @param boolean FullRecursion
	 * @return EbayTradingTypeGetSellingManagerInventoryFolderRequestType
	 */
	public function __construct($_FolderID = null,$_MaxDepth = null,$_FullRecursion = null)
	{
		EbayTradingWsdlClass::__construct(array('FolderID'=>$_FolderID,'MaxDepth'=>$_MaxDepth,'FullRecursion'=>$_FullRecursion));
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
	 * Set MaxDepth
	 * @param int MaxDepth
	 * @return int
	 */
	public function setMaxDepth($_MaxDepth)
	{
		return ($this->MaxDepth = $_MaxDepth);
	}
	/**
	 * Get MaxDepth
	 * @return int
	 */
	public function getMaxDepth()
	{
		return $this->MaxDepth;
	}
	/**
	 * Set FullRecursion
	 * @param boolean FullRecursion
	 * @return boolean
	 */
	public function setFullRecursion($_FullRecursion)
	{
		return ($this->FullRecursion = $_FullRecursion);
	}
	/**
	 * Get FullRecursion
	 * @return boolean
	 */
	public function getFullRecursion()
	{
		return $this->FullRecursion;
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