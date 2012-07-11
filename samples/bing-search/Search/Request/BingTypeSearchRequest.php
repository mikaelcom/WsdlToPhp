<?php
/**
 * Class file for BingTypeSearchRequest
 * @date 02/07/2012
 */
/**
 * Class BingTypeSearchRequest
 * @date 02/07/2012
 */
class BingTypeSearchRequest extends BingWsdlClass
{
	/**
	 * The Version
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- default : 2.2
	 * @var string
	 */
	public $Version;
	/**
	 * The Market
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Market;
	/**
	 * The UILanguage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UILanguage;
	/**
	 * The Query
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Query;
	/**
	 * The AppId
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AppId;
	/**
	 * The Adult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeAdultOption
	 */
	public $Adult;
	/**
	 * The Latitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Latitude;
	/**
	 * The Longitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Longitude;
	/**
	 * The Radius
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Radius;
	/**
	 * The Options
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeArrayOfSearchOption
	 */
	public $Options;
	/**
	 * The Sources
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var BingTypeArrayOfSourceType
	 */
	public $Sources;
	/**
	 * The Web
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeWebRequest
	 */
	public $Web;
	/**
	 * The Image
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeImageRequest
	 */
	public $Image;
	/**
	 * The Phonebook
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypePhonebookRequest
	 */
	public $Phonebook;
	/**
	 * The Video
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeVideoRequest
	 */
	public $Video;
	/**
	 * The News
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeNewsRequest
	 */
	public $News;
	/**
	 * The MobileWeb
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeMobileWebRequest
	 */
	public $MobileWeb;
	/**
	 * The Translation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeTranslationRequest
	 */
	public $Translation;
	/**
	 * Constructor
	 * @param string Version
	 * @param string Market
	 * @param string UILanguage
	 * @param string Query
	 * @param string AppId
	 * @param BingTypeAdultOption Adult
	 * @param double Latitude
	 * @param double Longitude
	 * @param double Radius
	 * @param BingTypeArrayOfSearchOption Options
	 * @param BingTypeArrayOfSourceType Sources
	 * @param BingTypeWebRequest Web
	 * @param BingTypeImageRequest Image
	 * @param BingTypePhonebookRequest Phonebook
	 * @param BingTypeVideoRequest Video
	 * @param BingTypeNewsRequest News
	 * @param BingTypeMobileWebRequest MobileWeb
	 * @param BingTypeTranslationRequest Translation
	 * @return BingTypeSearchRequest
	 */
	public function __construct($_Version = 2.2,$_Market = null,$_UILanguage = null,$_Query,$_AppId,$_Adult = null,$_Latitude = null,$_Longitude = null,$_Radius = null,$_Options = null,$_Sources,$_Web = null,$_Image = null,$_Phonebook = null,$_Video = null,$_News = null,$_MobileWeb = null,$_Translation = null)
	{
		parent::__construct(array('Version'=>$_Version,'Market'=>$_Market,'UILanguage'=>$_UILanguage,'Query'=>$_Query,'AppId'=>$_AppId,'Adult'=>$_Adult,'Latitude'=>$_Latitude,'Longitude'=>$_Longitude,'Radius'=>$_Radius,'Options'=>new BingTypeArrayOfSearchOption($_Options),'Sources'=>new BingTypeArrayOfSourceType($_Sources),'Web'=>$_Web,'Image'=>$_Image,'Phonebook'=>$_Phonebook,'Video'=>$_Video,'News'=>$_News,'MobileWeb'=>$_MobileWeb,'Translation'=>$_Translation));
	}
	/**
	 * Set Version
	 * @param string Version
	 * @return string
	 */
	public function setVersion($_Version)
	{
		return ($this->Version = $_Version);
	}
	/**
	 * Get Version
	 * @return string
	 */
	public function getVersion()
	{
		return $this->Version;
	}
	/**
	 * Set Market
	 * @param string Market
	 * @return string
	 */
	public function setMarket($_Market)
	{
		return ($this->Market = $_Market);
	}
	/**
	 * Get Market
	 * @return string
	 */
	public function getMarket()
	{
		return $this->Market;
	}
	/**
	 * Set UILanguage
	 * @param string UILanguage
	 * @return string
	 */
	public function setUILanguage($_UILanguage)
	{
		return ($this->UILanguage = $_UILanguage);
	}
	/**
	 * Get UILanguage
	 * @return string
	 */
	public function getUILanguage()
	{
		return $this->UILanguage;
	}
	/**
	 * Set Query
	 * @param string Query
	 * @return string
	 */
	public function setQuery($_Query)
	{
		return ($this->Query = $_Query);
	}
	/**
	 * Get Query
	 * @return string
	 */
	public function getQuery()
	{
		return $this->Query;
	}
	/**
	 * Set AppId
	 * @param string AppId
	 * @return string
	 */
	public function setAppId($_AppId)
	{
		return ($this->AppId = $_AppId);
	}
	/**
	 * Get AppId
	 * @return string
	 */
	public function getAppId()
	{
		return $this->AppId;
	}
	/**
	 * Set Adult
	 * @param AdultOption Adult
	 * @return AdultOption
	 */
	public function setAdult($_Adult)
	{
		return ($this->Adult = BingTypeAdultOption::valueIsValid($_Adult)?$_Adult:null);
	}
	/**
	 * Get Adult
	 * @return BingTypeAdultOption
	 */
	public function getAdult()
	{
		return $this->Adult;
	}
	/**
	 * Set Latitude
	 * @param double Latitude
	 * @return double
	 */
	public function setLatitude($_Latitude)
	{
		return ($this->Latitude = $_Latitude);
	}
	/**
	 * Get Latitude
	 * @return double
	 */
	public function getLatitude()
	{
		return $this->Latitude;
	}
	/**
	 * Set Longitude
	 * @param double Longitude
	 * @return double
	 */
	public function setLongitude($_Longitude)
	{
		return ($this->Longitude = $_Longitude);
	}
	/**
	 * Get Longitude
	 * @return double
	 */
	public function getLongitude()
	{
		return $this->Longitude;
	}
	/**
	 * Set Radius
	 * @param double Radius
	 * @return double
	 */
	public function setRadius($_Radius)
	{
		return ($this->Radius = $_Radius);
	}
	/**
	 * Get Radius
	 * @return double
	 */
	public function getRadius()
	{
		return $this->Radius;
	}
	/**
	 * Set Options
	 * @param ArrayOfSearchOption Options
	 * @return ArrayOfSearchOption
	 */
	public function setOptions($_Options)
	{
		return ($this->Options = $_Options);
	}
	/**
	 * Get Options
	 * @return BingTypeArrayOfSearchOption
	 */
	public function getOptions()
	{
		return $this->Options;
	}
	/**
	 * Set Sources
	 * @param ArrayOfSourceType Sources
	 * @return ArrayOfSourceType
	 */
	public function setSources($_Sources)
	{
		return ($this->Sources = $_Sources);
	}
	/**
	 * Get Sources
	 * @return BingTypeArrayOfSourceType
	 */
	public function getSources()
	{
		return $this->Sources;
	}
	/**
	 * Set Web
	 * @param WebRequest Web
	 * @return WebRequest
	 */
	public function setWeb($_Web)
	{
		return ($this->Web = $_Web);
	}
	/**
	 * Get Web
	 * @return BingTypeWebRequest
	 */
	public function getWeb()
	{
		return $this->Web;
	}
	/**
	 * Set Image
	 * @param ImageRequest Image
	 * @return ImageRequest
	 */
	public function setImage($_Image)
	{
		return ($this->Image = $_Image);
	}
	/**
	 * Get Image
	 * @return BingTypeImageRequest
	 */
	public function getImage()
	{
		return $this->Image;
	}
	/**
	 * Set Phonebook
	 * @param PhonebookRequest Phonebook
	 * @return PhonebookRequest
	 */
	public function setPhonebook($_Phonebook)
	{
		return ($this->Phonebook = $_Phonebook);
	}
	/**
	 * Get Phonebook
	 * @return BingTypePhonebookRequest
	 */
	public function getPhonebook()
	{
		return $this->Phonebook;
	}
	/**
	 * Set Video
	 * @param VideoRequest Video
	 * @return VideoRequest
	 */
	public function setVideo($_Video)
	{
		return ($this->Video = $_Video);
	}
	/**
	 * Get Video
	 * @return BingTypeVideoRequest
	 */
	public function getVideo()
	{
		return $this->Video;
	}
	/**
	 * Set News
	 * @param NewsRequest News
	 * @return NewsRequest
	 */
	public function setNews($_News)
	{
		return ($this->News = $_News);
	}
	/**
	 * Get News
	 * @return BingTypeNewsRequest
	 */
	public function getNews()
	{
		return $this->News;
	}
	/**
	 * Set MobileWeb
	 * @param MobileWebRequest MobileWeb
	 * @return MobileWebRequest
	 */
	public function setMobileWeb($_MobileWeb)
	{
		return ($this->MobileWeb = $_MobileWeb);
	}
	/**
	 * Get MobileWeb
	 * @return BingTypeMobileWebRequest
	 */
	public function getMobileWeb()
	{
		return $this->MobileWeb;
	}
	/**
	 * Set Translation
	 * @param TranslationRequest Translation
	 * @return TranslationRequest
	 */
	public function setTranslation($_Translation)
	{
		return ($this->Translation = $_Translation);
	}
	/**
	 * Get Translation
	 * @return BingTypeTranslationRequest
	 */
	public function getTranslation()
	{
		return $this->Translation;
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