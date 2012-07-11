<?php
/**
 * Class file for EbayTradingTypeSetStoreCategoriesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSetStoreCategoriesRequestType
 * Documentation : Changes the category structure of an eBay store.
 * @date 04/07/2012
 */
class EbayTradingTypeSetStoreCategoriesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The Action
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the type of action (Add, Move, Delete, or Rename) to carry out for the specified categories.
	 * @var EbayTradingTypeStoreCategoryUpdateActionCodeType
	 */
	public $Action;
	/**
	 * The ItemDestinationCategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Items can only be contained within child categories. A parent category cannot contain items. If adding, moving, or deleting categories displaces items, you must specify a destination child category under which the displaced items will be moved. The destination category must have no child categories.
	 * @var long
	 */
	public $ItemDestinationCategoryID;
	/**
	 * The DestinationParentCategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : When adding or moving store categories, specifies the category under which the listed categories will be located. To add or move categories to the top level, set the value to -999.
	 * @var long
	 */
	public $DestinationParentCategoryID;
	/**
	 * The StoreCategories
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the store categories on which to act.
	 * @var EbayTradingTypeStoreCustomCategoryArrayType
	 */
	public $StoreCategories;
	/**
	 * Constructor
	 * @param EbayTradingTypeStoreCategoryUpdateActionCodeType Action
	 * @param long ItemDestinationCategoryID
	 * @param long DestinationParentCategoryID
	 * @param EbayTradingTypeStoreCustomCategoryArrayType StoreCategories
	 * @return EbayTradingTypeSetStoreCategoriesRequestType
	 */
	public function __construct($_Action = null,$_ItemDestinationCategoryID = null,$_DestinationParentCategoryID = null,$_StoreCategories = null)
	{
		EbayTradingWsdlClass::__construct(array('Action'=>$_Action,'ItemDestinationCategoryID'=>$_ItemDestinationCategoryID,'DestinationParentCategoryID'=>$_DestinationParentCategoryID,'StoreCategories'=>$_StoreCategories));
	}
	/**
	 * Set Action
	 * @param StoreCategoryUpdateActionCodeType Action
	 * @return StoreCategoryUpdateActionCodeType
	 */
	public function setAction($_Action)
	{
		return ($this->Action = EbayTradingTypeStoreCategoryUpdateActionCodeType::valueIsValid($_Action)?$_Action:null);
	}
	/**
	 * Get Action
	 * @return EbayTradingTypeStoreCategoryUpdateActionCodeType
	 */
	public function getAction()
	{
		return $this->Action;
	}
	/**
	 * Set ItemDestinationCategoryID
	 * @param long ItemDestinationCategoryID
	 * @return long
	 */
	public function setItemDestinationCategoryID($_ItemDestinationCategoryID)
	{
		return ($this->ItemDestinationCategoryID = $_ItemDestinationCategoryID);
	}
	/**
	 * Get ItemDestinationCategoryID
	 * @return long
	 */
	public function getItemDestinationCategoryID()
	{
		return $this->ItemDestinationCategoryID;
	}
	/**
	 * Set DestinationParentCategoryID
	 * @param long DestinationParentCategoryID
	 * @return long
	 */
	public function setDestinationParentCategoryID($_DestinationParentCategoryID)
	{
		return ($this->DestinationParentCategoryID = $_DestinationParentCategoryID);
	}
	/**
	 * Get DestinationParentCategoryID
	 * @return long
	 */
	public function getDestinationParentCategoryID()
	{
		return $this->DestinationParentCategoryID;
	}
	/**
	 * Set StoreCategories
	 * @param StoreCustomCategoryArrayType StoreCategories
	 * @return StoreCustomCategoryArrayType
	 */
	public function setStoreCategories($_StoreCategories)
	{
		return ($this->StoreCategories = $_StoreCategories);
	}
	/**
	 * Get StoreCategories
	 * @return EbayTradingTypeStoreCustomCategoryArrayType
	 */
	public function getStoreCategories()
	{
		return $this->StoreCategories;
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