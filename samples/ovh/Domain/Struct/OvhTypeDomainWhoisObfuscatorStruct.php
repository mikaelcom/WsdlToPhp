<?php
/**
 * Class file for OvhTypeDomainWhoisObfuscatorStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDomainWhoisObfuscatorStruct
 * @date 02/07/2012
 */
class OvhTypeDomainWhoisObfuscatorStruct extends OvhWsdlClass
{
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The email
	 * @var boolean
	 */
	public $email;
	/**
	 * The address
	 * @var boolean
	 */
	public $address;
	/**
	 * The phone
	 * @var boolean
	 */
	public $phone;
	/**
	 * Constructor
	 * @param string domain
	 * @param boolean email
	 * @param boolean address
	 * @param boolean phone
	 * @return OvhTypeDomainWhoisObfuscatorStruct
	 */
	public function __construct($_domain = null,$_email = null,$_address = null,$_phone = null)
	{
		parent::__construct(array('domain'=>$_domain,'email'=>$_email,'address'=>$_address,'phone'=>$_phone));
	}
	/**
	 * Set domain
	 * @param string domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set email
	 * @param boolean email
	 * @return boolean
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get email
	 * @return boolean
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set address
	 * @param boolean address
	 * @return boolean
	 */
	public function setAddress($_address)
	{
		return ($this->address = $_address);
	}
	/**
	 * Get address
	 * @return boolean
	 */
	public function getAddress()
	{
		return $this->address;
	}
	/**
	 * Set phone
	 * @param boolean phone
	 * @return boolean
	 */
	public function setPhone($_phone)
	{
		return ($this->phone = $_phone);
	}
	/**
	 * Get phone
	 * @return boolean
	 */
	public function getPhone()
	{
		return $this->phone;
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