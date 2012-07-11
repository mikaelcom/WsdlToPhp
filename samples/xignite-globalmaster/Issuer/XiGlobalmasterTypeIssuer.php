<?php
/**
 * Class file for XiGlobalmasterTypeIssuer
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeIssuer
 * @date 08/07/2012
 */
class XiGlobalmasterTypeIssuer extends XiGlobalmasterTypeCommon
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
	 * The CIK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CIK;
	/**
	 * The Industry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Industry;
	/**
	 * The Sector
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Sector;
	/**
	 * The ActiveDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ActiveDate;
	/**
	 * The InactiveDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InactiveDate;
	/**
	 * The CompanyIdentifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CompanyIdentifier;
	/**
	 * The Domicile
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Domicile;
	/**
	 * The Active
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Active;
	/**
	 * The CustomAttributes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfCustomAttribute
	 */
	public $CustomAttributes;
	/**
	 * The Instruments
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfInstrument
	 */
	public $Instruments;
	/**
	 * The DataProvider
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeDataProviders
	 */
	public $DataProvider;
	/**
	 * The Classifications
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfClassification
	 */
	public $Classifications;
	/**
	 * Constructor
	 * @param string Name
	 * @param string CIK
	 * @param string Industry
	 * @param string Sector
	 * @param string ActiveDate
	 * @param string InactiveDate
	 * @param string CompanyIdentifier
	 * @param string Domicile
	 * @param boolean Active
	 * @param XiGlobalmasterTypeArrayOfCustomAttribute CustomAttributes
	 * @param XiGlobalmasterTypeArrayOfInstrument Instruments
	 * @param XiGlobalmasterTypeDataProviders DataProvider
	 * @param XiGlobalmasterTypeArrayOfClassification Classifications
	 * @return XiGlobalmasterTypeIssuer
	 */
	public function __construct($_Name = null,$_CIK = null,$_Industry = null,$_Sector = null,$_ActiveDate = null,$_InactiveDate = null,$_CompanyIdentifier = null,$_Domicile = null,$_Active,$_CustomAttributes = null,$_Instruments = null,$_DataProvider,$_Classifications = null)
	{
		XiGlobalmasterWsdlClass::__construct(array('Name'=>$_Name,'CIK'=>$_CIK,'Industry'=>$_Industry,'Sector'=>$_Sector,'ActiveDate'=>$_ActiveDate,'InactiveDate'=>$_InactiveDate,'CompanyIdentifier'=>$_CompanyIdentifier,'Domicile'=>$_Domicile,'Active'=>$_Active,'CustomAttributes'=>new XiGlobalmasterTypeArrayOfCustomAttribute($_CustomAttributes),'Instruments'=>new XiGlobalmasterTypeArrayOfInstrument($_Instruments),'DataProvider'=>$_DataProvider,'Classifications'=>new XiGlobalmasterTypeArrayOfClassification($_Classifications)));
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
	 * Set CIK
	 * @param string CIK
	 * @return string
	 */
	public function setCIK($_CIK)
	{
		return ($this->CIK = $_CIK);
	}
	/**
	 * Get CIK
	 * @return string
	 */
	public function getCIK()
	{
		return $this->CIK;
	}
	/**
	 * Set Industry
	 * @param string Industry
	 * @return string
	 */
	public function setIndustry($_Industry)
	{
		return ($this->Industry = $_Industry);
	}
	/**
	 * Get Industry
	 * @return string
	 */
	public function getIndustry()
	{
		return $this->Industry;
	}
	/**
	 * Set Sector
	 * @param string Sector
	 * @return string
	 */
	public function setSector($_Sector)
	{
		return ($this->Sector = $_Sector);
	}
	/**
	 * Get Sector
	 * @return string
	 */
	public function getSector()
	{
		return $this->Sector;
	}
	/**
	 * Set ActiveDate
	 * @param string ActiveDate
	 * @return string
	 */
	public function setActiveDate($_ActiveDate)
	{
		return ($this->ActiveDate = $_ActiveDate);
	}
	/**
	 * Get ActiveDate
	 * @return string
	 */
	public function getActiveDate()
	{
		return $this->ActiveDate;
	}
	/**
	 * Set InactiveDate
	 * @param string InactiveDate
	 * @return string
	 */
	public function setInactiveDate($_InactiveDate)
	{
		return ($this->InactiveDate = $_InactiveDate);
	}
	/**
	 * Get InactiveDate
	 * @return string
	 */
	public function getInactiveDate()
	{
		return $this->InactiveDate;
	}
	/**
	 * Set CompanyIdentifier
	 * @param string CompanyIdentifier
	 * @return string
	 */
	public function setCompanyIdentifier($_CompanyIdentifier)
	{
		return ($this->CompanyIdentifier = $_CompanyIdentifier);
	}
	/**
	 * Get CompanyIdentifier
	 * @return string
	 */
	public function getCompanyIdentifier()
	{
		return $this->CompanyIdentifier;
	}
	/**
	 * Set Domicile
	 * @param string Domicile
	 * @return string
	 */
	public function setDomicile($_Domicile)
	{
		return ($this->Domicile = $_Domicile);
	}
	/**
	 * Get Domicile
	 * @return string
	 */
	public function getDomicile()
	{
		return $this->Domicile;
	}
	/**
	 * Set Active
	 * @param boolean Active
	 * @return boolean
	 */
	public function setActive($_Active)
	{
		return ($this->Active = $_Active);
	}
	/**
	 * Get Active
	 * @return boolean
	 */
	public function getActive()
	{
		return $this->Active;
	}
	/**
	 * Set CustomAttributes
	 * @param ArrayOfCustomAttribute CustomAttributes
	 * @return ArrayOfCustomAttribute
	 */
	public function setCustomAttributes($_CustomAttributes)
	{
		return ($this->CustomAttributes = $_CustomAttributes);
	}
	/**
	 * Get CustomAttributes
	 * @return XiGlobalmasterTypeArrayOfCustomAttribute
	 */
	public function getCustomAttributes()
	{
		return $this->CustomAttributes;
	}
	/**
	 * Set Instruments
	 * @param ArrayOfInstrument Instruments
	 * @return ArrayOfInstrument
	 */
	public function setInstruments($_Instruments)
	{
		return ($this->Instruments = $_Instruments);
	}
	/**
	 * Get Instruments
	 * @return XiGlobalmasterTypeArrayOfInstrument
	 */
	public function getInstruments()
	{
		return $this->Instruments;
	}
	/**
	 * Set DataProvider
	 * @param DataProviders DataProvider
	 * @return DataProviders
	 */
	public function setDataProvider($_DataProvider)
	{
		return ($this->DataProvider = XiGlobalmasterTypeDataProviders::valueIsValid($_DataProvider)?$_DataProvider:null);
	}
	/**
	 * Get DataProvider
	 * @return XiGlobalmasterTypeDataProviders
	 */
	public function getDataProvider()
	{
		return $this->DataProvider;
	}
	/**
	 * Set Classifications
	 * @param ArrayOfClassification Classifications
	 * @return ArrayOfClassification
	 */
	public function setClassifications($_Classifications)
	{
		return ($this->Classifications = $_Classifications);
	}
	/**
	 * Get Classifications
	 * @return XiGlobalmasterTypeArrayOfClassification
	 */
	public function getClassifications()
	{
		return $this->Classifications;
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