<?php
/**
 * Class file for PayPalTypePersonNameType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePersonNameType
 * @date 14/07/2012
 */
class PayPalTypePersonNameType extends PayPalWsdlClass
{
	/**
	 * The Salutation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeSalutationType
	 */
	public $Salutation;
	/**
	 * The FirstName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeNameType
	 */
	public $FirstName;
	/**
	 * The MiddleName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeNameType
	 */
	public $MiddleName;
	/**
	 * The LastName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeNameType
	 */
	public $LastName;
	/**
	 * The Suffix
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeSuffixType
	 */
	public $Suffix;
	/**
	 * Constructor
	 * @param PayPalTypeSalutationType Salutation
	 * @param PayPalTypeNameType FirstName
	 * @param PayPalTypeNameType MiddleName
	 * @param PayPalTypeNameType LastName
	 * @param PayPalTypeSuffixType Suffix
	 * @return PayPalTypePersonNameType
	 */
	public function __construct($_Salutation = null,$_FirstName = null,$_MiddleName = null,$_LastName = null,$_Suffix = null)
	{
		parent::__construct(array('Salutation'=>$_Salutation,'FirstName'=>$_FirstName,'MiddleName'=>$_MiddleName,'LastName'=>$_LastName,'Suffix'=>$_Suffix));
	}
	/**
	 * Set Salutation
	 * @param SalutationType Salutation
	 * @return SalutationType
	 */
	public function setSalutation($_Salutation)
	{
		return ($this->Salutation = PayPalTypeSalutationType::valueIsValid($_Salutation)?$_Salutation:null);
	}
	/**
	 * Get Salutation
	 * @return PayPalTypeSalutationType
	 */
	public function getSalutation()
	{
		return $this->Salutation;
	}
	/**
	 * Set FirstName
	 * @param NameType FirstName
	 * @return NameType
	 */
	public function setFirstName($_FirstName)
	{
		return ($this->FirstName = PayPalTypeNameType::valueIsValid($_FirstName)?$_FirstName:null);
	}
	/**
	 * Get FirstName
	 * @return PayPalTypeNameType
	 */
	public function getFirstName()
	{
		return $this->FirstName;
	}
	/**
	 * Set MiddleName
	 * @param NameType MiddleName
	 * @return NameType
	 */
	public function setMiddleName($_MiddleName)
	{
		return ($this->MiddleName = PayPalTypeNameType::valueIsValid($_MiddleName)?$_MiddleName:null);
	}
	/**
	 * Get MiddleName
	 * @return PayPalTypeNameType
	 */
	public function getMiddleName()
	{
		return $this->MiddleName;
	}
	/**
	 * Set LastName
	 * @param NameType LastName
	 * @return NameType
	 */
	public function setLastName($_LastName)
	{
		return ($this->LastName = PayPalTypeNameType::valueIsValid($_LastName)?$_LastName:null);
	}
	/**
	 * Get LastName
	 * @return PayPalTypeNameType
	 */
	public function getLastName()
	{
		return $this->LastName;
	}
	/**
	 * Set Suffix
	 * @param SuffixType Suffix
	 * @return SuffixType
	 */
	public function setSuffix($_Suffix)
	{
		return ($this->Suffix = PayPalTypeSuffixType::valueIsValid($_Suffix)?$_Suffix:null);
	}
	/**
	 * Get Suffix
	 * @return PayPalTypeSuffixType
	 */
	public function getSuffix()
	{
		return $this->Suffix;
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