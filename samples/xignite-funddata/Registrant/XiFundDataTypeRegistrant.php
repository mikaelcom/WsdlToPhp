<?php
/**
 * Class file for XiFundDataTypeRegistrant
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeRegistrant
 * @date 08/07/2012
 */
class XiFundDataTypeRegistrant extends XiFundDataTypeCommon
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The FileNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FileNumber;
	/**
	 * The Telephone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Telephone;
	/**
	 * The Address
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeAddress
	 */
	public $Address;
	/**
	 * The FirstFiling
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $FirstFiling;
	/**
	 * The LastFiling
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $LastFiling;
	/**
	 * The SBIC
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $SBIC;
	/**
	 * The UIT
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $UIT;
	/**
	 * The MultiplePortfolios
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $MultiplePortfolios;
	/**
	 * The PortfolioSeriesCount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $PortfolioSeriesCount;
	/**
	 * The PortfolioSeries
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeArrayOfPortfolioSeries
	 */
	public $PortfolioSeries;
	/**
	 * The MaintainsBookEntrySystem
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $MaintainsBookEntrySystem;
	/**
	 * The FamilyOfInvestmentCompanies
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $FamilyOfInvestmentCompanies;
	/**
	 * The NumberOfInvestmentCompaniesInFamily
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $NumberOfInvestmentCompaniesInFamily;
	/**
	 * The FamilyName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FamilyName;
	/**
	 * The ConsolidatedFilingOfWhollyOwnedSubsidiaries
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ConsolidatedFilingOfWhollyOwnedSubsidiaries;
	/**
	 * Constructor
	 * @param string Name
	 * @param string FileNumber
	 * @param string Telephone
	 * @param XiFundDataTypeAddress Address
	 * @param boolean FirstFiling
	 * @param boolean LastFiling
	 * @param boolean SBIC
	 * @param boolean UIT
	 * @param boolean MultiplePortfolios
	 * @param int PortfolioSeriesCount
	 * @param XiFundDataTypeArrayOfPortfolioSeries PortfolioSeries
	 * @param boolean MaintainsBookEntrySystem
	 * @param boolean FamilyOfInvestmentCompanies
	 * @param int NumberOfInvestmentCompaniesInFamily
	 * @param string FamilyName
	 * @param boolean ConsolidatedFilingOfWhollyOwnedSubsidiaries
	 * @return XiFundDataTypeRegistrant
	 */
	public function __construct($_Name = null,$_FileNumber = null,$_Telephone = null,$_Address = null,$_FirstFiling,$_LastFiling,$_SBIC,$_UIT,$_MultiplePortfolios,$_PortfolioSeriesCount,$_PortfolioSeries = null,$_MaintainsBookEntrySystem,$_FamilyOfInvestmentCompanies,$_NumberOfInvestmentCompaniesInFamily,$_FamilyName = null,$_ConsolidatedFilingOfWhollyOwnedSubsidiaries)
	{
		XiFundDataWsdlClass::__construct(array('Name'=>$_Name,'FileNumber'=>$_FileNumber,'Telephone'=>$_Telephone,'Address'=>$_Address,'FirstFiling'=>$_FirstFiling,'LastFiling'=>$_LastFiling,'SBIC'=>$_SBIC,'UIT'=>$_UIT,'MultiplePortfolios'=>$_MultiplePortfolios,'PortfolioSeriesCount'=>$_PortfolioSeriesCount,'PortfolioSeries'=>new XiFundDataTypeArrayOfPortfolioSeries($_PortfolioSeries),'MaintainsBookEntrySystem'=>$_MaintainsBookEntrySystem,'FamilyOfInvestmentCompanies'=>$_FamilyOfInvestmentCompanies,'NumberOfInvestmentCompaniesInFamily'=>$_NumberOfInvestmentCompaniesInFamily,'FamilyName'=>$_FamilyName,'ConsolidatedFilingOfWhollyOwnedSubsidiaries'=>$_ConsolidatedFilingOfWhollyOwnedSubsidiaries));
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
	 * Set FileNumber
	 * @param string FileNumber
	 * @return string
	 */
	public function setFileNumber($_FileNumber)
	{
		return ($this->FileNumber = $_FileNumber);
	}
	/**
	 * Get FileNumber
	 * @return string
	 */
	public function getFileNumber()
	{
		return $this->FileNumber;
	}
	/**
	 * Set Telephone
	 * @param string Telephone
	 * @return string
	 */
	public function setTelephone($_Telephone)
	{
		return ($this->Telephone = $_Telephone);
	}
	/**
	 * Get Telephone
	 * @return string
	 */
	public function getTelephone()
	{
		return $this->Telephone;
	}
	/**
	 * Set Address
	 * @param Address Address
	 * @return Address
	 */
	public function setAddress($_Address)
	{
		return ($this->Address = $_Address);
	}
	/**
	 * Get Address
	 * @return XiFundDataTypeAddress
	 */
	public function getAddress()
	{
		return $this->Address;
	}
	/**
	 * Set FirstFiling
	 * @param boolean FirstFiling
	 * @return boolean
	 */
	public function setFirstFiling($_FirstFiling)
	{
		return ($this->FirstFiling = $_FirstFiling);
	}
	/**
	 * Get FirstFiling
	 * @return boolean
	 */
	public function getFirstFiling()
	{
		return $this->FirstFiling;
	}
	/**
	 * Set LastFiling
	 * @param boolean LastFiling
	 * @return boolean
	 */
	public function setLastFiling($_LastFiling)
	{
		return ($this->LastFiling = $_LastFiling);
	}
	/**
	 * Get LastFiling
	 * @return boolean
	 */
	public function getLastFiling()
	{
		return $this->LastFiling;
	}
	/**
	 * Set SBIC
	 * @param boolean SBIC
	 * @return boolean
	 */
	public function setSBIC($_SBIC)
	{
		return ($this->SBIC = $_SBIC);
	}
	/**
	 * Get SBIC
	 * @return boolean
	 */
	public function getSBIC()
	{
		return $this->SBIC;
	}
	/**
	 * Set UIT
	 * @param boolean UIT
	 * @return boolean
	 */
	public function setUIT($_UIT)
	{
		return ($this->UIT = $_UIT);
	}
	/**
	 * Get UIT
	 * @return boolean
	 */
	public function getUIT()
	{
		return $this->UIT;
	}
	/**
	 * Set MultiplePortfolios
	 * @param boolean MultiplePortfolios
	 * @return boolean
	 */
	public function setMultiplePortfolios($_MultiplePortfolios)
	{
		return ($this->MultiplePortfolios = $_MultiplePortfolios);
	}
	/**
	 * Get MultiplePortfolios
	 * @return boolean
	 */
	public function getMultiplePortfolios()
	{
		return $this->MultiplePortfolios;
	}
	/**
	 * Set PortfolioSeriesCount
	 * @param int PortfolioSeriesCount
	 * @return int
	 */
	public function setPortfolioSeriesCount($_PortfolioSeriesCount)
	{
		return ($this->PortfolioSeriesCount = $_PortfolioSeriesCount);
	}
	/**
	 * Get PortfolioSeriesCount
	 * @return int
	 */
	public function getPortfolioSeriesCount()
	{
		return $this->PortfolioSeriesCount;
	}
	/**
	 * Set PortfolioSeries
	 * @param ArrayOfPortfolioSeries PortfolioSeries
	 * @return ArrayOfPortfolioSeries
	 */
	public function setPortfolioSeries($_PortfolioSeries)
	{
		return ($this->PortfolioSeries = $_PortfolioSeries);
	}
	/**
	 * Get PortfolioSeries
	 * @return XiFundDataTypeArrayOfPortfolioSeries
	 */
	public function getPortfolioSeries()
	{
		return $this->PortfolioSeries;
	}
	/**
	 * Set MaintainsBookEntrySystem
	 * @param boolean MaintainsBookEntrySystem
	 * @return boolean
	 */
	public function setMaintainsBookEntrySystem($_MaintainsBookEntrySystem)
	{
		return ($this->MaintainsBookEntrySystem = $_MaintainsBookEntrySystem);
	}
	/**
	 * Get MaintainsBookEntrySystem
	 * @return boolean
	 */
	public function getMaintainsBookEntrySystem()
	{
		return $this->MaintainsBookEntrySystem;
	}
	/**
	 * Set FamilyOfInvestmentCompanies
	 * @param boolean FamilyOfInvestmentCompanies
	 * @return boolean
	 */
	public function setFamilyOfInvestmentCompanies($_FamilyOfInvestmentCompanies)
	{
		return ($this->FamilyOfInvestmentCompanies = $_FamilyOfInvestmentCompanies);
	}
	/**
	 * Get FamilyOfInvestmentCompanies
	 * @return boolean
	 */
	public function getFamilyOfInvestmentCompanies()
	{
		return $this->FamilyOfInvestmentCompanies;
	}
	/**
	 * Set NumberOfInvestmentCompaniesInFamily
	 * @param int NumberOfInvestmentCompaniesInFamily
	 * @return int
	 */
	public function setNumberOfInvestmentCompaniesInFamily($_NumberOfInvestmentCompaniesInFamily)
	{
		return ($this->NumberOfInvestmentCompaniesInFamily = $_NumberOfInvestmentCompaniesInFamily);
	}
	/**
	 * Get NumberOfInvestmentCompaniesInFamily
	 * @return int
	 */
	public function getNumberOfInvestmentCompaniesInFamily()
	{
		return $this->NumberOfInvestmentCompaniesInFamily;
	}
	/**
	 * Set FamilyName
	 * @param string FamilyName
	 * @return string
	 */
	public function setFamilyName($_FamilyName)
	{
		return ($this->FamilyName = $_FamilyName);
	}
	/**
	 * Get FamilyName
	 * @return string
	 */
	public function getFamilyName()
	{
		return $this->FamilyName;
	}
	/**
	 * Set ConsolidatedFilingOfWhollyOwnedSubsidiaries
	 * @param boolean ConsolidatedFilingOfWhollyOwnedSubsidiaries
	 * @return boolean
	 */
	public function setConsolidatedFilingOfWhollyOwnedSubsidiaries($_ConsolidatedFilingOfWhollyOwnedSubsidiaries)
	{
		return ($this->ConsolidatedFilingOfWhollyOwnedSubsidiaries = $_ConsolidatedFilingOfWhollyOwnedSubsidiaries);
	}
	/**
	 * Get ConsolidatedFilingOfWhollyOwnedSubsidiaries
	 * @return boolean
	 */
	public function getConsolidatedFilingOfWhollyOwnedSubsidiaries()
	{
		return $this->ConsolidatedFilingOfWhollyOwnedSubsidiaries;
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