<?php
/**
 * Class file for OvhTypeServiceModifyOwner
 * @date 02/07/2012
 */
/**
 * Class OvhTypeServiceModifyOwner
 * @date 02/07/2012
 */
class OvhTypeServiceModifyOwner extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
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
	 * The legalform
	 * @var string
	 */
	public $legalform;
	/**
	 * The organisation
	 * @var string
	 */
	public $organisation;
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
	 * The area
	 * @var string
	 */
	public $area;
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
	 * The identityConfirmation
	 * @var boolean
	 */
	public $identityConfirmation;
	/**
	 * The acceptanceConfirmation
	 * @var boolean
	 */
	public $acceptanceConfirmation;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string component
	 * @param string legalform
	 * @param string organisation
	 * @param string name
	 * @param string firstname
	 * @param string address
	 * @param string city
	 * @param string zip
	 * @param string area
	 * @param string country
	 * @param string phone
	 * @param string fax
	 * @param string email
	 * @param boolean identityConfirmation
	 * @param boolean acceptanceConfirmation
	 * @return OvhTypeServiceModifyOwner
	 */
	public function __construct($_session = null,$_domain = null,$_component = null,$_legalform = null,$_organisation = null,$_name = null,$_firstname = null,$_address = null,$_city = null,$_zip = null,$_area = null,$_country = null,$_phone = null,$_fax = null,$_email = null,$_identityConfirmation = null,$_acceptanceConfirmation = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'component'=>$_component,'legalform'=>$_legalform,'organisation'=>$_organisation,'name'=>$_name,'firstname'=>$_firstname,'address'=>$_address,'city'=>$_city,'zip'=>$_zip,'area'=>$_area,'country'=>$_country,'phone'=>$_phone,'fax'=>$_fax,'email'=>$_email,'identityConfirmation'=>$_identityConfirmation,'acceptanceConfirmation'=>$_acceptanceConfirmation));
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
	 * Set legalform
	 * @param string legalform
	 * @return string
	 */
	public function setLegalform($_legalform)
	{
		return ($this->legalform = $_legalform);
	}
	/**
	 * Get legalform
	 * @return string
	 */
	public function getLegalform()
	{
		return $this->legalform;
	}
	/**
	 * Set organisation
	 * @param string organisation
	 * @return string
	 */
	public function setOrganisation($_organisation)
	{
		return ($this->organisation = $_organisation);
	}
	/**
	 * Get organisation
	 * @return string
	 */
	public function getOrganisation()
	{
		return $this->organisation;
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
	 * Set area
	 * @param string area
	 * @return string
	 */
	public function setArea($_area)
	{
		return ($this->area = $_area);
	}
	/**
	 * Get area
	 * @return string
	 */
	public function getArea()
	{
		return $this->area;
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
	 * Set identityConfirmation
	 * @param boolean identityConfirmation
	 * @return boolean
	 */
	public function setIdentityConfirmation($_identityConfirmation)
	{
		return ($this->identityConfirmation = $_identityConfirmation);
	}
	/**
	 * Get identityConfirmation
	 * @return boolean
	 */
	public function getIdentityConfirmation()
	{
		return $this->identityConfirmation;
	}
	/**
	 * Set acceptanceConfirmation
	 * @param boolean acceptanceConfirmation
	 * @return boolean
	 */
	public function setAcceptanceConfirmation($_acceptanceConfirmation)
	{
		return ($this->acceptanceConfirmation = $_acceptanceConfirmation);
	}
	/**
	 * Get acceptanceConfirmation
	 * @return boolean
	 */
	public function getAcceptanceConfirmation()
	{
		return $this->acceptanceConfirmation;
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