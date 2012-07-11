<?php
/**
 * Class file for XiEarningsCalendarTypeReplayInformation
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeReplayInformation
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeReplayInformation extends XiEarningsCalendarTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeSecurity
	 */
	public $Security;
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * The WebcastURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $WebcastURL;
	/**
	 * The WebcastEndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $WebcastEndDate;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeSecurity Security
	 * @param string Date
	 * @param string EndDate
	 * @param string WebcastURL
	 * @param string WebcastEndDate
	 * @return XiEarningsCalendarTypeReplayInformation
	 */
	public function __construct($_Security = null,$_Date = null,$_EndDate = null,$_WebcastURL = null,$_WebcastEndDate = null)
	{
		XiEarningsCalendarWsdlClass::__construct(array('Security'=>$_Security,'Date'=>$_Date,'EndDate'=>$_EndDate,'WebcastURL'=>$_WebcastURL,'WebcastEndDate'=>$_WebcastEndDate));
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
	 * @return XiEarningsCalendarTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set Date
	 * @param string Date
	 * @return string
	 */
	public function setDate($_Date)
	{
		return ($this->Date = $_Date);
	}
	/**
	 * Get Date
	 * @return string
	 */
	public function getDate()
	{
		return $this->Date;
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
	 * Set WebcastURL
	 * @param string WebcastURL
	 * @return string
	 */
	public function setWebcastURL($_WebcastURL)
	{
		return ($this->WebcastURL = $_WebcastURL);
	}
	/**
	 * Get WebcastURL
	 * @return string
	 */
	public function getWebcastURL()
	{
		return $this->WebcastURL;
	}
	/**
	 * Set WebcastEndDate
	 * @param string WebcastEndDate
	 * @return string
	 */
	public function setWebcastEndDate($_WebcastEndDate)
	{
		return ($this->WebcastEndDate = $_WebcastEndDate);
	}
	/**
	 * Get WebcastEndDate
	 * @return string
	 */
	public function getWebcastEndDate()
	{
		return $this->WebcastEndDate;
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