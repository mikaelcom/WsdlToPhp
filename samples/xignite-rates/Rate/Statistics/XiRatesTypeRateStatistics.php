<?php
/**
 * Class file for XiRatesTypeRateStatistics
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeRateStatistics
 * @date 08/07/2012
 */
class XiRatesTypeRateStatistics extends XiRatesTypeCommon
{
	/**
	 * The RateType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
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
	 * The DataPoints
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $DataPoints;
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
	 * @param string RateType
	 * @param XiRatesTypePeriodTypes PeriodType
	 * @param int DataPoints
	 * @param string FromDate
	 * @param string ToDate
	 * @return XiRatesTypeRateStatistics
	 */
	public function __construct($_RateType = null,$_PeriodType,$_DataPoints,$_FromDate = null,$_ToDate = null)
	{
		XiRatesWsdlClass::__construct(array('RateType'=>$_RateType,'PeriodType'=>$_PeriodType,'DataPoints'=>$_DataPoints,'FromDate'=>$_FromDate,'ToDate'=>$_ToDate));
	}
	/**
	 * Set RateType
	 * @param string RateType
	 * @return string
	 */
	public function setRateType($_RateType)
	{
		return ($this->RateType = $_RateType);
	}
	/**
	 * Get RateType
	 * @return string
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
	 * Set DataPoints
	 * @param int DataPoints
	 * @return int
	 */
	public function setDataPoints($_DataPoints)
	{
		return ($this->DataPoints = $_DataPoints);
	}
	/**
	 * Get DataPoints
	 * @return int
	 */
	public function getDataPoints()
	{
		return $this->DataPoints;
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