<?php
/**
 * Class file for EbayTradingTypeEndFixedPriceItemResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeEndFixedPriceItemResponseType
 * Documentation : Acknowledgement that includes SKU, as well as the date and time the auction was ended due to the call to EndFixedPriceItem.
 * @date 04/07/2012
 */
class EbayTradingTypeEndFixedPriceItemResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The EndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Timestamp that indicates the date and time (GMT) that the specified item listing was ended.
	 * @var dateTime
	 */
	public $EndTime;
	/**
	 * The SKU
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If a SKU (stock-keeping unit) exists for the item listing, it is returned in the response.
	 * @var EbayTradingTypeSKUType
	 */
	public $SKU;
	/**
	 * Constructor
	 * @param dateTime EndTime
	 * @param EbayTradingTypeSKUType SKU
	 * @return EbayTradingTypeEndFixedPriceItemResponseType
	 */
	public function __construct($_EndTime = null,$_SKU = null)
	{
		EbayTradingWsdlClass::__construct(array('EndTime'=>$_EndTime,'SKU'=>$_SKU));
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
	 * Set SKU
	 * @param SKUType SKU
	 * @return SKUType
	 */
	public function setSKU($_SKU)
	{
		return ($this->SKU = EbayTradingTypeSKUType::valueIsValid($_SKU)?$_SKU:null);
	}
	/**
	 * Get SKU
	 * @return EbayTradingTypeSKUType
	 */
	public function getSKU()
	{
		return $this->SKU;
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