<?php
/**
 * Class file for EbayTradingTypeStoreCustomCategoryType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreCustomCategoryType
 * Documentation : Configuration of a store custom category.
 * @date 04/07/2012
 */
class EbayTradingTypeStoreCustomCategoryType extends EbayTradingWsdlClass
{
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- documentation : Custom category ID. For SetStoreCategories, required only if Action is set to Rename, Move or Delete.
	 * @var long
	 */
	public $CategoryID;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name of the custom category.
	 * @var string
	 */
	public $Name;
	/**
	 * The Order
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Order in which the custom category appears in the list of store categories.
	 * @var int
	 */
	public $Order;
	/**
	 * The ChildCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the properties of a custom subcategory for an eBay Store. eBay Stores support three category levels.
	 * @var EbayTradingTypeStoreCustomCategoryType
	 */
	public $ChildCategory;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param long CategoryID
	 * @param string Name
	 * @param int Order
	 * @param EbayTradingTypeStoreCustomCategoryType ChildCategory
	 * @param DOMDocument any
	 * @return EbayTradingTypeStoreCustomCategoryType
	 */
	public function __construct($_CategoryID = null,$_Name = null,$_Order = null,$_ChildCategory = null,$_any = null)
	{
		parent::__construct(array('CategoryID'=>$_CategoryID,'Name'=>$_Name,'Order'=>$_Order,'ChildCategory'=>$_ChildCategory,'any'=>$_any));
	}
	/**
	 * Set CategoryID
	 * @param long CategoryID
	 * @return long
	 */
	public function setCategoryID($_CategoryID)
	{
		return ($this->CategoryID = $_CategoryID);
	}
	/**
	 * Get CategoryID
	 * @return long
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Order
	 * @param int Order
	 * @return int
	 */
	public function setOrder($_Order)
	{
		return ($this->Order = $_Order);
	}
	/**
	 * Get Order
	 * @return int
	 */
	public function getOrder()
	{
		return $this->Order;
	}
	/**
	 * Set ChildCategory
	 * @param StoreCustomCategoryType ChildCategory
	 * @return StoreCustomCategoryType
	 */
	public function setChildCategory($_ChildCategory)
	{
		return ($this->ChildCategory = $_ChildCategory);
	}
	/**
	 * Get ChildCategory
	 * @return EbayTradingTypeStoreCustomCategoryType
	 */
	public function getChildCategory()
	{
		return $this->ChildCategory;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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