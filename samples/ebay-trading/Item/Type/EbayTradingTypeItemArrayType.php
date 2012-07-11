<?php
/**
 * Class file for EbayTradingTypeItemArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemArrayType
 * Documentation : Container for a list of items. Can contain zero, one, or multiple ItemType objects, each of which conveys the data for one item listing.
 * @date 04/07/2012
 */
class EbayTradingTypeItemArrayType extends EbayTradingWsdlClass
{
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the data properties that define one item listing. GetSellerEvents and GetSellerList only return items if any are available for the seller within the time window specified in the request.<br> <br> Some optional fields are only returned if the seller defined them for the item. Some fields are only returned under particular conditions specified in the individual field descriptions. For example, a buyer's contact information might only be returned if the member who is making the request (as identified in eBayAuthToken) has an order relationship with that buyer. <br> <br> For calls that support detail levels, the set of fields returned is also controlled by the value of DetailLevel in the request. For some calls, other parameters in the request can also control the data returned for each item. For example, GranularityLevel controls the fields to return for each item in the GetSellerList response.
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemType Item
	 * @return EbayTradingTypeItemArrayType
	 */
	public function __construct($_Item = null)
	{
		parent::__construct(array('Item'=>$_Item));
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