<?php
/**
 * Class file for XiInsiderTypeSECFiler
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeSECFiler
 * @date 08/07/2012
 */
class XiInsiderTypeSECFiler extends XiInsiderWsdlClass
{
	/**
	 * The CompanyData
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeSECCompanyData
	 */
	public $CompanyData;
	/**
	 * The FilingValues
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeSECFilingValues
	 */
	public $FilingValues;
	/**
	 * The BusinessAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeSECBusinessAddress
	 */
	public $BusinessAddress;
	/**
	 * The MailAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeSECBusinessAddress
	 */
	public $MailAddress;
	/**
	 * The FormerCompanyNames
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeArrayOfSECFormerCompanyName
	 */
	public $FormerCompanyNames;
	/**
	 * Constructor
	 * @param XiInsiderTypeSECCompanyData CompanyData
	 * @param XiInsiderTypeSECFilingValues FilingValues
	 * @param XiInsiderTypeSECBusinessAddress BusinessAddress
	 * @param XiInsiderTypeSECBusinessAddress MailAddress
	 * @param XiInsiderTypeArrayOfSECFormerCompanyName FormerCompanyNames
	 * @return XiInsiderTypeSECFiler
	 */
	public function __construct($_CompanyData = null,$_FilingValues = null,$_BusinessAddress = null,$_MailAddress = null,$_FormerCompanyNames = null)
	{
		parent::__construct(array('CompanyData'=>$_CompanyData,'FilingValues'=>$_FilingValues,'BusinessAddress'=>$_BusinessAddress,'MailAddress'=>$_MailAddress,'FormerCompanyNames'=>new XiInsiderTypeArrayOfSECFormerCompanyName($_FormerCompanyNames)));
	}
	/**
	 * Set CompanyData
	 * @param SECCompanyData CompanyData
	 * @return SECCompanyData
	 */
	public function setCompanyData($_CompanyData)
	{
		return ($this->CompanyData = $_CompanyData);
	}
	/**
	 * Get CompanyData
	 * @return XiInsiderTypeSECCompanyData
	 */
	public function getCompanyData()
	{
		return $this->CompanyData;
	}
	/**
	 * Set FilingValues
	 * @param SECFilingValues FilingValues
	 * @return SECFilingValues
	 */
	public function setFilingValues($_FilingValues)
	{
		return ($this->FilingValues = $_FilingValues);
	}
	/**
	 * Get FilingValues
	 * @return XiInsiderTypeSECFilingValues
	 */
	public function getFilingValues()
	{
		return $this->FilingValues;
	}
	/**
	 * Set BusinessAddress
	 * @param SECBusinessAddress BusinessAddress
	 * @return SECBusinessAddress
	 */
	public function setBusinessAddress($_BusinessAddress)
	{
		return ($this->BusinessAddress = $_BusinessAddress);
	}
	/**
	 * Get BusinessAddress
	 * @return XiInsiderTypeSECBusinessAddress
	 */
	public function getBusinessAddress()
	{
		return $this->BusinessAddress;
	}
	/**
	 * Set MailAddress
	 * @param SECBusinessAddress MailAddress
	 * @return SECBusinessAddress
	 */
	public function setMailAddress($_MailAddress)
	{
		return ($this->MailAddress = $_MailAddress);
	}
	/**
	 * Get MailAddress
	 * @return XiInsiderTypeSECBusinessAddress
	 */
	public function getMailAddress()
	{
		return $this->MailAddress;
	}
	/**
	 * Set FormerCompanyNames
	 * @param ArrayOfSECFormerCompanyName FormerCompanyNames
	 * @return ArrayOfSECFormerCompanyName
	 */
	public function setFormerCompanyNames($_FormerCompanyNames)
	{
		return ($this->FormerCompanyNames = $_FormerCompanyNames);
	}
	/**
	 * Get FormerCompanyNames
	 * @return XiInsiderTypeArrayOfSECFormerCompanyName
	 */
	public function getFormerCompanyNames()
	{
		return $this->FormerCompanyNames;
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