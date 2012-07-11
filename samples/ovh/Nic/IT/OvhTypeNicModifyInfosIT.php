<?php
/**
 * Class file for OvhTypeNicModifyInfosIT
 * @date 02/07/2012
 */
/**
 * Class OvhTypeNicModifyInfosIT
 * @date 02/07/2012
 */
class OvhTypeNicModifyInfosIT extends OvhWsdlClass
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
	 * The address
	 * @var string
	 */
	public $address;
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
	 * The city
	 * @var string
	 */
	public $city;
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
	 * The spareEmail
	 * @var string
	 */
	public $spareEmail;
	/**
	 * The language
	 * @var string
	 */
	public $language;
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
	 * @param string legalform
	 * @param string organisation
	 * @param string address
	 * @param string area
	 * @param string zip
	 * @param string city
	 * @param string country
	 * @param string phone
	 * @param string fax
	 * @param string email
	 * @param string spareEmail
	 * @param string language
	 * @param string vat
	 * @param string birthDay
	 * @param string birthCity
	 * @param string nationalIdentificationNumber
	 * @param string companyNationalIdentificationNumber
	 * @param string corporationType
	 * @return OvhTypeNicModifyInfosIT
	 */
	public function __construct($_session = null,$_name = null,$_firstname = null,$_sex = null,$_legalform = null,$_organisation = null,$_address = null,$_area = null,$_zip = null,$_city = null,$_country = null,$_phone = null,$_fax = null,$_email = null,$_spareEmail = null,$_language = null,$_vat = null,$_birthDay = null,$_birthCity = null,$_nationalIdentificationNumber = null,$_companyNationalIdentificationNumber = null,$_corporationType = null)
	{
		parent::__construct(array('session'=>$_session,'name'=>$_name,'firstname'=>$_firstname,'sex'=>$_sex,'legalform'=>$_legalform,'organisation'=>$_organisation,'address'=>$_address,'area'=>$_area,'zip'=>$_zip,'city'=>$_city,'country'=>$_country,'phone'=>$_phone,'fax'=>$_fax,'email'=>$_email,'spareEmail'=>$_spareEmail,'language'=>$_language,'vat'=>$_vat,'birthDay'=>$_birthDay,'birthCity'=>$_birthCity,'nationalIdentificationNumber'=>$_nationalIdentificationNumber,'companyNationalIdentificationNumber'=>$_companyNationalIdentificationNumber,'corporationType'=>$_corporationType));
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
	 * Set spareEmail
	 * @param string spareEmail
	 * @return string
	 */
	public function setSpareEmail($_spareEmail)
	{
		return ($this->spareEmail = $_spareEmail);
	}
	/**
	 * Get spareEmail
	 * @return string
	 */
	public function getSpareEmail()
	{
		return $this->spareEmail;
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