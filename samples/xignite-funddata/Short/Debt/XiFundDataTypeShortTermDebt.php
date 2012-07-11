<?php
/**
 * Class file for XiFundDataTypeShortTermDebt
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeShortTermDebt
 * @date 08/07/2012
 */
class XiFundDataTypeShortTermDebt extends XiFundDataWsdlClass
{
	/**
	 * The USTreasury
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $USTreasury;
	/**
	 * The USGovernmentAgency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $USGovernmentAgency;
	/**
	 * The RepurchaseAgreements
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $RepurchaseAgreements;
	/**
	 * The StateAndMunicipals
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $StateAndMunicipals;
	/**
	 * The DomesticBankCD
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DomesticBankCD;
	/**
	 * The ForeignBankCD
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ForeignBankCD;
	/**
	 * The BankersAcceptance
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $BankersAcceptance;
	/**
	 * The TaxableCommercialpaper
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TaxableCommercialpaper;
	/**
	 * The TimeDeposits
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TimeDeposits;
	/**
	 * The Options
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Options;
	/**
	 * The Others
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Others;
	/**
	 * Constructor
	 * @param double USTreasury
	 * @param double USGovernmentAgency
	 * @param double RepurchaseAgreements
	 * @param double StateAndMunicipals
	 * @param double DomesticBankCD
	 * @param double ForeignBankCD
	 * @param double BankersAcceptance
	 * @param double TaxableCommercialpaper
	 * @param double TimeDeposits
	 * @param double Options
	 * @param double Others
	 * @return XiFundDataTypeShortTermDebt
	 */
	public function __construct($_USTreasury,$_USGovernmentAgency,$_RepurchaseAgreements,$_StateAndMunicipals,$_DomesticBankCD,$_ForeignBankCD,$_BankersAcceptance,$_TaxableCommercialpaper,$_TimeDeposits,$_Options,$_Others)
	{
		parent::__construct(array('USTreasury'=>$_USTreasury,'USGovernmentAgency'=>$_USGovernmentAgency,'RepurchaseAgreements'=>$_RepurchaseAgreements,'StateAndMunicipals'=>$_StateAndMunicipals,'DomesticBankCD'=>$_DomesticBankCD,'ForeignBankCD'=>$_ForeignBankCD,'BankersAcceptance'=>$_BankersAcceptance,'TaxableCommercialpaper'=>$_TaxableCommercialpaper,'TimeDeposits'=>$_TimeDeposits,'Options'=>$_Options,'Others'=>$_Others));
	}
	/**
	 * Set USTreasury
	 * @param double USTreasury
	 * @return double
	 */
	public function setUSTreasury($_USTreasury)
	{
		return ($this->USTreasury = $_USTreasury);
	}
	/**
	 * Get USTreasury
	 * @return double
	 */
	public function getUSTreasury()
	{
		return $this->USTreasury;
	}
	/**
	 * Set USGovernmentAgency
	 * @param double USGovernmentAgency
	 * @return double
	 */
	public function setUSGovernmentAgency($_USGovernmentAgency)
	{
		return ($this->USGovernmentAgency = $_USGovernmentAgency);
	}
	/**
	 * Get USGovernmentAgency
	 * @return double
	 */
	public function getUSGovernmentAgency()
	{
		return $this->USGovernmentAgency;
	}
	/**
	 * Set RepurchaseAgreements
	 * @param double RepurchaseAgreements
	 * @return double
	 */
	public function setRepurchaseAgreements($_RepurchaseAgreements)
	{
		return ($this->RepurchaseAgreements = $_RepurchaseAgreements);
	}
	/**
	 * Get RepurchaseAgreements
	 * @return double
	 */
	public function getRepurchaseAgreements()
	{
		return $this->RepurchaseAgreements;
	}
	/**
	 * Set StateAndMunicipals
	 * @param double StateAndMunicipals
	 * @return double
	 */
	public function setStateAndMunicipals($_StateAndMunicipals)
	{
		return ($this->StateAndMunicipals = $_StateAndMunicipals);
	}
	/**
	 * Get StateAndMunicipals
	 * @return double
	 */
	public function getStateAndMunicipals()
	{
		return $this->StateAndMunicipals;
	}
	/**
	 * Set DomesticBankCD
	 * @param double DomesticBankCD
	 * @return double
	 */
	public function setDomesticBankCD($_DomesticBankCD)
	{
		return ($this->DomesticBankCD = $_DomesticBankCD);
	}
	/**
	 * Get DomesticBankCD
	 * @return double
	 */
	public function getDomesticBankCD()
	{
		return $this->DomesticBankCD;
	}
	/**
	 * Set ForeignBankCD
	 * @param double ForeignBankCD
	 * @return double
	 */
	public function setForeignBankCD($_ForeignBankCD)
	{
		return ($this->ForeignBankCD = $_ForeignBankCD);
	}
	/**
	 * Get ForeignBankCD
	 * @return double
	 */
	public function getForeignBankCD()
	{
		return $this->ForeignBankCD;
	}
	/**
	 * Set BankersAcceptance
	 * @param double BankersAcceptance
	 * @return double
	 */
	public function setBankersAcceptance($_BankersAcceptance)
	{
		return ($this->BankersAcceptance = $_BankersAcceptance);
	}
	/**
	 * Get BankersAcceptance
	 * @return double
	 */
	public function getBankersAcceptance()
	{
		return $this->BankersAcceptance;
	}
	/**
	 * Set TaxableCommercialpaper
	 * @param double TaxableCommercialpaper
	 * @return double
	 */
	public function setTaxableCommercialpaper($_TaxableCommercialpaper)
	{
		return ($this->TaxableCommercialpaper = $_TaxableCommercialpaper);
	}
	/**
	 * Get TaxableCommercialpaper
	 * @return double
	 */
	public function getTaxableCommercialpaper()
	{
		return $this->TaxableCommercialpaper;
	}
	/**
	 * Set TimeDeposits
	 * @param double TimeDeposits
	 * @return double
	 */
	public function setTimeDeposits($_TimeDeposits)
	{
		return ($this->TimeDeposits = $_TimeDeposits);
	}
	/**
	 * Get TimeDeposits
	 * @return double
	 */
	public function getTimeDeposits()
	{
		return $this->TimeDeposits;
	}
	/**
	 * Set Options
	 * @param double Options
	 * @return double
	 */
	public function setOptions($_Options)
	{
		return ($this->Options = $_Options);
	}
	/**
	 * Get Options
	 * @return double
	 */
	public function getOptions()
	{
		return $this->Options;
	}
	/**
	 * Set Others
	 * @param double Others
	 * @return double
	 */
	public function setOthers($_Others)
	{
		return ($this->Others = $_Others);
	}
	/**
	 * Get Others
	 * @return double
	 */
	public function getOthers()
	{
		return $this->Others;
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