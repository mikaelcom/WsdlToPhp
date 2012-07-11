<?php
/**
 * Class file for OvhTypeTelephonyNumberOrder
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyNumberOrder
 * @date 02/07/2012
 */
class OvhTypeTelephonyNumberOrder extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The billingAccount
	 * @var string
	 */
	public $billingAccount;
	/**
	 * The aliasNumber
	 * @var string
	 */
	public $aliasNumber;
	/**
	 * The prefix
	 * @var string
	 */
	public $prefix;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The firstname
	 * @var string
	 */
	public $firstname;
	/**
	 * The streetName
	 * @var string
	 */
	public $streetName;
	/**
	 * The streetNumber
	 * @var string
	 */
	public $streetNumber;
	/**
	 * The address
	 * @var string
	 */
	public $address;
	/**
	 * The zip
	 * @var string
	 */
	public $zip;
	/**
	 * The city
	 * @var string
	 */
	public $city;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The numberToReserve
	 * @var string
	 */
	public $numberToReserve;
	/**
	 * The procedureId
	 * @var int
	 */
	public $procedureId;
	/**
	 * Constructor
	 * @param string session
	 * @param string billingAccount
	 * @param string aliasNumber
	 * @param string prefix
	 * @param string country
	 * @param string name
	 * @param string firstname
	 * @param string streetName
	 * @param string streetNumber
	 * @param string address
	 * @param string zip
	 * @param string city
	 * @param string email
	 * @param string numberToReserve
	 * @param int procedureId
	 * @return OvhTypeTelephonyNumberOrder
	 */
	public function __construct($_session = null,$_billingAccount = null,$_aliasNumber = null,$_prefix = null,$_country = null,$_name = null,$_firstname = null,$_streetName = null,$_streetNumber = null,$_address = null,$_zip = null,$_city = null,$_email = null,$_numberToReserve = null,$_procedureId = null)
	{
		parent::__construct(array('session'=>$_session,'billingAccount'=>$_billingAccount,'aliasNumber'=>$_aliasNumber,'prefix'=>$_prefix,'country'=>$_country,'name'=>$_name,'firstname'=>$_firstname,'streetName'=>$_streetName,'streetNumber'=>$_streetNumber,'address'=>$_address,'zip'=>$_zip,'city'=>$_city,'email'=>$_email,'numberToReserve'=>$_numberToReserve,'procedureId'=>$_procedureId));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set billingAccount
	 * @param string billingAccount
	 * @return string
	 */
	public function setBillingAccount($_billingAccount)
	{
		return ($this->billingAccount = $_billingAccount);
	}
	/**
	 * Get billingAccount
	 * @return string
	 */
	public function getBillingAccount()
	{
		return $this->billingAccount;
	}
	/**
	 * Set aliasNumber
	 * @param string aliasNumber
	 * @return string
	 */
	public function setAliasNumber($_aliasNumber)
	{
		return ($this->aliasNumber = $_aliasNumber);
	}
	/**
	 * Get aliasNumber
	 * @return string
	 */
	public function getAliasNumber()
	{
		return $this->aliasNumber;
	}
	/**
	 * Set prefix
	 * @param string prefix
	 * @return string
	 */
	public function setPrefix($_prefix)
	{
		return ($this->prefix = $_prefix);
	}
	/**
	 * Get prefix
	 * @return string
	 */
	public function getPrefix()
	{
		return $this->prefix;
	}
	/**
	 * Set country
	 * @param string country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set firstname
	 * @param string firstname
	 * @return string
	 */
	public function setFirstname($_firstname)
	{
		return ($this->firstname = $_firstname);
	}
	/**
	 * Get firstname
	 * @return string
	 */
	public function getFirstname()
	{
		return $this->firstname;
	}
	/**
	 * Set streetName
	 * @param string streetName
	 * @return string
	 */
	public function setStreetName($_streetName)
	{
		return ($this->streetName = $_streetName);
	}
	/**
	 * Get streetName
	 * @return string
	 */
	public function getStreetName()
	{
		return $this->streetName;
	}
	/**
	 * Set streetNumber
	 * @param string streetNumber
	 * @return string
	 */
	public function setStreetNumber($_streetNumber)
	{
		return ($this->streetNumber = $_streetNumber);
	}
	/**
	 * Get streetNumber
	 * @return string
	 */
	public function getStreetNumber()
	{
		return $this->streetNumber;
	}
	/**
	 * Set address
	 * @param string address
	 * @return string
	 */
	public function setAddress($_address)
	{
		return ($this->address = $_address);
	}
	/**
	 * Get address
	 * @return string
	 */
	public function getAddress()
	{
		return $this->address;
	}
	/**
	 * Set zip
	 * @param string zip
	 * @return string
	 */
	public function setZip($_zip)
	{
		return ($this->zip = $_zip);
	}
	/**
	 * Get zip
	 * @return string
	 */
	public function getZip()
	{
		return $this->zip;
	}
	/**
	 * Set city
	 * @param string city
	 * @return string
	 */
	public function setCity($_city)
	{
		return ($this->city = $_city);
	}
	/**
	 * Get city
	 * @return string
	 */
	public function getCity()
	{
		return $this->city;
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
	 * Set numberToReserve
	 * @param string numberToReserve
	 * @return string
	 */
	public function setNumberToReserve($_numberToReserve)
	{
		return ($this->numberToReserve = $_numberToReserve);
	}
	/**
	 * Get numberToReserve
	 * @return string
	 */
	public function getNumberToReserve()
	{
		return $this->numberToReserve;
	}
	/**
	 * Set procedureId
	 * @param int procedureId
	 * @return int
	 */
	public function setProcedureId($_procedureId)
	{
		return ($this->procedureId = $_procedureId);
	}
	/**
	 * Get procedureId
	 * @return int
	 */
	public function getProcedureId()
	{
		return $this->procedureId;
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