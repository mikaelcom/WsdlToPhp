<?php
/**
 * Class file for XiFundDataTypeUnreimbursedExpenses
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeUnreimbursedExpenses
 * @date 08/07/2012
 */
class XiFundDataTypeUnreimbursedExpenses extends XiFundDataWsdlClass
{
	/**
	 * The OfficeRental
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $OfficeRental;
	/**
	 * The ClericalServices
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ClericalServices;
	/**
	 * The AccountingServices
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $AccountingServices;
	/**
	 * The AuditorServices
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $AuditorServices;
	/**
	 * The CounselServices
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $CounselServices;
	/**
	 * The RegistrationFees
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $RegistrationFees;
	/**
	 * The Supplies
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Supplies;
	/**
	 * The InterestedDirectorSalaries
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $InterestedDirectorSalaries;
	/**
	 * The DisinterestedDirectorSalaries
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $DisinterestedDirectorSalaries;
	/**
	 * The OfficerSalaries
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $OfficerSalaries;
	/**
	 * The ShareholdersReports
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ShareholdersReports;
	/**
	 * The DeterminationOfPrices
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $DeterminationOfPrices;
	/**
	 * The Trading
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Trading;
	/**
	 * The ProspectusPrinting
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ProspectusPrinting;
	/**
	 * The Other
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Other;
	/**
	 * Constructor
	 * @param boolean OfficeRental
	 * @param boolean ClericalServices
	 * @param boolean AccountingServices
	 * @param boolean AuditorServices
	 * @param boolean CounselServices
	 * @param boolean RegistrationFees
	 * @param boolean Supplies
	 * @param boolean InterestedDirectorSalaries
	 * @param boolean DisinterestedDirectorSalaries
	 * @param boolean OfficerSalaries
	 * @param boolean ShareholdersReports
	 * @param boolean DeterminationOfPrices
	 * @param boolean Trading
	 * @param boolean ProspectusPrinting
	 * @param boolean Other
	 * @return XiFundDataTypeUnreimbursedExpenses
	 */
	public function __construct($_OfficeRental,$_ClericalServices,$_AccountingServices,$_AuditorServices,$_CounselServices,$_RegistrationFees,$_Supplies,$_InterestedDirectorSalaries,$_DisinterestedDirectorSalaries,$_OfficerSalaries,$_ShareholdersReports,$_DeterminationOfPrices,$_Trading,$_ProspectusPrinting,$_Other)
	{
		parent::__construct(array('OfficeRental'=>$_OfficeRental,'ClericalServices'=>$_ClericalServices,'AccountingServices'=>$_AccountingServices,'AuditorServices'=>$_AuditorServices,'CounselServices'=>$_CounselServices,'RegistrationFees'=>$_RegistrationFees,'Supplies'=>$_Supplies,'InterestedDirectorSalaries'=>$_InterestedDirectorSalaries,'DisinterestedDirectorSalaries'=>$_DisinterestedDirectorSalaries,'OfficerSalaries'=>$_OfficerSalaries,'ShareholdersReports'=>$_ShareholdersReports,'DeterminationOfPrices'=>$_DeterminationOfPrices,'Trading'=>$_Trading,'ProspectusPrinting'=>$_ProspectusPrinting,'Other'=>$_Other));
	}
	/**
	 * Set OfficeRental
	 * @param boolean OfficeRental
	 * @return boolean
	 */
	public function setOfficeRental($_OfficeRental)
	{
		return ($this->OfficeRental = $_OfficeRental);
	}
	/**
	 * Get OfficeRental
	 * @return boolean
	 */
	public function getOfficeRental()
	{
		return $this->OfficeRental;
	}
	/**
	 * Set ClericalServices
	 * @param boolean ClericalServices
	 * @return boolean
	 */
	public function setClericalServices($_ClericalServices)
	{
		return ($this->ClericalServices = $_ClericalServices);
	}
	/**
	 * Get ClericalServices
	 * @return boolean
	 */
	public function getClericalServices()
	{
		return $this->ClericalServices;
	}
	/**
	 * Set AccountingServices
	 * @param boolean AccountingServices
	 * @return boolean
	 */
	public function setAccountingServices($_AccountingServices)
	{
		return ($this->AccountingServices = $_AccountingServices);
	}
	/**
	 * Get AccountingServices
	 * @return boolean
	 */
	public function getAccountingServices()
	{
		return $this->AccountingServices;
	}
	/**
	 * Set AuditorServices
	 * @param boolean AuditorServices
	 * @return boolean
	 */
	public function setAuditorServices($_AuditorServices)
	{
		return ($this->AuditorServices = $_AuditorServices);
	}
	/**
	 * Get AuditorServices
	 * @return boolean
	 */
	public function getAuditorServices()
	{
		return $this->AuditorServices;
	}
	/**
	 * Set CounselServices
	 * @param boolean CounselServices
	 * @return boolean
	 */
	public function setCounselServices($_CounselServices)
	{
		return ($this->CounselServices = $_CounselServices);
	}
	/**
	 * Get CounselServices
	 * @return boolean
	 */
	public function getCounselServices()
	{
		return $this->CounselServices;
	}
	/**
	 * Set RegistrationFees
	 * @param boolean RegistrationFees
	 * @return boolean
	 */
	public function setRegistrationFees($_RegistrationFees)
	{
		return ($this->RegistrationFees = $_RegistrationFees);
	}
	/**
	 * Get RegistrationFees
	 * @return boolean
	 */
	public function getRegistrationFees()
	{
		return $this->RegistrationFees;
	}
	/**
	 * Set Supplies
	 * @param boolean Supplies
	 * @return boolean
	 */
	public function setSupplies($_Supplies)
	{
		return ($this->Supplies = $_Supplies);
	}
	/**
	 * Get Supplies
	 * @return boolean
	 */
	public function getSupplies()
	{
		return $this->Supplies;
	}
	/**
	 * Set InterestedDirectorSalaries
	 * @param boolean InterestedDirectorSalaries
	 * @return boolean
	 */
	public function setInterestedDirectorSalaries($_InterestedDirectorSalaries)
	{
		return ($this->InterestedDirectorSalaries = $_InterestedDirectorSalaries);
	}
	/**
	 * Get InterestedDirectorSalaries
	 * @return boolean
	 */
	public function getInterestedDirectorSalaries()
	{
		return $this->InterestedDirectorSalaries;
	}
	/**
	 * Set DisinterestedDirectorSalaries
	 * @param boolean DisinterestedDirectorSalaries
	 * @return boolean
	 */
	public function setDisinterestedDirectorSalaries($_DisinterestedDirectorSalaries)
	{
		return ($this->DisinterestedDirectorSalaries = $_DisinterestedDirectorSalaries);
	}
	/**
	 * Get DisinterestedDirectorSalaries
	 * @return boolean
	 */
	public function getDisinterestedDirectorSalaries()
	{
		return $this->DisinterestedDirectorSalaries;
	}
	/**
	 * Set OfficerSalaries
	 * @param boolean OfficerSalaries
	 * @return boolean
	 */
	public function setOfficerSalaries($_OfficerSalaries)
	{
		return ($this->OfficerSalaries = $_OfficerSalaries);
	}
	/**
	 * Get OfficerSalaries
	 * @return boolean
	 */
	public function getOfficerSalaries()
	{
		return $this->OfficerSalaries;
	}
	/**
	 * Set ShareholdersReports
	 * @param boolean ShareholdersReports
	 * @return boolean
	 */
	public function setShareholdersReports($_ShareholdersReports)
	{
		return ($this->ShareholdersReports = $_ShareholdersReports);
	}
	/**
	 * Get ShareholdersReports
	 * @return boolean
	 */
	public function getShareholdersReports()
	{
		return $this->ShareholdersReports;
	}
	/**
	 * Set DeterminationOfPrices
	 * @param boolean DeterminationOfPrices
	 * @return boolean
	 */
	public function setDeterminationOfPrices($_DeterminationOfPrices)
	{
		return ($this->DeterminationOfPrices = $_DeterminationOfPrices);
	}
	/**
	 * Get DeterminationOfPrices
	 * @return boolean
	 */
	public function getDeterminationOfPrices()
	{
		return $this->DeterminationOfPrices;
	}
	/**
	 * Set Trading
	 * @param boolean Trading
	 * @return boolean
	 */
	public function setTrading($_Trading)
	{
		return ($this->Trading = $_Trading);
	}
	/**
	 * Get Trading
	 * @return boolean
	 */
	public function getTrading()
	{
		return $this->Trading;
	}
	/**
	 * Set ProspectusPrinting
	 * @param boolean ProspectusPrinting
	 * @return boolean
	 */
	public function setProspectusPrinting($_ProspectusPrinting)
	{
		return ($this->ProspectusPrinting = $_ProspectusPrinting);
	}
	/**
	 * Get ProspectusPrinting
	 * @return boolean
	 */
	public function getProspectusPrinting()
	{
		return $this->ProspectusPrinting;
	}
	/**
	 * Set Other
	 * @param boolean Other
	 * @return boolean
	 */
	public function setOther($_Other)
	{
		return ($this->Other = $_Other);
	}
	/**
	 * Get Other
	 * @return boolean
	 */
	public function getOther()
	{
		return $this->Other;
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