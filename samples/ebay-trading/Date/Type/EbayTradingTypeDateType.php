<?php
/**
 * Class file for EbayTradingTypeDateType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDateType
 * Documentation : Defines year, month, and day as individual components of a date. Only applicable to use cases that support incomplete dates. Otherwise, we use xs:dateTime (or xs:date, as appropriate).
 * @date 04/07/2012
 */
class EbayTradingTypeDateType extends EbayTradingWsdlClass
{
	/**
	 * The Year
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A year in the form YYYY. For ticket searches on the US site, only specify 2007 or 2008. If you specify any other year, it is ignored.
	 * @var int
	 */
	public $Year;
	/**
	 * The Month
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A calendar month (e.g., 2 or 02 for February). For ticket searches, Month is required if Day is specified.
	 * @var int
	 */
	public $Month;
	/**
	 * The Day
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A calendar day (e.g., 2 or 02). For ticket searches, Day is only valid if Month is also specified.
	 * @var int
	 */
	public $Day;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int Year
	 * @param int Month
	 * @param int Day
	 * @param DOMDocument any
	 * @return EbayTradingTypeDateType
	 */
	public function __construct($_Year = null,$_Month = null,$_Day = null,$_any = null)
	{
		parent::__construct(array('Year'=>$_Year,'Month'=>$_Month,'Day'=>$_Day,'any'=>$_any));
	}
	/**
	 * Set Year
	 * @param int Year
	 * @return int
	 */
	public function setYear($_Year)
	{
		return ($this->Year = $_Year);
	}
	/**
	 * Get Year
	 * @return int
	 */
	public function getYear()
	{
		return $this->Year;
	}
	/**
	 * Set Month
	 * @param int Month
	 * @return int
	 */
	public function setMonth($_Month)
	{
		return ($this->Month = $_Month);
	}
	/**
	 * Get Month
	 * @return int
	 */
	public function getMonth()
	{
		return $this->Month;
	}
	/**
	 * Set Day
	 * @param int Day
	 * @return int
	 */
	public function setDay($_Day)
	{
		return ($this->Day = $_Day);
	}
	/**
	 * Get Day
	 * @return int
	 */
	public function getDay()
	{
		return $this->Day;
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