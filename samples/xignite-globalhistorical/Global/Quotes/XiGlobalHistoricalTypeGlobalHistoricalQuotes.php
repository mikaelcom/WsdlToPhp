<?php
/**
 * Class file for XiGlobalHistoricalTypeGlobalHistoricalQuotes
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGlobalHistoricalQuotes
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGlobalHistoricalQuotes extends XiGlobalHistoricalTypeAbstractGlobalHistoricalObject
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeSecurity
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
	 * The GlobalQuotes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuote
	 */
	public $GlobalQuotes;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeSecurity Security
	 * @param string StartDate
	 * @param string EndDate
	 * @param XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuote GlobalQuotes
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuotes
	 */
	public function __construct($_Security = null,$_StartDate = null,$_EndDate = null,$_GlobalQuotes = null)
	{
		XiGlobalHistoricalWsdlClass::__construct(array('Security'=>$_Security,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'GlobalQuotes'=>new XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuote($_GlobalQuotes)));
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
	 * @return XiGlobalHistoricalTypeSecurity
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
	 * Set GlobalQuotes
	 * @param ArrayOfGlobalHistoricalQuote GlobalQuotes
	 * @return ArrayOfGlobalHistoricalQuote
	 */
	public function setGlobalQuotes($_GlobalQuotes)
	{
		return ($this->GlobalQuotes = $_GlobalQuotes);
	}
	/**
	 * Get GlobalQuotes
	 * @return XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuote
	 */
	public function getGlobalQuotes()
	{
		return $this->GlobalQuotes;
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