<?php
/**
 * Class file for XiRatesTypeGetStateRates
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetStateRates
 * @date 08/07/2012
 */
class XiRatesTypeGetStateRates extends XiRatesWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeStateRateTypes
	 */
	public $Type;
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
	 * @param XiRatesTypeStateRateTypes Type
	 * @param string FromDate
	 * @param string ToDate
	 * @return XiRatesTypeGetStateRates
	 */
	public function __construct($_Type,$_FromDate = null,$_ToDate = null)
	{
		parent::__construct(array('Type'=>$_Type,'FromDate'=>$_FromDate,'ToDate'=>$_ToDate));
	}
	/**
	 * Set Type
	 * @param StateRateTypes Type
	 * @return StateRateTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiRatesTypeStateRateTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiRatesTypeStateRateTypes
	 */
	public function getType()
	{
		return $this->Type;
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