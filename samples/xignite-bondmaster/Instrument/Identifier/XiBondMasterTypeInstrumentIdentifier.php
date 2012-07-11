<?php
/**
 * Class file for XiBondMasterTypeInstrumentIdentifier
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeInstrumentIdentifier
 * @date 08/07/2012
 */
class XiBondMasterTypeInstrumentIdentifier extends XiBondMasterTypeInstrumentIdentifierBrief
{
	/**
	 * The CompanyIdentifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CompanyIdentifier;
	/**
	 * The ShortName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ShortName;
	/**
	 * The IssuerName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssuerName;
	/**
	 * The IssuerDomicile
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssuerDomicile;
	/**
	 * The CFICode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CFICode;
	/**
	 * The OriginalIssuerName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OriginalIssuerName;
	/**
	 * The OriginalCompanyIdentifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OriginalCompanyIdentifier;
	/**
	 * Constructor
	 * @param string CompanyIdentifier
	 * @param string ShortName
	 * @param string IssuerName
	 * @param string IssuerDomicile
	 * @param string CFICode
	 * @param string OriginalIssuerName
	 * @param string OriginalCompanyIdentifier
	 * @return XiBondMasterTypeInstrumentIdentifier
	 */
	public function __construct($_CompanyIdentifier = null,$_ShortName = null,$_IssuerName = null,$_IssuerDomicile = null,$_CFICode = null,$_OriginalIssuerName = null,$_OriginalCompanyIdentifier = null)
	{
		XiBondMasterWsdlClass::__construct(array('CompanyIdentifier'=>$_CompanyIdentifier,'ShortName'=>$_ShortName,'IssuerName'=>$_IssuerName,'IssuerDomicile'=>$_IssuerDomicile,'CFICode'=>$_CFICode,'OriginalIssuerName'=>$_OriginalIssuerName,'OriginalCompanyIdentifier'=>$_OriginalCompanyIdentifier));
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
	 * Set IssuerDomicile
	 * @param string IssuerDomicile
	 * @return string
	 */
	public function setIssuerDomicile($_IssuerDomicile)
	{
		return ($this->IssuerDomicile = $_IssuerDomicile);
	}
	/**
	 * Get IssuerDomicile
	 * @return string
	 */
	public function getIssuerDomicile()
	{
		return $this->IssuerDomicile;
	}
	/**
	 * Set CFICode
	 * @param string CFICode
	 * @return string
	 */
	public function setCFICode($_CFICode)
	{
		return ($this->CFICode = $_CFICode);
	}
	/**
	 * Get CFICode
	 * @return string
	 */
	public function getCFICode()
	{
		return $this->CFICode;
	}
	/**
	 * Set OriginalIssuerName
	 * @param string OriginalIssuerName
	 * @return string
	 */
	public function setOriginalIssuerName($_OriginalIssuerName)
	{
		return ($this->OriginalIssuerName = $_OriginalIssuerName);
	}
	/**
	 * Get OriginalIssuerName
	 * @return string
	 */
	public function getOriginalIssuerName()
	{
		return $this->OriginalIssuerName;
	}
	/**
	 * Set OriginalCompanyIdentifier
	 * @param string OriginalCompanyIdentifier
	 * @return string
	 */
	public function setOriginalCompanyIdentifier($_OriginalCompanyIdentifier)
	{
		return ($this->OriginalCompanyIdentifier = $_OriginalCompanyIdentifier);
	}
	/**
	 * Get OriginalCompanyIdentifier
	 * @return string
	 */
	public function getOriginalCompanyIdentifier()
	{
		return $this->OriginalCompanyIdentifier;
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