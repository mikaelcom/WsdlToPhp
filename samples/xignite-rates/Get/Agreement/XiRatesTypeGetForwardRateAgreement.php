<?php
/**
 * Class file for XiRatesTypeGetForwardRateAgreement
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetForwardRateAgreement
 * @date 08/07/2012
 */
class XiRatesTypeGetForwardRateAgreement extends XiRatesWsdlClass
{
	/**
	 * The FirstType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeLIBORTypes
	 */
	public $FirstType;
	/**
	 * The SecondType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeLIBORTypes
	 */
	public $SecondType;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeLIBORCurrencyTypes
	 */
	public $Currency;
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * Constructor
	 * @param XiRatesTypeLIBORTypes FirstType
	 * @param XiRatesTypeLIBORTypes SecondType
	 * @param XiRatesTypeLIBORCurrencyTypes Currency
	 * @param string AsOfDate
	 * @return XiRatesTypeGetForwardRateAgreement
	 */
	public function __construct($_FirstType,$_SecondType,$_Currency,$_AsOfDate = null)
	{
		parent::__construct(array('FirstType'=>$_FirstType,'SecondType'=>$_SecondType,'Currency'=>$_Currency,'AsOfDate'=>$_AsOfDate));
	}
	/**
	 * Set FirstType
	 * @param LIBORTypes FirstType
	 * @return LIBORTypes
	 */
	public function setFirstType($_FirstType)
	{
		return ($this->FirstType = XiRatesTypeLIBORTypes::valueIsValid($_FirstType)?$_FirstType:null);
	}
	/**
	 * Get FirstType
	 * @return XiRatesTypeLIBORTypes
	 */
	public function getFirstType()
	{
		return $this->FirstType;
	}
	/**
	 * Set SecondType
	 * @param LIBORTypes SecondType
	 * @return LIBORTypes
	 */
	public function setSecondType($_SecondType)
	{
		return ($this->SecondType = XiRatesTypeLIBORTypes::valueIsValid($_SecondType)?$_SecondType:null);
	}
	/**
	 * Get SecondType
	 * @return XiRatesTypeLIBORTypes
	 */
	public function getSecondType()
	{
		return $this->SecondType;
	}
	/**
	 * Set Currency
	 * @param LIBORCurrencyTypes Currency
	 * @return LIBORCurrencyTypes
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiRatesTypeLIBORCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiRatesTypeLIBORCurrencyTypes
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
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