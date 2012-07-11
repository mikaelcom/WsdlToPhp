<?php
/**
 * Class file for EccShippingFedexTypeGetFedExRate
 * @date 03/07/2012
 */
/**
 * Class EccShippingFedexTypeGetFedExRate
 * @date 03/07/2012
 */
class EccShippingFedexTypeGetFedExRate extends EccShippingFedexWsdlClass
{
	/**
	 * The KeyID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $KeyID;
	/**
	 * The DomainID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DomainID;
	/**
	 * The ServiceType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ServiceType;
	/**
	 * The SenderPostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SenderPostalCode;
	/**
	 * The SenderCountryCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SenderCountryCode;
	/**
	 * The RecipientPostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RecipientPostalCode;
	/**
	 * The RecipientCountryCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RecipientCountryCode;
	/**
	 * The TotalPackageWeight
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TotalPackageWeight;
	/**
	 * The DeclaredValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DeclaredValue;
	/**
	 * Constructor
	 * @param string KeyID
	 * @param string DomainID
	 * @param string ServiceType
	 * @param string SenderPostalCode
	 * @param string SenderCountryCode
	 * @param string RecipientPostalCode
	 * @param string RecipientCountryCode
	 * @param string TotalPackageWeight
	 * @param string DeclaredValue
	 * @return EccShippingFedexTypeGetFedExRate
	 */
	public function __construct($_KeyID = null,$_DomainID = null,$_ServiceType = null,$_SenderPostalCode = null,$_SenderCountryCode = null,$_RecipientPostalCode = null,$_RecipientCountryCode = null,$_TotalPackageWeight = null,$_DeclaredValue = null)
	{
		parent::__construct(array('KeyID'=>$_KeyID,'DomainID'=>$_DomainID,'ServiceType'=>$_ServiceType,'SenderPostalCode'=>$_SenderPostalCode,'SenderCountryCode'=>$_SenderCountryCode,'RecipientPostalCode'=>$_RecipientPostalCode,'RecipientCountryCode'=>$_RecipientCountryCode,'TotalPackageWeight'=>$_TotalPackageWeight,'DeclaredValue'=>$_DeclaredValue));
	}
	/**
	 * Set KeyID
	 * @param string KeyID
	 * @return string
	 */
	public function setKeyID($_KeyID)
	{
		return ($this->KeyID = $_KeyID);
	}
	/**
	 * Get KeyID
	 * @return string
	 */
	public function getKeyID()
	{
		return $this->KeyID;
	}
	/**
	 * Set DomainID
	 * @param string DomainID
	 * @return string
	 */
	public function setDomainID($_DomainID)
	{
		return ($this->DomainID = $_DomainID);
	}
	/**
	 * Get DomainID
	 * @return string
	 */
	public function getDomainID()
	{
		return $this->DomainID;
	}
	/**
	 * Set ServiceType
	 * @param string ServiceType
	 * @return string
	 */
	public function setServiceType($_ServiceType)
	{
		return ($this->ServiceType = $_ServiceType);
	}
	/**
	 * Get ServiceType
	 * @return string
	 */
	public function getServiceType()
	{
		return $this->ServiceType;
	}
	/**
	 * Set SenderPostalCode
	 * @param string SenderPostalCode
	 * @return string
	 */
	public function setSenderPostalCode($_SenderPostalCode)
	{
		return ($this->SenderPostalCode = $_SenderPostalCode);
	}
	/**
	 * Get SenderPostalCode
	 * @return string
	 */
	public function getSenderPostalCode()
	{
		return $this->SenderPostalCode;
	}
	/**
	 * Set SenderCountryCode
	 * @param string SenderCountryCode
	 * @return string
	 */
	public function setSenderCountryCode($_SenderCountryCode)
	{
		return ($this->SenderCountryCode = $_SenderCountryCode);
	}
	/**
	 * Get SenderCountryCode
	 * @return string
	 */
	public function getSenderCountryCode()
	{
		return $this->SenderCountryCode;
	}
	/**
	 * Set RecipientPostalCode
	 * @param string RecipientPostalCode
	 * @return string
	 */
	public function setRecipientPostalCode($_RecipientPostalCode)
	{
		return ($this->RecipientPostalCode = $_RecipientPostalCode);
	}
	/**
	 * Get RecipientPostalCode
	 * @return string
	 */
	public function getRecipientPostalCode()
	{
		return $this->RecipientPostalCode;
	}
	/**
	 * Set RecipientCountryCode
	 * @param string RecipientCountryCode
	 * @return string
	 */
	public function setRecipientCountryCode($_RecipientCountryCode)
	{
		return ($this->RecipientCountryCode = $_RecipientCountryCode);
	}
	/**
	 * Get RecipientCountryCode
	 * @return string
	 */
	public function getRecipientCountryCode()
	{
		return $this->RecipientCountryCode;
	}
	/**
	 * Set TotalPackageWeight
	 * @param string TotalPackageWeight
	 * @return string
	 */
	public function setTotalPackageWeight($_TotalPackageWeight)
	{
		return ($this->TotalPackageWeight = $_TotalPackageWeight);
	}
	/**
	 * Get TotalPackageWeight
	 * @return string
	 */
	public function getTotalPackageWeight()
	{
		return $this->TotalPackageWeight;
	}
	/**
	 * Set DeclaredValue
	 * @param string DeclaredValue
	 * @return string
	 */
	public function setDeclaredValue($_DeclaredValue)
	{
		return ($this->DeclaredValue = $_DeclaredValue);
	}
	/**
	 * Get DeclaredValue
	 * @return string
	 */
	public function getDeclaredValue()
	{
		return $this->DeclaredValue;
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