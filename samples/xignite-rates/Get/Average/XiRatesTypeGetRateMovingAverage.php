<?php
/**
 * Class file for XiRatesTypeGetRateMovingAverage
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetRateMovingAverage
 * @date 08/07/2012
 */
class XiRatesTypeGetRateMovingAverage extends XiRatesWsdlClass
{
	/**
	 * The RateType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeRateTypes
	 */
	public $RateType;
	/**
	 * The PeriodType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypePeriodTypes
	 */
	public $PeriodType;
	/**
	 * The AveragePeriods
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $AveragePeriods;
	/**
	 * The FromDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FromDate;
	/**
	 * The ToDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ToDate;
	/**
	 * Constructor
	 * @param XiRatesTypeRateTypes RateType
	 * @param XiRatesTypePeriodTypes PeriodType
	 * @param int AveragePeriods
	 * @param string FromDate
	 * @param string ToDate
	 * @return XiRatesTypeGetRateMovingAverage
	 */
	public function __construct($_RateType,$_PeriodType,$_AveragePeriods,$_FromDate = null,$_ToDate = null)
	{
		parent::__construct(array('RateType'=>$_RateType,'PeriodType'=>$_PeriodType,'AveragePeriods'=>$_AveragePeriods,'FromDate'=>$_FromDate,'ToDate'=>$_ToDate));
	}
	/**
	 * Set RateType
	 * @param RateTypes RateType
	 * @return RateTypes
	 */
	public function setRateType($_RateType)
	{
		return ($this->RateType = XiRatesTypeRateTypes::valueIsValid($_RateType)?$_RateType:null);
	}
	/**
	 * Get RateType
	 * @return XiRatesTypeRateTypes
	 */
	public function getRateType()
	{
		return $this->RateType;
	}
	/**
	 * Set PeriodType
	 * @param PeriodTypes PeriodType
	 * @return PeriodTypes
	 */
	public function setPeriodType($_PeriodType)
	{
		return ($this->PeriodType = XiRatesTypePeriodTypes::valueIsValid($_PeriodType)?$_PeriodType:null);
	}
	/**
	 * Get PeriodType
	 * @return XiRatesTypePeriodTypes
	 */
	public function getPeriodType()
	{
		return $this->PeriodType;
	}
	/**
	 * Set AveragePeriods
	 * @param int AveragePeriods
	 * @return int
	 */
	public function setAveragePeriods($_AveragePeriods)
	{
		return ($this->AveragePeriods = $_AveragePeriods);
	}
	/**
	 * Get AveragePeriods
	 * @return int
	 */
	public function getAveragePeriods()
	{
		return $this->AveragePeriods;
	}
	/**
	 * Set FromDate
	 * @param string FromDate
	 * @return string
	 */
	public function setFromDate($_FromDate)
	{
		return ($this->FromDate = $_FromDate);
	}
	/**
	 * Get FromDate
	 * @return string
	 */
	public function getFromDate()
	{
		return $this->FromDate;
	}
	/**
	 * Set ToDate
	 * @param string ToDate
	 * @return string
	 */
	public function setToDate($_ToDate)
	{
		return ($this->ToDate = $_ToDate);
	}
	/**
	 * Get ToDate
	 * @return string
	 */
	public function getToDate()
	{
		return $this->ToDate;
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