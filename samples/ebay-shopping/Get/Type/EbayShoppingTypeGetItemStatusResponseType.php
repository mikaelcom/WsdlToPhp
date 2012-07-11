<?php
/**
 * Class file for EbayShoppingTypeGetItemStatusResponseType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeGetItemStatusResponseType
 * Documentation : Returns status information for all items in a list. Some of the Item information is returned in an SimpleItemArrayType object, that can include zero, one, or multiple ItemType objects.
 * @date 05/07/2012
 */
class EbayShoppingTypeGetItemStatusResponseType extends EbayShoppingTypeAbstractResponseType
{
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Collection of Item status objects in an SimpleItemArrayType object, that can include zero, one, or multiple ItemType objects.
	 * @var EbayShoppingTypeSimpleItemType
	 */
	public $Item;
	/**
	 * Constructor
	 * @param EbayShoppingTypeSimpleItemType Item
	 * @return EbayShoppingTypeGetItemStatusResponseType
	 */
	public function __construct($_Item = null)
	{
		EbayShoppingWsdlClass::__construct(array('Item'=>$_Item));
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