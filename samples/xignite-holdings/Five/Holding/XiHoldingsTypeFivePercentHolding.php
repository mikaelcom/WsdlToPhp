<?php
/**
 * Class file for XiHoldingsTypeFivePercentHolding
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeFivePercentHolding
 * @date 08/07/2012
 */
class XiHoldingsTypeFivePercentHolding extends XiHoldingsTypeCommon
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
	 * The CUSIP
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CUSIP;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The NameOfReportingPerson
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameOfReportingPerson;
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeSecurity
	 */
	public $Security;
	/**
	 * The AggregrateAmountOwned
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AggregrateAmountOwned;
	/**
	 * The PercentOfClass
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentOfClass;
	/**
	 * Constructor
	 * @param string OwnerCIK
	 * @param string CUSIP
	 * @param string Name
	 * @param string NameOfReportingPerson
	 * @param XiHoldingsTypeSecurity Security
	 * @param double AggregrateAmountOwned
	 * @param double PercentOfClass
	 * @return XiHoldingsTypeFivePercentHolding
	 */
	public function __construct($_OwnerCIK = null,$_CUSIP = null,$_Name = null,$_NameOfReportingPerson = null,$_Security = null,$_AggregrateAmountOwned,$_PercentOfClass)
	{
		XiHoldingsWsdlClass::__construct(array('OwnerCIK'=>$_OwnerCIK,'CUSIP'=>$_CUSIP,'Name'=>$_Name,'NameOfReportingPerson'=>$_NameOfReportingPerson,'Security'=>$_Security,'AggregrateAmountOwned'=>$_AggregrateAmountOwned,'PercentOfClass'=>$_PercentOfClass));
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
	 * Set NameOfReportingPerson
	 * @param string NameOfReportingPerson
	 * @return string
	 */
	public function setNameOfReportingPerson($_NameOfReportingPerson)
	{
		return ($this->NameOfReportingPerson = $_NameOfReportingPerson);
	}
	/**
	 * Get NameOfReportingPerson
	 * @return string
	 */
	public function getNameOfReportingPerson()
	{
		return $this->NameOfReportingPerson;
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
	 * Set AggregrateAmountOwned
	 * @param double AggregrateAmountOwned
	 * @return double
	 */
	public function setAggregrateAmountOwned($_AggregrateAmountOwned)
	{
		return ($this->AggregrateAmountOwned = $_AggregrateAmountOwned);
	}
	/**
	 * Get AggregrateAmountOwned
	 * @return double
	 */
	public function getAggregrateAmountOwned()
	{
		return $this->AggregrateAmountOwned;
	}
	/**
	 * Set PercentOfClass
	 * @param double PercentOfClass
	 * @return double
	 */
	public function setPercentOfClass($_PercentOfClass)
	{
		return ($this->PercentOfClass = $_PercentOfClass);
	}
	/**
	 * Get PercentOfClass
	 * @return double
	 */
	public function getPercentOfClass()
	{
		return $this->PercentOfClass;
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