<?php
/**
 * Class file for XiHistoricalTypeHistoricalStatistics
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeHistoricalStatistics
 * @date 08/07/2012
 */
class XiHistoricalTypeHistoricalStatistics extends XiHistoricalTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeSecurity
	 */
	public $Security;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * The Quotes
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Quotes;
	/**
	 * The Dividends
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Dividends;
	/**
	 * The LastDividendDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastDividendDate;
	/**
	 * The Splits
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Splits;
	/**
	 * The LastSplitDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastSplitDate;
	/**
	 * Constructor
	 * @param XiHistoricalTypeSecurity Security
	 * @param string StartDate
	 * @param string EndDate
	 * @param int Quotes
	 * @param int Dividends
	 * @param string LastDividendDate
	 * @param int Splits
	 * @param string LastSplitDate
	 * @return XiHistoricalTypeHistoricalStatistics
	 */
	public function __construct($_Security = null,$_StartDate = null,$_EndDate = null,$_Quotes,$_Dividends,$_LastDividendDate = null,$_Splits,$_LastSplitDate = null)
	{
		XiHistoricalWsdlClass::__construct(array('Security'=>$_Security,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'Quotes'=>$_Quotes,'Dividends'=>$_Dividends,'LastDividendDate'=>$_LastDividendDate,'Splits'=>$_Splits,'LastSplitDate'=>$_LastSplitDate));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiHistoricalTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
	}
	/**
	 * Set Quotes
	 * @param int Quotes
	 * @return int
	 */
	public function setQuotes($_Quotes)
	{
		return ($this->Quotes = $_Quotes);
	}
	/**
	 * Get Quotes
	 * @return int
	 */
	public function getQuotes()
	{
		return $this->Quotes;
	}
	/**
	 * Set Dividends
	 * @param int Dividends
	 * @return int
	 */
	public function setDividends($_Dividends)
	{
		return ($this->Dividends = $_Dividends);
	}
	/**
	 * Get Dividends
	 * @return int
	 */
	public function getDividends()
	{
		return $this->Dividends;
	}
	/**
	 * Set LastDividendDate
	 * @param string LastDividendDate
	 * @return string
	 */
	public function setLastDividendDate($_LastDividendDate)
	{
		return ($this->LastDividendDate = $_LastDividendDate);
	}
	/**
	 * Get LastDividendDate
	 * @return string
	 */
	public function getLastDividendDate()
	{
		return $this->LastDividendDate;
	}
	/**
	 * Set Splits
	 * @param int Splits
	 * @return int
	 */
	public function setSplits($_Splits)
	{
		return ($this->Splits = $_Splits);
	}
	/**
	 * Get Splits
	 * @return int
	 */
	public function getSplits()
	{
		return $this->Splits;
	}
	/**
	 * Set LastSplitDate
	 * @param string LastSplitDate
	 * @return string
	 */
	public function setLastSplitDate($_LastSplitDate)
	{
		return ($this->LastSplitDate = $_LastSplitDate);
	}
	/**
	 * Get LastSplitDate
	 * @return string
	 */
	public function getLastSplitDate()
	{
		return $this->LastSplitDate;
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