<?php
/**
 * Class file for EbayTradingTypeGetStoreRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetStoreRequestType
 * Documentation : Retrieves configuration information for the eBay store owned by the specified UserID, or by the caller.
 * @date 04/07/2012
 */
class EbayTradingTypeGetStoreRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The CategoryStructureOnly
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If this is set to True, only the category structure of the store is returned. If this is not specified or set to False, the complete store configuration is returned.
	 * @var boolean
	 */
	public $CategoryStructureOnly;
	/**
	 * The RootCategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the category ID for the topmost category to return (along with the subcategories under it, the value of the LevelLimit property determining how deep). This tag is optional. If RootCategoryID is not specified, then the category tree starting at that root Category is returned.
	 * @var long
	 */
	public $RootCategoryID;
	/**
	 * The LevelLimit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the limit for the number of levels of the category hierarchy to return, where the given root category is level 1 and its children are level 2. Only categories at or above the level specified are returned. This tag is optional. If LevelLimit is not set, the complete category hierarchy is returned. Stores support category hierarchies up to 3 levels only.
	 * @var int
	 */
	public $LevelLimit;
	/**
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the user whose store data is to be returned. If not specified, then the store returned is that for the requesting user.
	 * @var EbayTradingTypeUserIDType
	 */
	public $UserID;
	/**
	 * Constructor
	 * @param boolean CategoryStructureOnly
	 * @param long RootCategoryID
	 * @param int LevelLimit
	 * @param EbayTradingTypeUserIDType UserID
	 * @return EbayTradingTypeGetStoreRequestType
	 */
	public function __construct($_CategoryStructureOnly = null,$_RootCategoryID = null,$_LevelLimit = null,$_UserID = null)
	{
		EbayTradingWsdlClass::__construct(array('CategoryStructureOnly'=>$_CategoryStructureOnly,'RootCategoryID'=>$_RootCategoryID,'LevelLimit'=>$_LevelLimit,'UserID'=>$_UserID));
	}
	/**
	 * Set CategoryStructureOnly
	 * @param boolean CategoryStructureOnly
	 * @return boolean
	 */
	public function setCategoryStructureOnly($_CategoryStructureOnly)
	{
		return ($this->CategoryStructureOnly = $_CategoryStructureOnly);
	}
	/**
	 * Get CategoryStructureOnly
	 * @return boolean
	 */
	public function getCategoryStructureOnly()
	{
		return $this->CategoryStructureOnly;
	}
	/**
	 * Set RootCategoryID
	 * @param long RootCategoryID
	 * @return long
	 */
	public function setRootCategoryID($_RootCategoryID)
	{
		return ($this->RootCategoryID = $_RootCategoryID);
	}
	/**
	 * Get RootCategoryID
	 * @return long
	 */
	public function getRootCategoryID()
	{
		return $this->RootCategoryID;
	}
	/**
	 * Set LevelLimit
	 * @param int LevelLimit
	 * @return int
	 */
	public function setLevelLimit($_LevelLimit)
	{
		return ($this->LevelLimit = $_LevelLimit);
	}
	/**
	 * Get LevelLimit
	 * @return int
	 */
	public function getLevelLimit()
	{
		return $this->LevelLimit;
	}
	/**
	 * Set UserID
	 * @param UserIDType UserID
	 * @return UserIDType
	 */
	public function setUserID($_UserID)
	{
		return ($this->UserID = EbayTradingTypeUserIDType::valueIsValid($_UserID)?$_UserID:null);
	}
	/**
	 * Get UserID
	 * @return EbayTradingTypeUserIDType
	 */
	public function getUserID()
	{
		return $this->UserID;
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