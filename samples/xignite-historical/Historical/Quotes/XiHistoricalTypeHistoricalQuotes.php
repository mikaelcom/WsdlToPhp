<?php
/**
 * Class file for XiHistoricalTypeHistoricalQuotes
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeHistoricalQuotes
 * @date 08/07/2012
 */
class XiHistoricalTypeHistoricalQuotes extends XiHistoricalTypeCommon
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
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeArrayOfHistoricalQuote
	 */
	public $Quotes;
	/**
	 * Constructor
	 * @param XiHistoricalTypeSecurity Security
	 * @param string StartDate
	 * @param string EndDate
	 * @param XiHistoricalTypeArrayOfHistoricalQuote Quotes
	 * @return XiHistoricalTypeHistoricalQuotes
	 */
	public function __construct($_Security = null,$_StartDate = null,$_EndDate = null,$_Quotes = null)
	{
		XiHistoricalWsdlClass::__construct(array('Security'=>$_Security,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'Quotes'=>new XiHistoricalTypeArrayOfHistoricalQuote($_Quotes)));
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
	 * @param ArrayOfHistoricalQuote Quotes
	 * @return ArrayOfHistoricalQuote
	 */
	public function setQuotes($_Quotes)
	{
		return ($this->Quotes = $_Quotes);
	}
	/**
	 * Get Quotes
	 * @return XiHistoricalTypeArrayOfHistoricalQuote
	 */
	public function getQuotes()
	{
		return $this->Quotes;
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