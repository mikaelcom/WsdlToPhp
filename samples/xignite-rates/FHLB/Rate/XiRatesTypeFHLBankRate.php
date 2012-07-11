<?php
/**
 * Class file for XiRatesTypeFHLBankRate
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeFHLBankRate
 * @date 08/07/2012
 */
class XiRatesTypeFHLBankRate extends XiRatesTypeCommon
{
	/**
	 * The BankType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeFHLBankTypes
	 */
	public $BankType;
	/**
	 * The RateType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeFHLBankRateTypes
	 */
	public $RateType;
	/**
	 * The MaturityType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeFHLBankRateMaturityTypes
	 */
	public $MaturityType;
	/**
	 * The TermType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeFHLBankTermTypes
	 */
	public $TermType;
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Value;
	/**
	 * The Text
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Text;
	/**
	 * The Note
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Note;
	/**
	 * Constructor
	 * @param XiRatesTypeFHLBankTypes BankType
	 * @param XiRatesTypeFHLBankRateTypes RateType
	 * @param XiRatesTypeFHLBankRateMaturityTypes MaturityType
	 * @param XiRatesTypeFHLBankTermTypes TermType
	 * @param string Date
	 * @param double Value
	 * @param string Text
	 * @param string Note
	 * @return XiRatesTypeFHLBankRate
	 */
	public function __construct($_BankType,$_RateType,$_MaturityType,$_TermType,$_Date = null,$_Value,$_Text = null,$_Note = null)
	{
		XiRatesWsdlClass::__construct(array('BankType'=>$_BankType,'RateType'=>$_RateType,'MaturityType'=>$_MaturityType,'TermType'=>$_TermType,'Date'=>$_Date,'Value'=>$_Value,'Text'=>$_Text,'Note'=>$_Note));
	}
	/**
	 * Set BankType
	 * @param FHLBankTypes BankType
	 * @return FHLBankTypes
	 */
	public function setBankType($_BankType)
	{
		return ($this->BankType = XiRatesTypeFHLBankTypes::valueIsValid($_BankType)?$_BankType:null);
	}
	/**
	 * Get BankType
	 * @return XiRatesTypeFHLBankTypes
	 */
	public function getBankType()
	{
		return $this->BankType;
	}
	/**
	 * Set RateType
	 * @param FHLBankRateTypes RateType
	 * @return FHLBankRateTypes
	 */
	public function setRateType($_RateType)
	{
		return ($this->RateType = XiRatesTypeFHLBankRateTypes::valueIsValid($_RateType)?$_RateType:null);
	}
	/**
	 * Get RateType
	 * @return XiRatesTypeFHLBankRateTypes
	 */
	public function getRateType()
	{
		return $this->RateType;
	}
	/**
	 * Set MaturityType
	 * @param FHLBankRateMaturityTypes MaturityType
	 * @return FHLBankRateMaturityTypes
	 */
	public function setMaturityType($_MaturityType)
	{
		return ($this->MaturityType = XiRatesTypeFHLBankRateMaturityTypes::valueIsValid($_MaturityType)?$_MaturityType:null);
	}
	/**
	 * Get MaturityType
	 * @return XiRatesTypeFHLBankRateMaturityTypes
	 */
	public function getMaturityType()
	{
		return $this->MaturityType;
	}
	/**
	 * Set TermType
	 * @param FHLBankTermTypes TermType
	 * @return FHLBankTermTypes
	 */
	public function setTermType($_TermType)
	{
		return ($this->TermType = XiRatesTypeFHLBankTermTypes::valueIsValid($_TermType)?$_TermType:null);
	}
	/**
	 * Get TermType
	 * @return XiRatesTypeFHLBankTermTypes
	 */
	public function getTermType()
	{
		return $this->TermType;
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
	 * Set Text
	 * @param string Text
	 * @return string
	 */
	public function setText($_Text)
	{
		return ($this->Text = $_Text);
	}
	/**
	 * Get Text
	 * @return string
	 */
	public function getText()
	{
		return $this->Text;
	}
	/**
	 * Set Note
	 * @param string Note
	 * @return string
	 */
	public function setNote($_Note)
	{
		return ($this->Note = $_Note);
	}
	/**
	 * Get Note
	 * @return string
	 */
	public function getNote()
	{
		return $this->Note;
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