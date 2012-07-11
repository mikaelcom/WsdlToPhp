<?php
/**
 * Class file for EbayTradingTypePromotionalSaleDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePromotionalSaleDetailsType
 * Documentation : If a seller has reduced the price of a listed item with the Promotional Price Display feature, this type contains the original price of the discounted item and other information.
 * @date 04/07/2012
 */
class EbayTradingTypePromotionalSaleDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The OriginalPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Original price of an item whose price a seller has reduced with the Promotional Price Display feature.
	 * @var EbayTradingTypeAmountType
	 */
	public $OriginalPrice;
	/**
	 * The StartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Start time of a discount for an item whose price a seller has reduced with the Promotional Price Display feature.
	 * @var dateTime
	 */
	public $StartTime;
	/**
	 * The EndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : End time of a discount for an item whose price a seller has reduced with the Promotional Price Display feature.
	 * @var dateTime
	 */
	public $EndTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeAmountType OriginalPrice
	 * @param dateTime StartTime
	 * @param dateTime EndTime
	 * @param DOMDocument any
	 * @return EbayTradingTypePromotionalSaleDetailsType
	 */
	public function __construct($_OriginalPrice = null,$_StartTime = null,$_EndTime = null,$_any = null)
	{
		parent::__construct(array('OriginalPrice'=>$_OriginalPrice,'StartTime'=>$_StartTime,'EndTime'=>$_EndTime,'any'=>$_any));
	}
	/**
	 * Set OriginalPrice
	 * @param AmountType OriginalPrice
	 * @return AmountType
	 */
	public function setOriginalPrice($_OriginalPrice)
	{
		return ($this->OriginalPrice = $_OriginalPrice);
	}
	/**
	 * Get OriginalPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getOriginalPrice()
	{
		return $this->OriginalPrice;
	}
	/**
	 * Set StartTime
	 * @param dateTime StartTime
	 * @return dateTime
	 */
	public function setStartTime($_StartTime)
	{
		return ($this->StartTime = $_StartTime);
	}
	/**
	 * Get StartTime
	 * @return dateTime
	 */
	public function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * Set EndTime
	 * @param dateTime EndTime
	 * @return dateTime
	 */
	public function setEndTime($_EndTime)
	{
		return ($this->EndTime = $_EndTime);
	}
	/**
	 * Get EndTime
	 * @return dateTime
	 */
	public function getEndTime()
	{
		return $this->EndTime;
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