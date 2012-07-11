<?php
/**
 * Class file for EbayShoppingTypeSellingStatusType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeSellingStatusType
 * Documentation : Contains various details about the current status of a listing. These values are computed by eBay and cannot be specified at listing time.
 * @date 05/07/2012
 */
class EbayShoppingTypeSellingStatusType extends EbayShoppingWsdlClass
{
	/**
	 * The ConvertedCurrentPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Not used. See Item.ConvertedCurrentPrice.
	 * @var EbayShoppingTypeAmountType
	 */
	public $ConvertedCurrentPrice;
	/**
	 * The CurrentPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Not used. See Item.CurrentPrice and Variation.StartPrice.
	 * @var EbayShoppingTypeAmountType
	 */
	public $CurrentPrice;
	/**
	 * The QuantitySold
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of items sold from this variation. Subtract from Quantity to determine the number of items available.
	 * @var int
	 */
	public $QuantitySold;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayShoppingTypeAmountType ConvertedCurrentPrice
	 * @param EbayShoppingTypeAmountType CurrentPrice
	 * @param int QuantitySold
	 * @param DOMDocument any
	 * @return EbayShoppingTypeSellingStatusType
	 */
	public function __construct($_ConvertedCurrentPrice = null,$_CurrentPrice = null,$_QuantitySold = null,$_any = null)
	{
		parent::__construct(array('ConvertedCurrentPrice'=>$_ConvertedCurrentPrice,'CurrentPrice'=>$_CurrentPrice,'QuantitySold'=>$_QuantitySold,'any'=>$_any));
	}
	/**
	 * Set ConvertedCurrentPrice
	 * @param AmountType ConvertedCurrentPrice
	 * @return AmountType
	 */
	public function setConvertedCurrentPrice($_ConvertedCurrentPrice)
	{
		return ($this->ConvertedCurrentPrice = $_ConvertedCurrentPrice);
	}
	/**
	 * Get ConvertedCurrentPrice
	 * @return EbayShoppingTypeAmountType
	 */
	public function getConvertedCurrentPrice()
	{
		return $this->ConvertedCurrentPrice;
	}
	/**
	 * Set CurrentPrice
	 * @param AmountType CurrentPrice
	 * @return AmountType
	 */
	public function setCurrentPrice($_CurrentPrice)
	{
		return ($this->CurrentPrice = $_CurrentPrice);
	}
	/**
	 * Get CurrentPrice
	 * @return EbayShoppingTypeAmountType
	 */
	public function getCurrentPrice()
	{
		return $this->CurrentPrice;
	}
	/**
	 * Set QuantitySold
	 * @param int QuantitySold
	 * @return int
	 */
	public function setQuantitySold($_QuantitySold)
	{
		return ($this->QuantitySold = $_QuantitySold);
	}
	/**
	 * Get QuantitySold
	 * @return int
	 */
	public function getQuantitySold()
	{
		return $this->QuantitySold;
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