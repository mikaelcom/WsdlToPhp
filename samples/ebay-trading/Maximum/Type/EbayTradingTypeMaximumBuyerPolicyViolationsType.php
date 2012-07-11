<?php
/**
 * Class file for EbayTradingTypeMaximumBuyerPolicyViolationsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMaximumBuyerPolicyViolationsType
 * Documentation : Container for Maximum Buyer Policy Violation Reports buyer requirements in listing calls.
 * @date 04/07/2012
 */
class EbayTradingTypeMaximumBuyerPolicyViolationsType extends EbayTradingWsdlClass
{
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Maximum allowed buyer policy violation reports against the buyer. If the limit is reached, the buyer can not bid on this item. Used with Period.
	 * @var int
	 */
	public $Count;
	/**
	 * The Period
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If a buyer fails to follow eBay policy guidelines for an auction, they may incur a buyer violation report on their account. The Period and Count elements allow a seller to specify that only buyers with a specified number of buyer violation reports within a given period of time can bid on their item. If a buyer has more buyer violation reports than specified within these limits, the buyer can not bid on this item. The Period is the past number of days (last 60 days, last 180 days, etc.) within which the buyer violation reports are calculated. Used with Count.
	 * @var EbayTradingTypePeriodCodeType
	 */
	public $Period;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int Count
	 * @param EbayTradingTypePeriodCodeType Period
	 * @param DOMDocument any
	 * @return EbayTradingTypeMaximumBuyerPolicyViolationsType
	 */
	public function __construct($_Count = null,$_Period = null,$_any = null)
	{
		parent::__construct(array('Count'=>$_Count,'Period'=>$_Period,'any'=>$_any));
	}
	/**
	 * Set Count
	 * @param int Count
	 * @return int
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return int
	 */
	public function getCount()
	{
		return $this->Count;
	}
	/**
	 * Set Period
	 * @param PeriodCodeType Period
	 * @return PeriodCodeType
	 */
	public function setPeriod($_Period)
	{
		return ($this->Period = EbayTradingTypePeriodCodeType::valueIsValid($_Period)?$_Period:null);
	}
	/**
	 * Get Period
	 * @return EbayTradingTypePeriodCodeType
	 */
	public function getPeriod()
	{
		return $this->Period;
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