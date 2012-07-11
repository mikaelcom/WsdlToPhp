<?php
/**
 * Class file for EbayTradingTypeAddItemRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddItemRequestType
 * Documentation : Defines a single new item and lists it on a specified eBay site.&nbsp;<b>Also for Half.com</b>. Returns the item ID for the new listing, and returns fees the seller will incur for the listing (not including the Final Value Fee, which cannot be calculated until the item is sold).
 * @date 04/07/2012
 */
class EbayTradingTypeAddItemRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Root container holding all values that define a new listing. <br> <br> Applicable to Half.com.
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemType Item
	 * @return EbayTradingTypeAddItemRequestType
	 */
	public function __construct($_Item = null)
	{
		EbayTradingWsdlClass::__construct(array('Item'=>$_Item));
	}
	/**
	 * Set Item
	 * @param ItemType Item
	 * @return ItemType
	 */
	public function setItem($_Item)
	{
		return ($this->Item = $_Item);
	}
	/**
	 * Get Item
	 * @return EbayTradingTypeItemType
	 */
	public function getItem()
	{
		return $this->Item;
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