<?php
/**
 * Class file for OvhTypeTelephonyDirectoryInfoReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyDirectoryInfoReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonyDirectoryInfoReturn extends OvhWsdlClass
{
	/**
	 * The number
	 * @var string
	 */
	public $number;
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
	 * The wayType
	 * @var string
	 */
	public $wayType;
	/**
	 * The wayTypeDescription
	 * @var string
	 */
	public $wayTypeDescription;
	/**
	 * The wayNumberExtra
	 * @var string
	 */
	public $wayNumberExtra;
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
	 * The occupation
	 * @var string
	 */
	public $occupation;
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
	 * The lineDescription
	 * @var string
	 */
	public $lineDescription;
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
	 * The displayFirstName
	 * @var string
	 */
	public $displayFirstName;
	/**
	 * The displayOnlyCity
	 * @var string
	 */
	public $displayOnlyCity;
	/**
	 * The displayUniversalDirectory
	 * @var string
	 */
	public $displayUniversalDirectory;
	/**
	 * The displayMarketingDirectory
	 * @var string
	 */
	public $displayMarketingDirectory;
	/**
	 * The displaySearchReverse
	 * @var string
	 */
	public $displaySearchReverse;
	/**
	 * The receivePJDirectory
	 * @var string
	 */
	public $receivePJDirectory;
	/**
	 * The inseeCode
	 * @var int
	 */
	public $inseeCode;
	/**
	 * The codePJ
	 * @var string
	 */
	public $codePJ;
	/**
	 * The labelPJ
	 * @var string
	 */
	public $labelPJ;
	/**
	 * The modificationType
	 * @var string
	 */
	public $modificationType;
	/**
	 * The modificationDate
	 * @var string
	 */
	public $modificationDate;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The status_pagesjaunes
	 * @var string
	 */
	public $status_pagesjaunes;
	/**
	 * The status_118712
	 * @var string
	 */
	public $status_118712;
	/**
	 * Constructor
	 * @param string number
	 * @param string name
	 * @param string firstName
	 * @param string wayNumber
	 * @param string wayType
	 * @param string wayTypeDescription
	 * @param string wayNumberExtra
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
	 * @param string occupation
	 * @param string socialNomination
	 * @param string PJSocialNomination
	 * @param string socialNominationExtra
	 * @param string lineDescription
	 * @param string siret
	 * @param string ape
	 * @param string displayFirstName
	 * @param string displayOnlyCity
	 * @param string displayUniversalDirectory
	 * @param string displayMarketingDirectory
	 * @param string displaySearchReverse
	 * @param string receivePJDirectory
	 * @param int inseeCode
	 * @param string codePJ
	 * @param string labelPJ
	 * @param string modificationType
	 * @param string modificationDate
	 * @param string status
	 * @param string status_pagesjaunes
	 * @param string status_118712
	 * @return OvhTypeTelephonyDirectoryInfoReturn
	 */
	public function __construct($_number = null,$_name = null,$_firstName = null,$_wayNumber = null,$_wayType = null,$_wayTypeDescription = null,$_wayNumberExtra = null,$_wayName = null,$_addressExtra = null,$_urbanDistrict = null,$_postBox = null,$_cedex = null,$_postCode = null,$_city = null,$_country = null,$_email = null,$_legalForm = null,$_occupation = null,$_socialNomination = null,$_PJSocialNomination = null,$_socialNominationExtra = null,$_lineDescription = null,$_siret = null,$_ape = null,$_displayFirstName = null,$_displayOnlyCity = null,$_displayUniversalDirectory = null,$_displayMarketingDirectory = null,$_displaySearchReverse = null,$_receivePJDirectory = null,$_inseeCode = null,$_codePJ = null,$_labelPJ = null,$_modificationType = null,$_modificationDate = null,$_status = null,$_status_pagesjaunes = null,$_status_118712 = null)
	{
		parent::__construct(array('number'=>$_number,'name'=>$_name,'firstName'=>$_firstName,'wayNumber'=>$_wayNumber,'wayType'=>$_wayType,'wayTypeDescription'=>$_wayTypeDescription,'wayNumberExtra'=>$_wayNumberExtra,'wayName'=>$_wayName,'addressExtra'=>$_addressExtra,'urbanDistrict'=>$_urbanDistrict,'postBox'=>$_postBox,'cedex'=>$_cedex,'postCode'=>$_postCode,'city'=>$_city,'country'=>$_country,'email'=>$_email,'legalForm'=>$_legalForm,'occupation'=>$_occupation,'socialNomination'=>$_socialNomination,'PJSocialNomination'=>$_PJSocialNomination,'socialNominationExtra'=>$_socialNominationExtra,'lineDescription'=>$_lineDescription,'siret'=>$_siret,'ape'=>$_ape,'displayFirstName'=>$_displayFirstName,'displayOnlyCity'=>$_displayOnlyCity,'displayUniversalDirectory'=>$_displayUniversalDirectory,'displayMarketingDirectory'=>$_displayMarketingDirectory,'displaySearchReverse'=>$_displaySearchReverse,'receivePJDirectory'=>$_receivePJDirectory,'inseeCode'=>$_inseeCode,'codePJ'=>$_codePJ,'labelPJ'=>$_labelPJ,'modificationType'=>$_modificationType,'modificationDate'=>$_modificationDate,'status'=>$_status,'status_pagesjaunes'=>$_status_pagesjaunes,'status_118712'=>$_status_118712));
	}
	/**
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
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
	 * Set wayTypeDescription
	 * @param string wayTypeDescription
	 * @return string
	 */
	public function setWayTypeDescription($_wayTypeDescription)
	{
		return ($this->wayTypeDescription = $_wayTypeDescription);
	}
	/**
	 * Get wayTypeDescription
	 * @return string
	 */
	public function getWayTypeDescription()
	{
		return $this->wayTypeDescription;
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
	 * Set lineDescription
	 * @param string lineDescription
	 * @return string
	 */
	public function setLineDescription($_lineDescription)
	{
		return ($this->lineDescription = $_lineDescription);
	}
	/**
	 * Get lineDescription
	 * @return string
	 */
	public function getLineDescription()
	{
		return $this->lineDescription;
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
	 * Set displayFirstName
	 * @param string displayFirstName
	 * @return string
	 */
	public function setDisplayFirstName($_displayFirstName)
	{
		return ($this->displayFirstName = $_displayFirstName);
	}
	/**
	 * Get displayFirstName
	 * @return string
	 */
	public function getDisplayFirstName()
	{
		return $this->displayFirstName;
	}
	/**
	 * Set displayOnlyCity
	 * @param string displayOnlyCity
	 * @return string
	 */
	public function setDisplayOnlyCity($_displayOnlyCity)
	{
		return ($this->displayOnlyCity = $_displayOnlyCity);
	}
	/**
	 * Get displayOnlyCity
	 * @return string
	 */
	public function getDisplayOnlyCity()
	{
		return $this->displayOnlyCity;
	}
	/**
	 * Set displayUniversalDirectory
	 * @param string displayUniversalDirectory
	 * @return string
	 */
	public function setDisplayUniversalDirectory($_displayUniversalDirectory)
	{
		return ($this->displayUniversalDirectory = $_displayUniversalDirectory);
	}
	/**
	 * Get displayUniversalDirectory
	 * @return string
	 */
	public function getDisplayUniversalDirectory()
	{
		return $this->displayUniversalDirectory;
	}
	/**
	 * Set displayMarketingDirectory
	 * @param string displayMarketingDirectory
	 * @return string
	 */
	public function setDisplayMarketingDirectory($_displayMarketingDirectory)
	{
		return ($this->displayMarketingDirectory = $_displayMarketingDirectory);
	}
	/**
	 * Get displayMarketingDirectory
	 * @return string
	 */
	public function getDisplayMarketingDirectory()
	{
		return $this->displayMarketingDirectory;
	}
	/**
	 * Set displaySearchReverse
	 * @param string displaySearchReverse
	 * @return string
	 */
	public function setDisplaySearchReverse($_displaySearchReverse)
	{
		return ($this->displaySearchReverse = $_displaySearchReverse);
	}
	/**
	 * Get displaySearchReverse
	 * @return string
	 */
	public function getDisplaySearchReverse()
	{
		return $this->displaySearchReverse;
	}
	/**
	 * Set receivePJDirectory
	 * @param string receivePJDirectory
	 * @return string
	 */
	public function setReceivePJDirectory($_receivePJDirectory)
	{
		return ($this->receivePJDirectory = $_receivePJDirectory);
	}
	/**
	 * Get receivePJDirectory
	 * @return string
	 */
	public function getReceivePJDirectory()
	{
		return $this->receivePJDirectory;
	}
	/**
	 * Set inseeCode
	 * @param int inseeCode
	 * @return int
	 */
	public function setInseeCode($_inseeCode)
	{
		return ($this->inseeCode = $_inseeCode);
	}
	/**
	 * Get inseeCode
	 * @return int
	 */
	public function getInseeCode()
	{
		return $this->inseeCode;
	}
	/**
	 * Set codePJ
	 * @param string codePJ
	 * @return string
	 */
	public function setCodePJ($_codePJ)
	{
		return ($this->codePJ = $_codePJ);
	}
	/**
	 * Get codePJ
	 * @return string
	 */
	public function getCodePJ()
	{
		return $this->codePJ;
	}
	/**
	 * Set labelPJ
	 * @param string labelPJ
	 * @return string
	 */
	public function setLabelPJ($_labelPJ)
	{
		return ($this->labelPJ = $_labelPJ);
	}
	/**
	 * Get labelPJ
	 * @return string
	 */
	public function getLabelPJ()
	{
		return $this->labelPJ;
	}
	/**
	 * Set modificationType
	 * @param string modificationType
	 * @return string
	 */
	public function setModificationType($_modificationType)
	{
		return ($this->modificationType = $_modificationType);
	}
	/**
	 * Get modificationType
	 * @return string
	 */
	public function getModificationType()
	{
		return $this->modificationType;
	}
	/**
	 * Set modificationDate
	 * @param string modificationDate
	 * @return string
	 */
	public function setModificationDate($_modificationDate)
	{
		return ($this->modificationDate = $_modificationDate);
	}
	/**
	 * Get modificationDate
	 * @return string
	 */
	public function getModificationDate()
	{
		return $this->modificationDate;
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status_pagesjaunes
	 * @param string status_pagesjaunes
	 * @return string
	 */
	public function setStatus_pagesjaunes($_status_pagesjaunes)
	{
		return ($this->status_pagesjaunes = $_status_pagesjaunes);
	}
	/**
	 * Get status_pagesjaunes
	 * @return string
	 */
	public function getStatus_pagesjaunes()
	{
		return $this->status_pagesjaunes;
	}
	/**
	 * Set status_118712
	 * @param string status_118712
	 * @return string
	 */
	public function setStatus_118712($_status_118712)
	{
		return ($this->status_118712 = $_status_118712);
	}
	/**
	 * Get status_118712
	 * @return string
	 */
	public function getStatus_118712()
	{
		return $this->status_118712;
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