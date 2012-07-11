<?php
/**
 * Class file for XiRatesTypeWSJInterestRate
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeWSJInterestRate
 * @date 08/07/2012
 */
class XiRatesTypeWSJInterestRate extends XiRatesTypeCommon
{
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * The RateType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeWSJRateTypes
	 */
	public $RateType;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Value;
	/**
	 * The EffectiveDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EffectiveDate;
	/**
	 * The MaturityInMonths
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $MaturityInMonths;
	/**
	 * The Maturity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Maturity;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The High
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $High;
	/**
	 * The Low
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Low;
	/**
	 * The Change
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Change;
	/**
	 * Constructor
	 * @param string AsOfDate
	 * @param XiRatesTypeWSJRateTypes RateType
	 * @param double Value
	 * @param string EffectiveDate
	 * @param int MaturityInMonths
	 * @param string Maturity
	 * @param string Description
	 * @param double High
	 * @param double Low
	 * @param double Change
	 * @return XiRatesTypeWSJInterestRate
	 */
	public function __construct($_AsOfDate = null,$_RateType,$_Value,$_EffectiveDate = null,$_MaturityInMonths,$_Maturity = null,$_Description = null,$_High,$_Low,$_Change)
	{
		XiRatesWsdlClass::__construct(array('AsOfDate'=>$_AsOfDate,'RateType'=>$_RateType,'Value'=>$_Value,'EffectiveDate'=>$_EffectiveDate,'MaturityInMonths'=>$_MaturityInMonths,'Maturity'=>$_Maturity,'Description'=>$_Description,'High'=>$_High,'Low'=>$_Low,'Change'=>$_Change));
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
	 * Set RateType
	 * @param WSJRateTypes RateType
	 * @return WSJRateTypes
	 */
	public function setRateType($_RateType)
	{
		return ($this->RateType = XiRatesTypeWSJRateTypes::valueIsValid($_RateType)?$_RateType:null);
	}
	/**
	 * Get RateType
	 * @return XiRatesTypeWSJRateTypes
	 */
	public function getRateType()
	{
		return $this->RateType;
	}
	/**
	 * Set Value
	 * @param double Value
	 * @return double
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return double
	 */
	public function getValue()
	{
		return $this->Value;
	}
	/**
	 * Set EffectiveDate
	 * @param string EffectiveDate
	 * @return string
	 */
	public function setEffectiveDate($_EffectiveDate)
	{
		return ($this->EffectiveDate = $_EffectiveDate);
	}
	/**
	 * Get EffectiveDate
	 * @return string
	 */
	public function getEffectiveDate()
	{
		return $this->EffectiveDate;
	}
	/**
	 * Set MaturityInMonths
	 * @param int MaturityInMonths
	 * @return int
	 */
	public function setMaturityInMonths($_MaturityInMonths)
	{
		return ($this->MaturityInMonths = $_MaturityInMonths);
	}
	/**
	 * Get MaturityInMonths
	 * @return int
	 */
	public function getMaturityInMonths()
	{
		return $this->MaturityInMonths;
	}
	/**
	 * Set Maturity
	 * @param string Maturity
	 * @return string
	 */
	public function setMaturity($_Maturity)
	{
		return ($this->Maturity = $_Maturity);
	}
	/**
	 * Get Maturity
	 * @return string
	 */
	public function getMaturity()
	{
		return $this->Maturity;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set High
	 * @param double High
	 * @return double
	 */
	public function setHigh($_High)
	{
		return ($this->High = $_High);
	}
	/**
	 * Get High
	 * @return double
	 */
	public function getHigh()
	{
		return $this->High;
	}
	/**
	 * Set Low
	 * @param double Low
	 * @return double
	 */
	public function setLow($_Low)
	{
		return ($this->Low = $_Low);
	}
	/**
	 * Get Low
	 * @return double
	 */
	public function getLow()
	{
		return $this->Low;
	}
	/**
	 * Set Change
	 * @param double Change
	 * @return double
	 */
	public function setChange($_Change)
	{
		return ($this->Change = $_Change);
	}
	/**
	 * Get Change
	 * @return double
	 */
	public function getChange()
	{
		return $this->Change;
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