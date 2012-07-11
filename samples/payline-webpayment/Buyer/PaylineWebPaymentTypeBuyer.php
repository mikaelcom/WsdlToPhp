<?php
/**
 * Class file for PaylineWebPaymentTypeBuyer
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeBuyer
 * Documentation : This element contains information about the buyer
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeBuyer extends PaylineWebPaymentWsdlClass
{
	/**
	 * The lastName
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $lastName;
	/**
	 * The firstName
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $firstName;
	/**
	 * The email
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $email;
	/**
	 * The shippingAdress
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeAddress
	 */
	public $shippingAdress;
	/**
	 * The accountCreateDate
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $accountCreateDate;
	/**
	 * The accountAverageAmount
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $accountAverageAmount;
	/**
	 * The accountOrderCount
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $accountOrderCount;
	/**
	 * The walletId
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $walletId;
	/**
	 * The ip
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $ip;
	/**
	 * The mobilePhone
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $mobilePhone;
	/**
	 * Constructor
	 * @param string lastName
	 * @param string firstName
	 * @param string email
	 * @param PaylineWebPaymentTypeAddress shippingAdress
	 * @param string accountCreateDate
	 * @param string accountAverageAmount
	 * @param string accountOrderCount
	 * @param string walletId
	 * @param string ip
	 * @param string mobilePhone
	 * @return PaylineWebPaymentTypeBuyer
	 */
	public function __construct($_lastName = null,$_firstName = null,$_email = null,$_shippingAdress = null,$_accountCreateDate = null,$_accountAverageAmount = null,$_accountOrderCount = null,$_walletId = null,$_ip = null,$_mobilePhone = null)
	{
		parent::__construct(array('lastName'=>$_lastName,'firstName'=>$_firstName,'email'=>$_email,'shippingAdress'=>$_shippingAdress,'accountCreateDate'=>$_accountCreateDate,'accountAverageAmount'=>$_accountAverageAmount,'accountOrderCount'=>$_accountOrderCount,'walletId'=>$_walletId,'ip'=>$_ip,'mobilePhone'=>$_mobilePhone));
	}
	/**
	 * Set lastName
	 * @param string lastName
	 * @return string
	 */
	public function setLastName($_lastName)
	{
		return ($this->lastName = $_lastName);
	}
	/**
	 * Get lastName
	 * @return string
	 */
	public function getLastName()
	{
		return $this->lastName;
	}
	/**
	 * Set firstName
	 * @param string firstName
	 * @return string
	 */
	public function setFirstName($_firstName)
	{
		return ($this->firstName = $_firstName);
	}
	/**
	 * Get firstName
	 * @return string
	 */
	public function getFirstName()
	{
		return $this->firstName;
	}
	/**
	 * Set email
	 * @param string email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set shippingAdress
	 * @param address shippingAdress
	 * @return address
	 */
	public function setShippingAdress($_shippingAdress)
	{
		return ($this->shippingAdress = $_shippingAdress);
	}
	/**
	 * Get shippingAdress
	 * @return PaylineWebPaymentTypeaddress
	 */
	public function getShippingAdress()
	{
		return $this->shippingAdress;
	}
	/**
	 * Set accountCreateDate
	 * @param string accountCreateDate
	 * @return string
	 */
	public function setAccountCreateDate($_accountCreateDate)
	{
		return ($this->accountCreateDate = $_accountCreateDate);
	}
	/**
	 * Get accountCreateDate
	 * @return string
	 */
	public function getAccountCreateDate()
	{
		return $this->accountCreateDate;
	}
	/**
	 * Set accountAverageAmount
	 * @param string accountAverageAmount
	 * @return string
	 */
	public function setAccountAverageAmount($_accountAverageAmount)
	{
		return ($this->accountAverageAmount = $_accountAverageAmount);
	}
	/**
	 * Get accountAverageAmount
	 * @return string
	 */
	public function getAccountAverageAmount()
	{
		return $this->accountAverageAmount;
	}
	/**
	 * Set accountOrderCount
	 * @param string accountOrderCount
	 * @return string
	 */
	public function setAccountOrderCount($_accountOrderCount)
	{
		return ($this->accountOrderCount = $_accountOrderCount);
	}
	/**
	 * Get accountOrderCount
	 * @return string
	 */
	public function getAccountOrderCount()
	{
		return $this->accountOrderCount;
	}
	/**
	 * Set walletId
	 * @param string walletId
	 * @return string
	 */
	public function setWalletId($_walletId)
	{
		return ($this->walletId = $_walletId);
	}
	/**
	 * Get walletId
	 * @return string
	 */
	public function getWalletId()
	{
		return $this->walletId;
	}
	/**
	 * Set ip
	 * @param string ip
	 * @return string
	 */
	public function setIp($_ip)
	{
		return ($this->ip = $_ip);
	}
	/**
	 * Get ip
	 * @return string
	 */
	public function getIp()
	{
		return $this->ip;
	}
	/**
	 * Set mobilePhone
	 * @param string mobilePhone
	 * @return string
	 */
	public function setMobilePhone($_mobilePhone)
	{
		return ($this->mobilePhone = $_mobilePhone);
	}
	/**
	 * Get mobilePhone
	 * @return string
	 */
	public function getMobilePhone()
	{
		return $this->mobilePhone;
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