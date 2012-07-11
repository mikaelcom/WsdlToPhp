<?php
/**
 * Class file for XiEarningsCalendarTypeEarningCall
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeEarningCall
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeEarningCall extends XiEarningsCalendarTypeCommon
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
	 * The EarningsQuarter
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeQuarterTypes
	 */
	public $EarningsQuarter;
	/**
	 * The EarningsDateQuarter
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeQuarterTypes
	 */
	public $EarningsDateQuarter;
	/**
	 * The EarningsDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EarningsDate;
	/**
	 * The TimeType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeEarningTimeTypes
	 */
	public $TimeType;
	/**
	 * The DateType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeEarningDateTypes
	 */
	public $DateType;
	/**
	 * The ConfirmationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ConfirmationDate;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeSecurity Security
	 * @param XiEarningsCalendarTypeQuarterTypes EarningsQuarter
	 * @param XiEarningsCalendarTypeQuarterTypes EarningsDateQuarter
	 * @param string EarningsDate
	 * @param XiEarningsCalendarTypeEarningTimeTypes TimeType
	 * @param XiEarningsCalendarTypeEarningDateTypes DateType
	 * @param string ConfirmationDate
	 * @return XiEarningsCalendarTypeEarningCall
	 */
	public function __construct($_Security = null,$_EarningsQuarter,$_EarningsDateQuarter,$_EarningsDate = null,$_TimeType,$_DateType,$_ConfirmationDate = null)
	{
		XiEarningsCalendarWsdlClass::__construct(array('Security'=>$_Security,'EarningsQuarter'=>$_EarningsQuarter,'EarningsDateQuarter'=>$_EarningsDateQuarter,'EarningsDate'=>$_EarningsDate,'TimeType'=>$_TimeType,'DateType'=>$_DateType,'ConfirmationDate'=>$_ConfirmationDate));
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
	 * Set EarningsQuarter
	 * @param QuarterTypes EarningsQuarter
	 * @return QuarterTypes
	 */
	public function setEarningsQuarter($_EarningsQuarter)
	{
		return ($this->EarningsQuarter = XiEarningsCalendarTypeQuarterTypes::valueIsValid($_EarningsQuarter)?$_EarningsQuarter:null);
	}
	/**
	 * Get EarningsQuarter
	 * @return XiEarningsCalendarTypeQuarterTypes
	 */
	public function getEarningsQuarter()
	{
		return $this->EarningsQuarter;
	}
	/**
	 * Set EarningsDateQuarter
	 * @param QuarterTypes EarningsDateQuarter
	 * @return QuarterTypes
	 */
	public function setEarningsDateQuarter($_EarningsDateQuarter)
	{
		return ($this->EarningsDateQuarter = XiEarningsCalendarTypeQuarterTypes::valueIsValid($_EarningsDateQuarter)?$_EarningsDateQuarter:null);
	}
	/**
	 * Get EarningsDateQuarter
	 * @return XiEarningsCalendarTypeQuarterTypes
	 */
	public function getEarningsDateQuarter()
	{
		return $this->EarningsDateQuarter;
	}
	/**
	 * Set EarningsDate
	 * @param string EarningsDate
	 * @return string
	 */
	public function setEarningsDate($_EarningsDate)
	{
		return ($this->EarningsDate = $_EarningsDate);
	}
	/**
	 * Get EarningsDate
	 * @return string
	 */
	public function getEarningsDate()
	{
		return $this->EarningsDate;
	}
	/**
	 * Set TimeType
	 * @param EarningTimeTypes TimeType
	 * @return EarningTimeTypes
	 */
	public function setTimeType($_TimeType)
	{
		return ($this->TimeType = XiEarningsCalendarTypeEarningTimeTypes::valueIsValid($_TimeType)?$_TimeType:null);
	}
	/**
	 * Get TimeType
	 * @return XiEarningsCalendarTypeEarningTimeTypes
	 */
	public function getTimeType()
	{
		return $this->TimeType;
	}
	/**
	 * Set DateType
	 * @param EarningDateTypes DateType
	 * @return EarningDateTypes
	 */
	public function setDateType($_DateType)
	{
		return ($this->DateType = XiEarningsCalendarTypeEarningDateTypes::valueIsValid($_DateType)?$_DateType:null);
	}
	/**
	 * Get DateType
	 * @return XiEarningsCalendarTypeEarningDateTypes
	 */
	public function getDateType()
	{
		return $this->DateType;
	}
	/**
	 * Set ConfirmationDate
	 * @param string ConfirmationDate
	 * @return string
	 */
	public function setConfirmationDate($_ConfirmationDate)
	{
		return ($this->ConfirmationDate = $_ConfirmationDate);
	}
	/**
	 * Get ConfirmationDate
	 * @return string
	 */
	public function getConfirmationDate()
	{
		return $this->ConfirmationDate;
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