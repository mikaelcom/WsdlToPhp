<?php
/**
 * Class file for EbayShoppingTypeGetMultipleItemsResponseType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeGetMultipleItemsResponseType
 * Documentation : Response to request of GetMultipleItems.
 * @date 05/07/2012
 */
class EbayShoppingTypeGetMultipleItemsResponseType extends EbayShoppingTypeAbstractResponseType
{
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains details for a listing (or multiple) listings that correspond to the item ID(s) specified in the request.
	 * @var EbayShoppingTypeSimpleItemType
	 */
	public $Item;
	/**
	 * Constructor
	 * @param EbayShoppingTypeSimpleItemType Item
	 * @return EbayShoppingTypeGetMultipleItemsResponseType
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