<?php
/**
 * Class file for XiEarningsCalendarTypeConferenceCallInformation
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeConferenceCallInformation
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeConferenceCallInformation extends XiEarningsCalendarTypeCommon
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
	 * The Time
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Time;
	/**
	 * The BroadcastURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BroadcastURL;
	/**
	 * The Notes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Notes;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeSecurity Security
	 * @param string Date
	 * @param string Time
	 * @param string BroadcastURL
	 * @param string Notes
	 * @return XiEarningsCalendarTypeConferenceCallInformation
	 */
	public function __construct($_Security = null,$_Date = null,$_Time = null,$_BroadcastURL = null,$_Notes = null)
	{
		XiEarningsCalendarWsdlClass::__construct(array('Security'=>$_Security,'Date'=>$_Date,'Time'=>$_Time,'BroadcastURL'=>$_BroadcastURL,'Notes'=>$_Notes));
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
	 * Set Time
	 * @param string Time
	 * @return string
	 */
	public function setTime($_Time)
	{
		return ($this->Time = $_Time);
	}
	/**
	 * Get Time
	 * @return string
	 */
	public function getTime()
	{
		return $this->Time;
	}
	/**
	 * Set BroadcastURL
	 * @param string BroadcastURL
	 * @return string
	 */
	public function setBroadcastURL($_BroadcastURL)
	{
		return ($this->BroadcastURL = $_BroadcastURL);
	}
	/**
	 * Get BroadcastURL
	 * @return string
	 */
	public function getBroadcastURL()
	{
		return $this->BroadcastURL;
	}
	/**
	 * Set Notes
	 * @param string Notes
	 * @return string
	 */
	public function setNotes($_Notes)
	{
		return ($this->Notes = $_Notes);
	}
	/**
	 * Get Notes
	 * @return string
	 */
	public function getNotes()
	{
		return $this->Notes;
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