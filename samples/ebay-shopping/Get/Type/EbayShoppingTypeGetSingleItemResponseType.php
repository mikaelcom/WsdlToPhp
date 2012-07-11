<?php
/**
 * Class file for EbayShoppingTypeGetSingleItemResponseType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeGetSingleItemResponseType
 * Documentation : Response to GetSingleItem request.
 * @date 05/07/2012
 */
class EbayShoppingTypeGetSingleItemResponseType extends EbayShoppingTypeAbstractResponseType
{
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains details about the listing whose ID was specified in the request.
	 * @var EbayShoppingTypeSimpleItemType
	 */
	public $Item;
	/**
	 * Constructor
	 * @param EbayShoppingTypeSimpleItemType Item
	 * @return EbayShoppingTypeGetSingleItemResponseType
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