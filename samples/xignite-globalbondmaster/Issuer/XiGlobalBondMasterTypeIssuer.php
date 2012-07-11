<?php
/**
 * Class file for XiGlobalBondMasterTypeIssuer
 * @date 08/07/2012
 */
/**
 * Class XiGlobalBondMasterTypeIssuer
 * @date 08/07/2012
 */
class XiGlobalBondMasterTypeIssuer extends XiGlobalBondMasterWsdlClass
{
	/**
	 * The IssuerName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssuerName;
	/**
	 * The Domicile
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Domicile;
	/**
	 * The CompanyIdentifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CompanyIdentifier;
	/**
	 * The CIK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CIK;
	/**
	 * The InstitutionType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InstitutionType;
	/**
	 * The IssuerStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssuerStatus;
	/**
	 * The ShortName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ShortName;
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
	 * Constructor
	 * @param string IssuerName
	 * @param string Domicile
	 * @param string CompanyIdentifier
	 * @param string CIK
	 * @param string InstitutionType
	 * @param string IssuerStatus
	 * @param string ShortName
	 * @param string Industry
	 * @param string Sector
	 * @return XiGlobalBondMasterTypeIssuer
	 */
	public function __construct($_IssuerName = null,$_Domicile = null,$_CompanyIdentifier = null,$_CIK = null,$_InstitutionType = null,$_IssuerStatus = null,$_ShortName = null,$_Industry = null,$_Sector = null)
	{
		parent::__construct(array('IssuerName'=>$_IssuerName,'Domicile'=>$_Domicile,'CompanyIdentifier'=>$_CompanyIdentifier,'CIK'=>$_CIK,'InstitutionType'=>$_InstitutionType,'IssuerStatus'=>$_IssuerStatus,'ShortName'=>$_ShortName,'Industry'=>$_Industry,'Sector'=>$_Sector));
	}
	/**
	 * Set IssuerName
	 * @param string IssuerName
	 * @return string
	 */
	public function setIssuerName($_IssuerName)
	{
		return ($this->IssuerName = $_IssuerName);
	}
	/**
	 * Get IssuerName
	 * @return string
	 */
	public function getIssuerName()
	{
		return $this->IssuerName;
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
	 * Set InstitutionType
	 * @param string InstitutionType
	 * @return string
	 */
	public function setInstitutionType($_InstitutionType)
	{
		return ($this->InstitutionType = $_InstitutionType);
	}
	/**
	 * Get InstitutionType
	 * @return string
	 */
	public function getInstitutionType()
	{
		return $this->InstitutionType;
	}
	/**
	 * Set IssuerStatus
	 * @param string IssuerStatus
	 * @return string
	 */
	public function setIssuerStatus($_IssuerStatus)
	{
		return ($this->IssuerStatus = $_IssuerStatus);
	}
	/**
	 * Get IssuerStatus
	 * @return string
	 */
	public function getIssuerStatus()
	{
		return $this->IssuerStatus;
	}
	/**
	 * Set ShortName
	 * @param string ShortName
	 * @return string
	 */
	public function setShortName($_ShortName)
	{
		return ($this->ShortName = $_ShortName);
	}
	/**
	 * Get ShortName
	 * @return string
	 */
	public function getShortName()
	{
		return $this->ShortName;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>