<?php
/**
 * Class file for PaylineWebPaymentTypeInterlocutor
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeInterlocutor
 * Documentation : This element contains information about Interlocutor
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeInterlocutor extends PaylineWebPaymentWsdlClass
{
	/**
	 * The firstName
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $firstName;
	/**
	 * The lastName
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $lastName;
	/**
	 * The email
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $email;
	/**
	 * The phone
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $phone;
	/**
	 * The mobile
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $mobile;
	/**
	 * The fax
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $fax;
	/**
	 * The addressInterlocutor
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeAddressInterlocutor
	 */
	public $addressInterlocutor;
	/**
	 * Constructor
	 * @param string firstName
	 * @param string lastName
	 * @param string email
	 * @param string phone
	 * @param string mobile
	 * @param string fax
	 * @param PaylineWebPaymentTypeAddressInterlocutor addressInterlocutor
	 * @return PaylineWebPaymentTypeInterlocutor
	 */
	public function __construct($_firstName = null,$_lastName = null,$_email = null,$_phone = null,$_mobile = null,$_fax = null,$_addressInterlocutor = null)
	{
		parent::__construct(array('firstName'=>$_firstName,'lastName'=>$_lastName,'email'=>$_email,'phone'=>$_phone,'mobile'=>$_mobile,'fax'=>$_fax,'addressInterlocutor'=>$_addressInterlocutor));
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
	 * Set phone
	 * @param string phone
	 * @return string
	 */
	public function setPhone($_phone)
	{
		return ($this->phone = $_phone);
	}
	/**
	 * Get phone
	 * @return string
	 */
	public function getPhone()
	{
		return $this->phone;
	}
	/**
	 * Set mobile
	 * @param string mobile
	 * @return string
	 */
	public function setMobile($_mobile)
	{
		return ($this->mobile = $_mobile);
	}
	/**
	 * Get mobile
	 * @return string
	 */
	public function getMobile()
	{
		return $this->mobile;
	}
	/**
	 * Set fax
	 * @param string fax
	 * @return string
	 */
	public function setFax($_fax)
	{
		return ($this->fax = $_fax);
	}
	/**
	 * Get fax
	 * @return string
	 */
	public function getFax()
	{
		return $this->fax;
	}
	/**
	 * Set addressInterlocutor
	 * @param addressInterlocutor addressInterlocutor
	 * @return addressInterlocutor
	 */
	public function setAddressInterlocutor($_addressInterlocutor)
	{
		return ($this->addressInterlocutor = $_addressInterlocutor);
	}
	/**
	 * Get addressInterlocutor
	 * @return PaylineWebPaymentTypeaddressInterlocutor
	 */
	public function getAddressInterlocutor()
	{
		return $this->addressInterlocutor;
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