<?php
/**
 * Class file for XiInsiderTypeGetRole
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetRole
 * @date 08/07/2012
 */
class XiInsiderTypeGetRole extends XiInsiderWsdlClass
{
	/**
	 * The InsiderCIK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InsiderCIK;
	/**
	 * The InsiderName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InsiderName;
	/**
	 * The InsiderAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InsiderAddress;
	/**
	 * The IssuerIdentifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssuerIdentifier;
	/**
	 * The IssuerIdentifierType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeIdentifierTypes
	 */
	public $IssuerIdentifierType;
	/**
	 * The IssuerName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssuerName;
	/**
	 * Constructor
	 * @param string InsiderCIK
	 * @param string InsiderName
	 * @param string InsiderAddress
	 * @param string IssuerIdentifier
	 * @param XiInsiderTypeIdentifierTypes IssuerIdentifierType
	 * @param string IssuerName
	 * @return XiInsiderTypeGetRole
	 */
	public function __construct($_InsiderCIK = null,$_InsiderName = null,$_InsiderAddress = null,$_IssuerIdentifier = null,$_IssuerIdentifierType,$_IssuerName = null)
	{
		parent::__construct(array('InsiderCIK'=>$_InsiderCIK,'InsiderName'=>$_InsiderName,'InsiderAddress'=>$_InsiderAddress,'IssuerIdentifier'=>$_IssuerIdentifier,'IssuerIdentifierType'=>$_IssuerIdentifierType,'IssuerName'=>$_IssuerName));
	}
	/**
	 * Set InsiderCIK
	 * @param string InsiderCIK
	 * @return string
	 */
	public function setInsiderCIK($_InsiderCIK)
	{
		return ($this->InsiderCIK = $_InsiderCIK);
	}
	/**
	 * Get InsiderCIK
	 * @return string
	 */
	public function getInsiderCIK()
	{
		return $this->InsiderCIK;
	}
	/**
	 * Set InsiderName
	 * @param string InsiderName
	 * @return string
	 */
	public function setInsiderName($_InsiderName)
	{
		return ($this->InsiderName = $_InsiderName);
	}
	/**
	 * Get InsiderName
	 * @return string
	 */
	public function getInsiderName()
	{
		return $this->InsiderName;
	}
	/**
	 * Set InsiderAddress
	 * @param string InsiderAddress
	 * @return string
	 */
	public function setInsiderAddress($_InsiderAddress)
	{
		return ($this->InsiderAddress = $_InsiderAddress);
	}
	/**
	 * Get InsiderAddress
	 * @return string
	 */
	public function getInsiderAddress()
	{
		return $this->InsiderAddress;
	}
	/**
	 * Set IssuerIdentifier
	 * @param string IssuerIdentifier
	 * @return string
	 */
	public function setIssuerIdentifier($_IssuerIdentifier)
	{
		return ($this->IssuerIdentifier = $_IssuerIdentifier);
	}
	/**
	 * Get IssuerIdentifier
	 * @return string
	 */
	public function getIssuerIdentifier()
	{
		return $this->IssuerIdentifier;
	}
	/**
	 * Set IssuerIdentifierType
	 * @param IdentifierTypes IssuerIdentifierType
	 * @return IdentifierTypes
	 */
	public function setIssuerIdentifierType($_IssuerIdentifierType)
	{
		return ($this->IssuerIdentifierType = XiInsiderTypeIdentifierTypes::valueIsValid($_IssuerIdentifierType)?$_IssuerIdentifierType:null);
	}
	/**
	 * Get IssuerIdentifierType
	 * @return XiInsiderTypeIdentifierTypes
	 */
	public function getIssuerIdentifierType()
	{
		return $this->IssuerIdentifierType;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>