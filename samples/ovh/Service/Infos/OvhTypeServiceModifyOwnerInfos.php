<?php
/**
 * Class file for OvhTypeServiceModifyOwnerInfos
 * @date 02/07/2012
 */
/**
 * Class OvhTypeServiceModifyOwnerInfos
 * @date 02/07/2012
 */
class OvhTypeServiceModifyOwnerInfos extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The owner
	 * @var string
	 */
	public $owner;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The component
	 * @var string
	 */
	public $component;
	/**
	 * The address
	 * @var string
	 */
	public $address;
	/**
	 * The city
	 * @var string
	 */
	public $city;
	/**
	 * The zip
	 * @var string
	 */
	public $zip;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The phone
	 * @var string
	 */
	public $phone;
	/**
	 * The fax
	 * @var string
	 */
	public $fax;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * Constructor
	 * @param string session
	 * @param string owner
	 * @param string domain
	 * @param string component
	 * @param string address
	 * @param string city
	 * @param string zip
	 * @param string country
	 * @param string phone
	 * @param string fax
	 * @param string email
	 * @return OvhTypeServiceModifyOwnerInfos
	 */
	public function __construct($_session = null,$_owner = null,$_domain = null,$_component = null,$_address = null,$_city = null,$_zip = null,$_country = null,$_phone = null,$_fax = null,$_email = null)
	{
		parent::__construct(array('session'=>$_session,'owner'=>$_owner,'domain'=>$_domain,'component'=>$_component,'address'=>$_address,'city'=>$_city,'zip'=>$_zip,'country'=>$_country,'phone'=>$_phone,'fax'=>$_fax,'email'=>$_email));
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
	 * Set owner
	 * @param string owner
	 * @return string
	 */
	public function setOwner($_owner)
	{
		return ($this->owner = $_owner);
	}
	/**
	 * Get owner
	 * @return string
	 */
	public function getOwner()
	{
		return $this->owner;
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
	 * Set component
	 * @param string component
	 * @return string
	 */
	public function setComponent($_component)
	{
		return ($this->component = $_component);
	}
	/**
	 * Get component
	 * @return string
	 */
	public function getComponent()
	{
		return $this->component;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>