<?php
/**
 * Class file for XiFuturesTypeGetHistoricalFutures
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalFutures
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalFutures extends XiFuturesWsdlClass
{
	/**
	 * The Symbols
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbols;
	/**
	 * The Month
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Month;
	/**
	 * The Year
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Year;
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * Constructor
	 * @param string Symbols
	 * @param int Month
	 * @param int Year
	 * @param string AsOfDate
	 * @return XiFuturesTypeGetHistoricalFutures
	 */
	public function __construct($_Symbols = null,$_Month,$_Year,$_AsOfDate = null)
	{
		parent::__construct(array('Symbols'=>$_Symbols,'Month'=>$_Month,'Year'=>$_Year,'AsOfDate'=>$_AsOfDate));
	}
	/**
	 * Set Symbols
	 * @param string Symbols
	 * @return string
	 */
	public function setSymbols($_Symbols)
	{
		return ($this->Symbols = $_Symbols);
	}
	/**
	 * Get Symbols
	 * @return string
	 */
	public function getSymbols()
	{
		return $this->Symbols;
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
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
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