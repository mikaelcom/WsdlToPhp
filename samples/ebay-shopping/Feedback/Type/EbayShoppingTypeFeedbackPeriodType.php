<?php
/**
 * Class file for EbayShoppingTypeFeedbackPeriodType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeFeedbackPeriodType
 * Documentation : Contains the data for one type of feedback for one predefined time period. Parent FeedbackPeriodArrayType object indicates the type of feedback counted: positive, neutral, negative, or total.
 * @date 05/07/2012
 */
class EbayShoppingTypeFeedbackPeriodType extends EbayShoppingWsdlClass
{
	/**
	 * The PeriodInDays
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the time period for the feedback count. Returns a value indicating the number of days prior to the call for which feedbacks of the particular type are counted.
	 * @var int
	 */
	public $PeriodInDays;
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Count of the feedbacks received by the user for the time period prior to the call indicated in PeriodInDays.
	 * @var long
	 */
	public $Count;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int PeriodInDays
	 * @param long Count
	 * @param DOMDocument any
	 * @return EbayShoppingTypeFeedbackPeriodType
	 */
	public function __construct($_PeriodInDays = null,$_Count = null,$_any = null)
	{
		parent::__construct(array('PeriodInDays'=>$_PeriodInDays,'Count'=>$_Count,'any'=>$_any));
	}
	/**
	 * Set PeriodInDays
	 * @param int PeriodInDays
	 * @return int
	 */
	public function setPeriodInDays($_PeriodInDays)
	{
		return ($this->PeriodInDays = $_PeriodInDays);
	}
	/**
	 * Get PeriodInDays
	 * @return int
	 */
	public function getPeriodInDays()
	{
		return $this->PeriodInDays;
	}
	/**
	 * Set Count
	 * @param long Count
	 * @return long
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return long
	 */
	public function getCount()
	{
		return $this->Count;
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