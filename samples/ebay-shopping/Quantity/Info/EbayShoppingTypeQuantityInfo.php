<?php
/**
 * Class file for EbayShoppingTypeQuantityInfo
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeQuantityInfo
 * Documentation : Type defining the <b>QuantityInfo</b> container, which consists of the <b>MinimumRemnantSet</b> field, which sets the minimum amount of event tickets that can remain in the fixed-price listing's inventory after a buyer purchases one or more tickets (but not all) from the listing.
 * @date 05/07/2012
 */
class EbayShoppingTypeQuantityInfo extends EbayShoppingWsdlClass
{
	/**
	 * The MinimumRemnantSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field enables the seller to avoid being left with 1 item in a multi-quanity, fixed- priced event ticket listing. A typical use case is event tickets in reserved, adjacent seats, or items that typically only sell if more than 1 can be purchased at once. <br> <br> At listing time, sellers specify the minimum number of items that should remain if a buyer doesn't purchase all the items. Based on the value of <b>MinimumRemnantSet</b> and the listing's available quantity (Quantity-QuantitySold), eBay calculates the quantity of tickets a buyer can purchase. For example, suppose a seller lists 5 tickets, and wants at least 2 tickets remaining for the final buyer to purchase. In this case, the seller would set <b>MinimumRemnantSet</b> to '2'. This means a buyer can purchase 1, 2, 3, or 5 tickets, but not 4 (because 4 would leave the seller with 1 ticket).<br> <br> To remove this restriction when revising or relisting item, the seller would set the <b>MinimumRemnantSet</b> value to '1'.<br> <br> This field is currently only applicable for event ticket listings in US and CA, but may apply to other categories in the future. It is only returned if set by the seller in the listing.
	 * @var int
	 */
	public $MinimumRemnantSet;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int MinimumRemnantSet
	 * @param DOMDocument any
	 * @return EbayShoppingTypeQuantityInfo
	 */
	public function __construct($_MinimumRemnantSet = null,$_any = null)
	{
		parent::__construct(array('MinimumRemnantSet'=>$_MinimumRemnantSet,'any'=>$_any));
	}
	/**
	 * Set MinimumRemnantSet
	 * @param int MinimumRemnantSet
	 * @return int
	 */
	public function setMinimumRemnantSet($_MinimumRemnantSet)
	{
		return ($this->MinimumRemnantSet = $_MinimumRemnantSet);
	}
	/**
	 * Get MinimumRemnantSet
	 * @return int
	 */
	public function getMinimumRemnantSet()
	{
		return $this->MinimumRemnantSet;
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