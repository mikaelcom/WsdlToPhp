<?php
/**
 * Class file for OvhTypeTelephonyDirectoryModifyAddress
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyDirectoryModifyAddress
 * @date 02/07/2012
 */
class OvhTypeTelephonyDirectoryModifyAddress extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The callNumber
	 * @var string
	 */
	public $callNumber;
	/**
	 * The countryCode
	 * @var string
	 */
	public $countryCode;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The firstName
	 * @var string
	 */
	public $firstName;
	/**
	 * The wayNumber
	 * @var string
	 */
	public $wayNumber;
	/**
	 * The wayNumberExtra
	 * @var string
	 */
	public $wayNumberExtra;
	/**
	 * The wayType
	 * @var string
	 */
	public $wayType;
	/**
	 * The wayName
	 * @var string
	 */
	public $wayName;
	/**
	 * The addressExtra
	 * @var string
	 */
	public $addressExtra;
	/**
	 * The urbanDistrict
	 * @var string
	 */
	public $urbanDistrict;
	/**
	 * The postBox
	 * @var string
	 */
	public $postBox;
	/**
	 * The cedex
	 * @var string
	 */
	public $cedex;
	/**
	 * The postCode
	 * @var string
	 */
	public $postCode;
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
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The legalForm
	 * @var string
	 */
	public $legalForm;
	/**
	 * The socialNomination
	 * @var string
	 */
	public $socialNomination;
	/**
	 * The PJSocialNomination
	 * @var string
	 */
	public $PJSocialNomination;
	/**
	 * The socialNominationExtra
	 * @var string
	 */
	public $socialNominationExtra;
	/**
	 * The occupation
	 * @var string
	 */
	public $occupation;
	/**
	 * The siret
	 * @var string
	 */
	public $siret;
	/**
	 * The ape
	 * @var string
	 */
	public $ape;
	/**
	 * The PJCode
	 * @var string
	 */
	public $PJCode;
	/**
	 * Constructor
	 * @param string session
	 * @param string callNumber
	 * @param string countryCode
	 * @param string name
	 * @param string firstName
	 * @param string wayNumber
	 * @param string wayNumberExtra
	 * @param string wayType
	 * @param string wayName
	 * @param string addressExtra
	 * @param string urbanDistrict
	 * @param string postBox
	 * @param string cedex
	 * @param string postCode
	 * @param string city
	 * @param string country
	 * @param string email
	 * @param string legalForm
	 * @param string socialNomination
	 * @param string PJSocialNomination
	 * @param string socialNominationExtra
	 * @param string occupation
	 * @param string siret
	 * @param string ape
	 * @param string PJCode
	 * @return OvhTypeTelephonyDirectoryModifyAddress
	 */
	public function __construct($_session = null,$_callNumber = null,$_countryCode = null,$_name = null,$_firstName = null,$_wayNumber = null,$_wayNumberExtra = null,$_wayType = null,$_wayName = null,$_addressExtra = null,$_urbanDistrict = null,$_postBox = null,$_cedex = null,$_postCode = null,$_city = null,$_country = null,$_email = null,$_legalForm = null,$_socialNomination = null,$_PJSocialNomination = null,$_socialNominationExtra = null,$_occupation = null,$_siret = null,$_ape = null,$_PJCode = null)
	{
		parent::__construct(array('session'=>$_session,'callNumber'=>$_callNumber,'countryCode'=>$_countryCode,'name'=>$_name,'firstName'=>$_firstName,'wayNumber'=>$_wayNumber,'wayNumberExtra'=>$_wayNumberExtra,'wayType'=>$_wayType,'wayName'=>$_wayName,'addressExtra'=>$_addressExtra,'urbanDistrict'=>$_urbanDistrict,'postBox'=>$_postBox,'cedex'=>$_cedex,'postCode'=>$_postCode,'city'=>$_city,'country'=>$_country,'email'=>$_email,'legalForm'=>$_legalForm,'socialNomination'=>$_socialNomination,'PJSocialNomination'=>$_PJSocialNomination,'socialNominationExtra'=>$_socialNominationExtra,'occupation'=>$_occupation,'siret'=>$_siret,'ape'=>$_ape,'PJCode'=>$_PJCode));
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
	 * Set callNumber
	 * @param string callNumber
	 * @return string
	 */
	public function setCallNumber($_callNumber)
	{
		return ($this->callNumber = $_callNumber);
	}
	/**
	 * Get callNumber
	 * @return string
	 */
	public function getCallNumber()
	{
		return $this->callNumber;
	}
	/**
	 * Set countryCode
	 * @param string countryCode
	 * @return string
	 */
	public function setCountryCode($_countryCode)
	{
		return ($this->countryCode = $_countryCode);
	}
	/**
	 * Get countryCode
	 * @return string
	 */
	public function getCountryCode()
	{
		return $this->countryCode;
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
	 * Set wayNumber
	 * @param string wayNumber
	 * @return string
	 */
	public function setWayNumber($_wayNumber)
	{
		return ($this->wayNumber = $_wayNumber);
	}
	/**
	 * Get wayNumber
	 * @return string
	 */
	public function getWayNumber()
	{
		return $this->wayNumber;
	}
	/**
	 * Set wayNumberExtra
	 * @param string wayNumberExtra
	 * @return string
	 */
	public function setWayNumberExtra($_wayNumberExtra)
	{
		return ($this->wayNumberExtra = $_wayNumberExtra);
	}
	/**
	 * Get wayNumberExtra
	 * @return string
	 */
	public function getWayNumberExtra()
	{
		return $this->wayNumberExtra;
	}
	/**
	 * Set wayType
	 * @param string wayType
	 * @return string
	 */
	public function setWayType($_wayType)
	{
		return ($this->wayType = $_wayType);
	}
	/**
	 * Get wayType
	 * @return string
	 */
	public function getWayType()
	{
		return $this->wayType;
	}
	/**
	 * Set wayName
	 * @param string wayName
	 * @return string
	 */
	public function setWayName($_wayName)
	{
		return ($this->wayName = $_wayName);
	}
	/**
	 * Get wayName
	 * @return string
	 */
	public function getWayName()
	{
		return $this->wayName;
	}
	/**
	 * Set addressExtra
	 * @param string addressExtra
	 * @return string
	 */
	public function setAddressExtra($_addressExtra)
	{
		return ($this->addressExtra = $_addressExtra);
	}
	/**
	 * Get addressExtra
	 * @return string
	 */
	public function getAddressExtra()
	{
		return $this->addressExtra;
	}
	/**
	 * Set urbanDistrict
	 * @param string urbanDistrict
	 * @return string
	 */
	public function setUrbanDistrict($_urbanDistrict)
	{
		return ($this->urbanDistrict = $_urbanDistrict);
	}
	/**
	 * Get urbanDistrict
	 * @return string
	 */
	public function getUrbanDistrict()
	{
		return $this->urbanDistrict;
	}
	/**
	 * Set postBox
	 * @param string postBox
	 * @return string
	 */
	public function setPostBox($_postBox)
	{
		return ($this->postBox = $_postBox);
	}
	/**
	 * Get postBox
	 * @return string
	 */
	public function getPostBox()
	{
		return $this->postBox;
	}
	/**
	 * Set cedex
	 * @param string cedex
	 * @return string
	 */
	public function setCedex($_cedex)
	{
		return ($this->cedex = $_cedex);
	}
	/**
	 * Get cedex
	 * @return string
	 */
	public function getCedex()
	{
		return $this->cedex;
	}
	/**
	 * Set postCode
	 * @param string postCode
	 * @return string
	 */
	public function setPostCode($_postCode)
	{
		return ($this->postCode = $_postCode);
	}
	/**
	 * Get postCode
	 * @return string
	 */
	public function getPostCode()
	{
		return $this->postCode;
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
	 * Set legalForm
	 * @param string legalForm
	 * @return string
	 */
	public function setLegalForm($_legalForm)
	{
		return ($this->legalForm = $_legalForm);
	}
	/**
	 * Get legalForm
	 * @return string
	 */
	public function getLegalForm()
	{
		return $this->legalForm;
	}
	/**
	 * Set socialNomination
	 * @param string socialNomination
	 * @return string
	 */
	public function setSocialNomination($_socialNomination)
	{
		return ($this->socialNomination = $_socialNomination);
	}
	/**
	 * Get socialNomination
	 * @return string
	 */
	public function getSocialNomination()
	{
		return $this->socialNomination;
	}
	/**
	 * Set PJSocialNomination
	 * @param string PJSocialNomination
	 * @return string
	 */
	public function setPJSocialNomination($_PJSocialNomination)
	{
		return ($this->PJSocialNomination = $_PJSocialNomination);
	}
	/**
	 * Get PJSocialNomination
	 * @return string
	 */
	public function getPJSocialNomination()
	{
		return $this->PJSocialNomination;
	}
	/**
	 * Set socialNominationExtra
	 * @param string socialNominationExtra
	 * @return string
	 */
	public function setSocialNominationExtra($_socialNominationExtra)
	{
		return ($this->socialNominationExtra = $_socialNominationExtra);
	}
	/**
	 * Get socialNominationExtra
	 * @return string
	 */
	public function getSocialNominationExtra()
	{
		return $this->socialNominationExtra;
	}
	/**
	 * Set occupation
	 * @param string occupation
	 * @return string
	 */
	public function setOccupation($_occupation)
	{
		return ($this->occupation = $_occupation);
	}
	/**
	 * Get occupation
	 * @return string
	 */
	public function getOccupation()
	{
		return $this->occupation;
	}
	/**
	 * Set siret
	 * @param string siret
	 * @return string
	 */
	public function setSiret($_siret)
	{
		return ($this->siret = $_siret);
	}
	/**
	 * Get siret
	 * @return string
	 */
	public function getSiret()
	{
		return $this->siret;
	}
	/**
	 * Set ape
	 * @param string ape
	 * @return string
	 */
	public function setApe($_ape)
	{
		return ($this->ape = $_ape);
	}
	/**
	 * Get ape
	 * @return string
	 */
	public function getApe()
	{
		return $this->ape;
	}
	/**
	 * Set PJCode
	 * @param string PJCode
	 * @return string
	 */
	public function setPJCode($_PJCode)
	{
		return ($this->PJCode = $_PJCode);
	}
	/**
	 * Get PJCode
	 * @return string
	 */
	public function getPJCode()
	{
		return $this->PJCode;
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