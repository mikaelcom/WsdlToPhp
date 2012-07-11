<?php
/**
 * Class file for EbayTradingTypeVerifyAddFixedPriceItemRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVerifyAddFixedPriceItemRequestType
 * Documentation : Enables a seller to test the definition of a new fixed-price listing by submitting the definition to eBay without creating a actual listing.
 * @date 04/07/2012
 */
class EbayTradingTypeVerifyAddFixedPriceItemRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Root container holding all values that define a new fixed-price listing.
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemType Item
	 * @return EbayTradingTypeVerifyAddFixedPriceItemRequestType
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