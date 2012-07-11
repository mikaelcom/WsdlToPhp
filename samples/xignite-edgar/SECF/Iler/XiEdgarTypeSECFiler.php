<?php
/**
 * Class file for XiEdgarTypeSECFiler
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeSECFiler
 * @date 08/07/2012
 */
class XiEdgarTypeSECFiler extends XiEdgarWsdlClass
{
	/**
	 * The CompanyData
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeSECCompanyData
	 */
	public $CompanyData;
	/**
	 * The FilingValues
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeSECFilingValues
	 */
	public $FilingValues;
	/**
	 * The BusinessAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeSECBusinessAddress
	 */
	public $BusinessAddress;
	/**
	 * The MailAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeSECBusinessAddress
	 */
	public $MailAddress;
	/**
	 * The FormerCompanyNames
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeArrayOfSECFormerCompanyName
	 */
	public $FormerCompanyNames;
	/**
	 * Constructor
	 * @param XiEdgarTypeSECCompanyData CompanyData
	 * @param XiEdgarTypeSECFilingValues FilingValues
	 * @param XiEdgarTypeSECBusinessAddress BusinessAddress
	 * @param XiEdgarTypeSECBusinessAddress MailAddress
	 * @param XiEdgarTypeArrayOfSECFormerCompanyName FormerCompanyNames
	 * @return XiEdgarTypeSECFiler
	 */
	public function __construct($_CompanyData = null,$_FilingValues = null,$_BusinessAddress = null,$_MailAddress = null,$_FormerCompanyNames = null)
	{
		parent::__construct(array('CompanyData'=>$_CompanyData,'FilingValues'=>$_FilingValues,'BusinessAddress'=>$_BusinessAddress,'MailAddress'=>$_MailAddress,'FormerCompanyNames'=>new XiEdgarTypeArrayOfSECFormerCompanyName($_FormerCompanyNames)));
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
	 * @return XiEdgarTypeSECCompanyData
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
	 * @return XiEdgarTypeSECFilingValues
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
	 * @return XiEdgarTypeSECBusinessAddress
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
	 * @return XiEdgarTypeSECBusinessAddress
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
	 * @return XiEdgarTypeArrayOfSECFormerCompanyName
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