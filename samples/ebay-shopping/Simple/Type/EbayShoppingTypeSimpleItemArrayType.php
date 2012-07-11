<?php
/**
 * Class file for EbayShoppingTypeSimpleItemArrayType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeSimpleItemArrayType
 * Documentation : Container for a list of items. Can contain zero, one, or multiple SimpleItemType objects, each of which conveys the data for one item listing.
 * @date 05/07/2012
 */
class EbayShoppingTypeSimpleItemArrayType extends EbayShoppingWsdlClass
{
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains data for an item listing.
	 * @var EbayShoppingTypeSimpleItemType
	 */
	public $Item;
	/**
	 * Constructor
	 * @param EbayShoppingTypeSimpleItemType Item
	 * @return EbayShoppingTypeSimpleItemArrayType
	 */
	public function __construct($_Item = null)
	{
		parent::__construct(array('Item'=>$_Item));
	}
	/**
	 * Set Item
	 * @param SimpleItemType Item
	 * @return SimpleItemType
	 */
	public function setItem($_Item)
	{
		return ($this->Item = $_Item);
	}
	/**
	 * Get Item
	 * @return EbayShoppingTypeSimpleItemType
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