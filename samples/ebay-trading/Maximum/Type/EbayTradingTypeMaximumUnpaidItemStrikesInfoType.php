<?php
/**
 * Class file for EbayTradingTypeMaximumUnpaidItemStrikesInfoType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMaximumUnpaidItemStrikesInfoType
 * Documentation : Type defining the <b>MaximumUnpaidItemStrikesInfo</b> container, which is used by the seller as a mechanism to block prospective buyers who have one or more unpaid item strikes on their account during a specified time period.
 * @date 04/07/2012
 */
class EbayTradingTypeMaximumUnpaidItemStrikesInfoType extends EbayTradingWsdlClass
{
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This integer value sets the maximum number of unpaid item strikes that a prospective buyer is allowed to have during a specified time period (<b>MaximumUnpaidItemStrikesInfo.Period</b>) before being blocked from buying/bidding on the item.
	 * @var int
	 */
	public $Count;
	/**
	 * The Period
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This enumerated value defines the length of time over which a prospective buyer's unpaid item strikes will be counted. If the prospective buyer's number of unpaid item strikes during this defined period exceeds the value set in the <b>Count</b> field, that prospective buyer is blocked from buying/bidding on the item. <br/><br/> If the <b>Count</b> value is 2, and the specified <b>Period</b> is 'Days_30' (counting back 30 days from the present day), any prospective buyer that has had three or more unpaid item strikes is blocked from buying/bidding on the item.
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
	 * @return EbayTradingTypeMaximumUnpaidItemStrikesInfoType
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