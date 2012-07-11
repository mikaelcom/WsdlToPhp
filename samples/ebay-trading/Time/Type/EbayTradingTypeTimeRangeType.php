<?php
/**
 * Class file for EbayTradingTypeTimeRangeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeTimeRangeType
 * Documentation : Specifies the Date range.
 * @date 04/07/2012
 */
class EbayTradingTypeTimeRangeType extends EbayTradingWsdlClass
{
	/**
	 * The TimeFrom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the earliest (oldest) date to be used in a date range.
	 * @var dateTime
	 */
	public $TimeFrom;
	/**
	 * The TimeTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the latest (most recent) date to be used in a date range.
	 * @var dateTime
	 */
	public $TimeTo;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param dateTime TimeFrom
	 * @param dateTime TimeTo
	 * @param DOMDocument any
	 * @return EbayTradingTypeTimeRangeType
	 */
	public function __construct($_TimeFrom = null,$_TimeTo = null,$_any = null)
	{
		parent::__construct(array('TimeFrom'=>$_TimeFrom,'TimeTo'=>$_TimeTo,'any'=>$_any));
	}
	/**
	 * Set TimeFrom
	 * @param dateTime TimeFrom
	 * @return dateTime
	 */
	public function setTimeFrom($_TimeFrom)
	{
		return ($this->TimeFrom = $_TimeFrom);
	}
	/**
	 * Get TimeFrom
	 * @return dateTime
	 */
	public function getTimeFrom()
	{
		return $this->TimeFrom;
	}
	/**
	 * Set TimeTo
	 * @param dateTime TimeTo
	 * @return dateTime
	 */
	public function setTimeTo($_TimeTo)
	{
		return ($this->TimeTo = $_TimeTo);
	}
	/**
	 * Get TimeTo
	 * @return dateTime
	 */
	public function getTimeTo()
	{
		return $this->TimeTo;
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