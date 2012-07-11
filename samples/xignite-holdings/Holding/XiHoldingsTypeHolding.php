<?php
/**
 * Class file for XiHoldingsTypeHolding
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeHolding
 * @date 08/07/2012
 */
class XiHoldingsTypeHolding extends XiHoldingsTypeCommon
{
	/**
	 * The OwnerCIK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OwnerCIK;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Title;
	/**
	 * The CUSIP
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CUSIP;
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeSecurity
	 */
	public $Security;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Value;
	/**
	 * The Shares
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Shares;
	/**
	 * The Percentage
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Percentage;
	/**
	 * The OptionType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeOptionTypes
	 */
	public $OptionType;
	/**
	 * The InvestmentType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InvestmentType;
	/**
	 * Constructor
	 * @param string OwnerCIK
	 * @param string Name
	 * @param string Title
	 * @param string CUSIP
	 * @param XiHoldingsTypeSecurity Security
	 * @param double Value
	 * @param double Shares
	 * @param double Percentage
	 * @param XiHoldingsTypeOptionTypes OptionType
	 * @param string InvestmentType
	 * @return XiHoldingsTypeHolding
	 */
	public function __construct($_OwnerCIK = null,$_Name = null,$_Title = null,$_CUSIP = null,$_Security = null,$_Value,$_Shares,$_Percentage,$_OptionType,$_InvestmentType = null)
	{
		XiHoldingsWsdlClass::__construct(array('OwnerCIK'=>$_OwnerCIK,'Name'=>$_Name,'Title'=>$_Title,'CUSIP'=>$_CUSIP,'Security'=>$_Security,'Value'=>$_Value,'Shares'=>$_Shares,'Percentage'=>$_Percentage,'OptionType'=>$_OptionType,'InvestmentType'=>$_InvestmentType));
	}
	/**
	 * Set OwnerCIK
	 * @param string OwnerCIK
	 * @return string
	 */
	public function setOwnerCIK($_OwnerCIK)
	{
		return ($this->OwnerCIK = $_OwnerCIK);
	}
	/**
	 * Get OwnerCIK
	 * @return string
	 */
	public function getOwnerCIK()
	{
		return $this->OwnerCIK;
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set CUSIP
	 * @param string CUSIP
	 * @return string
	 */
	public function setCUSIP($_CUSIP)
	{
		return ($this->CUSIP = $_CUSIP);
	}
	/**
	 * Get CUSIP
	 * @return string
	 */
	public function getCUSIP()
	{
		return $this->CUSIP;
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
	 * @return XiHoldingsTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
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
	 * Set Shares
	 * @param double Shares
	 * @return double
	 */
	public function setShares($_Shares)
	{
		return ($this->Shares = $_Shares);
	}
	/**
	 * Get Shares
	 * @return double
	 */
	public function getShares()
	{
		return $this->Shares;
	}
	/**
	 * Set Percentage
	 * @param double Percentage
	 * @return double
	 */
	public function setPercentage($_Percentage)
	{
		return ($this->Percentage = $_Percentage);
	}
	/**
	 * Get Percentage
	 * @return double
	 */
	public function getPercentage()
	{
		return $this->Percentage;
	}
	/**
	 * Set OptionType
	 * @param OptionTypes OptionType
	 * @return OptionTypes
	 */
	public function setOptionType($_OptionType)
	{
		return ($this->OptionType = XiHoldingsTypeOptionTypes::valueIsValid($_OptionType)?$_OptionType:null);
	}
	/**
	 * Get OptionType
	 * @return XiHoldingsTypeOptionTypes
	 */
	public function getOptionType()
	{
		return $this->OptionType;
	}
	/**
	 * Set InvestmentType
	 * @param string InvestmentType
	 * @return string
	 */
	public function setInvestmentType($_InvestmentType)
	{
		return ($this->InvestmentType = $_InvestmentType);
	}
	/**
	 * Get InvestmentType
	 * @return string
	 */
	public function getInvestmentType()
	{
		return $this->InvestmentType;
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