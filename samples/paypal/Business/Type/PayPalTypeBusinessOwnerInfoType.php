<?php
/**
 * Class file for PayPalTypeBusinessOwnerInfoType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBusinessOwnerInfoType
 * Documentation : BusinessOwnerInfoType
 * @date 14/07/2012
 */
class PayPalTypeBusinessOwnerInfoType extends PayPalWsdlClass
{
	/**
	 * The Owner
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Details about the business owner
	 * @var PayPalTypePayerInfoType
	 */
	public $Owner;
	/**
	 * The HomePhone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Business owner’s home telephone number Character length and limitations: 32 alphanumeric characters
	 * @var string
	 */
	public $HomePhone;
	/**
	 * The MobilePhone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Business owner’s mobile telephone number Character length and limitations: 32 alphanumeric characters
	 * @var string
	 */
	public $MobilePhone;
	/**
	 * The SSN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Business owner’s social security number Character length and limitations: 9 alphanumeric characters
	 * @var string
	 */
	public $SSN;
	/**
	 * Constructor
	 * @param PayPalTypePayerInfoType Owner
	 * @param string HomePhone
	 * @param string MobilePhone
	 * @param string SSN
	 * @return PayPalTypeBusinessOwnerInfoType
	 */
	public function __construct($_Owner = null,$_HomePhone = null,$_MobilePhone = null,$_SSN = null)
	{
		parent::__construct(array('Owner'=>$_Owner,'HomePhone'=>$_HomePhone,'MobilePhone'=>$_MobilePhone,'SSN'=>$_SSN));
	}
	/**
	 * Set Owner
	 * @param PayerInfoType Owner
	 * @return PayerInfoType
	 */
	public function setOwner($_Owner)
	{
		return ($this->Owner = $_Owner);
	}
	/**
	 * Get Owner
	 * @return PayPalTypePayerInfoType
	 */
	public function getOwner()
	{
		return $this->Owner;
	}
	/**
	 * Set HomePhone
	 * @param string HomePhone
	 * @return string
	 */
	public function setHomePhone($_HomePhone)
	{
		return ($this->HomePhone = $_HomePhone);
	}
	/**
	 * Get HomePhone
	 * @return string
	 */
	public function getHomePhone()
	{
		return $this->HomePhone;
	}
	/**
	 * Set MobilePhone
	 * @param string MobilePhone
	 * @return string
	 */
	public function setMobilePhone($_MobilePhone)
	{
		return ($this->MobilePhone = $_MobilePhone);
	}
	/**
	 * Get MobilePhone
	 * @return string
	 */
	public function getMobilePhone()
	{
		return $this->MobilePhone;
	}
	/**
	 * Set SSN
	 * @param string SSN
	 * @return string
	 */
	public function setSSN($_SSN)
	{
		return ($this->SSN = $_SSN);
	}
	/**
	 * Get SSN
	 * @return string
	 */
	public function getSSN()
	{
		return $this->SSN;
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