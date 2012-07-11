<?php
/**
 * Class file for EbayTradingTypeQuantityInfoType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeQuantityInfoType
 * Documentation : Currently applies to tickets. May apply to other categories in the future.
 * @date 04/07/2012
 */
class EbayTradingTypeQuantityInfoType extends EbayTradingWsdlClass
{
	/**
	 * The MinimumRemnantSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Enables you (the seller) to avoid being left with 1 item in your listing. A typical use case is event tickets in reserved, adjacent seats, or items that typically only sell if more than 1 can be purchased at once. <br> <br> Specify the minimum number of items that should remain if a buyer doesn't purchase all the items. Based on the value of MinimumRemnantSet and the listing's available quantity (Quantity-QuantitySold), eBay calculates how many items a buyer can purchase. For example, suppose you list 5 tickets, and you want at least 2 tickets remaining for the final buyer to purchase. In this case, you would set MinimumRemnantSet to 2. This means a buyer can purchase 1, 2, 3, or 5 tickets, but not 4 (because 4 would leave the seller with 1 ticket).<br> <br> To remove this restriction when you revise or relist, set MinimumRemnantSet to 1.<br> <br> Applicable to multi-quantity, fixed-price listings. Currently supported for US and CA event ticket listings.
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
	 * @return EbayTradingTypeQuantityInfoType
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