<?php
/**
 * Class file for XiRatesTypeGetFHLBankRates
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetFHLBankRates
 * @date 08/07/2012
 */
class XiRatesTypeGetFHLBankRates extends XiRatesWsdlClass
{
	/**
	 * The FHLBankType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeFHLBankTypes
	 */
	public $FHLBankType;
	/**
	 * The FHLBankRateType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeFHLBankRateTypes
	 */
	public $FHLBankRateType;
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * The FHLBankTerm
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FHLBankTerm;
	/**
	 * Constructor
	 * @param XiRatesTypeFHLBankTypes FHLBankType
	 * @param XiRatesTypeFHLBankRateTypes FHLBankRateType
	 * @param string AsOfDate
	 * @param string FHLBankTerm
	 * @return XiRatesTypeGetFHLBankRates
	 */
	public function __construct($_FHLBankType,$_FHLBankRateType,$_AsOfDate = null,$_FHLBankTerm = null)
	{
		parent::__construct(array('FHLBankType'=>$_FHLBankType,'FHLBankRateType'=>$_FHLBankRateType,'AsOfDate'=>$_AsOfDate,'FHLBankTerm'=>$_FHLBankTerm));
	}
	/**
	 * Set FHLBankType
	 * @param FHLBankTypes FHLBankType
	 * @return FHLBankTypes
	 */
	public function setFHLBankType($_FHLBankType)
	{
		return ($this->FHLBankType = XiRatesTypeFHLBankTypes::valueIsValid($_FHLBankType)?$_FHLBankType:null);
	}
	/**
	 * Get FHLBankType
	 * @return XiRatesTypeFHLBankTypes
	 */
	public function getFHLBankType()
	{
		return $this->FHLBankType;
	}
	/**
	 * Set FHLBankRateType
	 * @param FHLBankRateTypes FHLBankRateType
	 * @return FHLBankRateTypes
	 */
	public function setFHLBankRateType($_FHLBankRateType)
	{
		return ($this->FHLBankRateType = XiRatesTypeFHLBankRateTypes::valueIsValid($_FHLBankRateType)?$_FHLBankRateType:null);
	}
	/**
	 * Get FHLBankRateType
	 * @return XiRatesTypeFHLBankRateTypes
	 */
	public function getFHLBankRateType()
	{
		return $this->FHLBankRateType;
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
	 * Set FHLBankTerm
	 * @param string FHLBankTerm
	 * @return string
	 */
	public function setFHLBankTerm($_FHLBankTerm)
	{
		return ($this->FHLBankTerm = $_FHLBankTerm);
	}
	/**
	 * Get FHLBankTerm
	 * @return string
	 */
	public function getFHLBankTerm()
	{
		return $this->FHLBankTerm;
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