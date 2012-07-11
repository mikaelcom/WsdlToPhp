<?php
/**
 * Class file for OvhTypeNicCreateIT
 * @date 02/07/2012
 */
/**
 * Class OvhTypeNicCreateIT
 * @date 02/07/2012
 */
class OvhTypeNicCreateIT extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
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
	 * The sex
	 * @var string
	 */
	public $sex;
	/**
	 * The password
	 * @var string
	 */
	public $password;
	/**
	 * The email
	 * @var string
	 */
	public $email;
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
	 * The area
	 * @var string
	 */
	public $area;
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
	 * The language
	 * @var string
	 */
	public $language;
	/**
	 * The isOwner
	 * @var boolean
	 */
	public $isOwner;
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
	 * The legalName
	 * @var string
	 */
	public $legalName;
	/**
	 * The legalNumber
	 * @var string
	 */
	public $legalNumber;
	/**
	 * The vat
	 * @var string
	 */
	public $vat;
	/**
	 * The birthDay
	 * @var string
	 */
	public $birthDay;
	/**
	 * The birthCity
	 * @var string
	 */
	public $birthCity;
	/**
	 * The nationalIdentificationNumber
	 * @var string
	 */
	public $nationalIdentificationNumber;
	/**
	 * The companyNationalIdentificationNumber
	 * @var string
	 */
	public $companyNationalIdentificationNumber;
	/**
	 * The corporationType
	 * @var string
	 */
	public $corporationType;
	/**
	 * Constructor
	 * @param string session
	 * @param string name
	 * @param string firstname
	 * @param string sex
	 * @param string password
	 * @param string email
	 * @param string phone
	 * @param string fax
	 * @param string address
	 * @param string city
	 * @param string area
	 * @param string zip
	 * @param string country
	 * @param string language
	 * @param boolean isOwner
	 * @param string legalform
	 * @param string organisation
	 * @param string legalName
	 * @param string legalNumber
	 * @param string vat
	 * @param string birthDay
	 * @param string birthCity
	 * @param string nationalIdentificationNumber
	 * @param string companyNationalIdentificationNumber
	 * @param string corporationType
	 * @return OvhTypeNicCreateIT
	 */
	public function __construct($_session = null,$_name = null,$_firstname = null,$_sex = null,$_password = null,$_email = null,$_phone = null,$_fax = null,$_address = null,$_city = null,$_area = null,$_zip = null,$_country = null,$_language = null,$_isOwner = null,$_legalform = null,$_organisation = null,$_legalName = null,$_legalNumber = null,$_vat = null,$_birthDay = null,$_birthCity = null,$_nationalIdentificationNumber = null,$_companyNationalIdentificationNumber = null,$_corporationType = null)
	{
		parent::__construct(array('session'=>$_session,'name'=>$_name,'firstname'=>$_firstname,'sex'=>$_sex,'password'=>$_password,'email'=>$_email,'phone'=>$_phone,'fax'=>$_fax,'address'=>$_address,'city'=>$_city,'area'=>$_area,'zip'=>$_zip,'country'=>$_country,'language'=>$_language,'isOwner'=>$_isOwner,'legalform'=>$_legalform,'organisation'=>$_organisation,'legalName'=>$_legalName,'legalNumber'=>$_legalNumber,'vat'=>$_vat,'birthDay'=>$_birthDay,'birthCity'=>$_birthCity,'nationalIdentificationNumber'=>$_nationalIdentificationNumber,'companyNationalIdentificationNumber'=>$_companyNationalIdentificationNumber,'corporationType'=>$_corporationType));
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
	 * Set sex
	 * @param string sex
	 * @return string
	 */
	public function setSex($_sex)
	{
		return ($this->sex = $_sex);
	}
	/**
	 * Get sex
	 * @return string
	 */
	public function getSex()
	{
		return $this->sex;
	}
	/**
	 * Set password
	 * @param string password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
	}
	/**
	 * Get password
	 * @return string
	 */
	public function getPassword()
	{
		return $this->password;
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
	 * Set language
	 * @param string language
	 * @return string
	 */
	public function setLanguage($_language)
	{
		return ($this->language = $_language);
	}
	/**
	 * Get language
	 * @return string
	 */
	public function getLanguage()
	{
		return $this->language;
	}
	/**
	 * Set isOwner
	 * @param boolean isOwner
	 * @return boolean
	 */
	public function setIsOwner($_isOwner)
	{
		return ($this->isOwner = $_isOwner);
	}
	/**
	 * Get isOwner
	 * @return boolean
	 */
	public function getIsOwner()
	{
		return $this->isOwner;
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
	 * Set legalName
	 * @param string legalName
	 * @return string
	 */
	public function setLegalName($_legalName)
	{
		return ($this->legalName = $_legalName);
	}
	/**
	 * Get legalName
	 * @return string
	 */
	public function getLegalName()
	{
		return $this->legalName;
	}
	/**
	 * Set legalNumber
	 * @param string legalNumber
	 * @return string
	 */
	public function setLegalNumber($_legalNumber)
	{
		return ($this->legalNumber = $_legalNumber);
	}
	/**
	 * Get legalNumber
	 * @return string
	 */
	public function getLegalNumber()
	{
		return $this->legalNumber;
	}
	/**
	 * Set vat
	 * @param string vat
	 * @return string
	 */
	public function setVat($_vat)
	{
		return ($this->vat = $_vat);
	}
	/**
	 * Get vat
	 * @return string
	 */
	public function getVat()
	{
		return $this->vat;
	}
	/**
	 * Set birthDay
	 * @param string birthDay
	 * @return string
	 */
	public function setBirthDay($_birthDay)
	{
		return ($this->birthDay = $_birthDay);
	}
	/**
	 * Get birthDay
	 * @return string
	 */
	public function getBirthDay()
	{
		return $this->birthDay;
	}
	/**
	 * Set birthCity
	 * @param string birthCity
	 * @return string
	 */
	public function setBirthCity($_birthCity)
	{
		return ($this->birthCity = $_birthCity);
	}
	/**
	 * Get birthCity
	 * @return string
	 */
	public function getBirthCity()
	{
		return $this->birthCity;
	}
	/**
	 * Set nationalIdentificationNumber
	 * @param string nationalIdentificationNumber
	 * @return string
	 */
	public function setNationalIdentificationNumber($_nationalIdentificationNumber)
	{
		return ($this->nationalIdentificationNumber = $_nationalIdentificationNumber);
	}
	/**
	 * Get nationalIdentificationNumber
	 * @return string
	 */
	public function getNationalIdentificationNumber()
	{
		return $this->nationalIdentificationNumber;
	}
	/**
	 * Set companyNationalIdentificationNumber
	 * @param string companyNationalIdentificationNumber
	 * @return string
	 */
	public function setCompanyNationalIdentificationNumber($_companyNationalIdentificationNumber)
	{
		return ($this->companyNationalIdentificationNumber = $_companyNationalIdentificationNumber);
	}
	/**
	 * Get companyNationalIdentificationNumber
	 * @return string
	 */
	public function getCompanyNationalIdentificationNumber()
	{
		return $this->companyNationalIdentificationNumber;
	}
	/**
	 * Set corporationType
	 * @param string corporationType
	 * @return string
	 */
	public function setCorporationType($_corporationType)
	{
		return ($this->corporationType = $_corporationType);
	}
	/**
	 * Get corporationType
	 * @return string
	 */
	public function getCorporationType()
	{
		return $this->corporationType;
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