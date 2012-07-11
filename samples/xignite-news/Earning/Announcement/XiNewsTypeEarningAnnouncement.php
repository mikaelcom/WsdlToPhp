<?php
/**
 * Class file for XiNewsTypeEarningAnnouncement
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeEarningAnnouncement
 * @date 08/07/2012
 */
class XiNewsTypeEarningAnnouncement extends XiNewsTypeCommon
{
	/**
	 * The AnnouncementDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AnnouncementDate;
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The Company
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Company;
	/**
	 * The EPSEstimate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EPSEstimate;
	/**
	 * The AnnouncementTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AnnouncementTime;
	/**
	 * Constructor
	 * @param string AnnouncementDate
	 * @param string Symbol
	 * @param string Company
	 * @param string EPSEstimate
	 * @param string AnnouncementTime
	 * @return XiNewsTypeEarningAnnouncement
	 */
	public function __construct($_AnnouncementDate = null,$_Symbol = null,$_Company = null,$_EPSEstimate = null,$_AnnouncementTime = null)
	{
		XiNewsWsdlClass::__construct(array('AnnouncementDate'=>$_AnnouncementDate,'Symbol'=>$_Symbol,'Company'=>$_Company,'EPSEstimate'=>$_EPSEstimate,'AnnouncementTime'=>$_AnnouncementTime));
	}
	/**
	 * Set AnnouncementDate
	 * @param string AnnouncementDate
	 * @return string
	 */
	public function setAnnouncementDate($_AnnouncementDate)
	{
		return ($this->AnnouncementDate = $_AnnouncementDate);
	}
	/**
	 * Get AnnouncementDate
	 * @return string
	 */
	public function getAnnouncementDate()
	{
		return $this->AnnouncementDate;
	}
	/**
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Set Company
	 * @param string Company
	 * @return string
	 */
	public function setCompany($_Company)
	{
		return ($this->Company = $_Company);
	}
	/**
	 * Get Company
	 * @return string
	 */
	public function getCompany()
	{
		return $this->Company;
	}
	/**
	 * Set EPSEstimate
	 * @param string EPSEstimate
	 * @return string
	 */
	public function setEPSEstimate($_EPSEstimate)
	{
		return ($this->EPSEstimate = $_EPSEstimate);
	}
	/**
	 * Get EPSEstimate
	 * @return string
	 */
	public function getEPSEstimate()
	{
		return $this->EPSEstimate;
	}
	/**
	 * Set AnnouncementTime
	 * @param string AnnouncementTime
	 * @return string
	 */
	public function setAnnouncementTime($_AnnouncementTime)
	{
		return ($this->AnnouncementTime = $_AnnouncementTime);
	}
	/**
	 * Get AnnouncementTime
	 * @return string
	 */
	public function getAnnouncementTime()
	{
		return $this->AnnouncementTime;
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