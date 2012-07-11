<?php
/**
 * Class file for BingTypeSearchResponse
 * @date 02/07/2012
 */
/**
 * Class BingTypeSearchResponse
 * @date 02/07/2012
 */
class BingTypeSearchResponse extends BingWsdlClass
{
	/**
	 * The Version
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Version;
	/**
	 * The Query
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeQuery
	 */
	public $Query;
	/**
	 * The Spell
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeSpellResponse
	 */
	public $Spell;
	/**
	 * The Web
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeWebResponse
	 */
	public $Web;
	/**
	 * The Image
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeImageResponse
	 */
	public $Image;
	/**
	 * The RelatedSearch
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeRelatedSearchResponse
	 */
	public $RelatedSearch;
	/**
	 * The Phonebook
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypePhonebookResponse
	 */
	public $Phonebook;
	/**
	 * The Video
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeVideoResponse
	 */
	public $Video;
	/**
	 * The InstantAnswer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeInstantAnswerResponse
	 */
	public $InstantAnswer;
	/**
	 * The News
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeNewsResponse
	 */
	public $News;
	/**
	 * The MobileWeb
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeMobileWebResponse
	 */
	public $MobileWeb;
	/**
	 * The Translation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeTranslationResponse
	 */
	public $Translation;
	/**
	 * The Errors
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeArrayOfError
	 */
	public $Errors;
	/**
	 * Constructor
	 * @param string Version
	 * @param BingTypeQuery Query
	 * @param BingTypeSpellResponse Spell
	 * @param BingTypeWebResponse Web
	 * @param BingTypeImageResponse Image
	 * @param BingTypeRelatedSearchResponse RelatedSearch
	 * @param BingTypePhonebookResponse Phonebook
	 * @param BingTypeVideoResponse Video
	 * @param BingTypeInstantAnswerResponse InstantAnswer
	 * @param BingTypeNewsResponse News
	 * @param BingTypeMobileWebResponse MobileWeb
	 * @param BingTypeTranslationResponse Translation
	 * @param BingTypeArrayOfError Errors
	 * @return BingTypeSearchResponse
	 */
	public function __construct($_Version,$_Query = null,$_Spell = null,$_Web = null,$_Image = null,$_RelatedSearch = null,$_Phonebook = null,$_Video = null,$_InstantAnswer = null,$_News = null,$_MobileWeb = null,$_Translation = null,$_Errors = null)
	{
		parent::__construct(array('Version'=>$_Version,'Query'=>$_Query,'Spell'=>$_Spell,'Web'=>$_Web,'Image'=>$_Image,'RelatedSearch'=>$_RelatedSearch,'Phonebook'=>$_Phonebook,'Video'=>$_Video,'InstantAnswer'=>$_InstantAnswer,'News'=>$_News,'MobileWeb'=>$_MobileWeb,'Translation'=>$_Translation,'Errors'=>new BingTypeArrayOfError($_Errors)));
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
	 * Set Query
	 * @param Query Query
	 * @return Query
	 */
	public function setQuery($_Query)
	{
		return ($this->Query = $_Query);
	}
	/**
	 * Get Query
	 * @return BingTypeQuery
	 */
	public function getQuery()
	{
		return $this->Query;
	}
	/**
	 * Set Spell
	 * @param SpellResponse Spell
	 * @return SpellResponse
	 */
	public function setSpell($_Spell)
	{
		return ($this->Spell = $_Spell);
	}
	/**
	 * Get Spell
	 * @return BingTypeSpellResponse
	 */
	public function getSpell()
	{
		return $this->Spell;
	}
	/**
	 * Set Web
	 * @param WebResponse Web
	 * @return WebResponse
	 */
	public function setWeb($_Web)
	{
		return ($this->Web = $_Web);
	}
	/**
	 * Get Web
	 * @return BingTypeWebResponse
	 */
	public function getWeb()
	{
		return $this->Web;
	}
	/**
	 * Set Image
	 * @param ImageResponse Image
	 * @return ImageResponse
	 */
	public function setImage($_Image)
	{
		return ($this->Image = $_Image);
	}
	/**
	 * Get Image
	 * @return BingTypeImageResponse
	 */
	public function getImage()
	{
		return $this->Image;
	}
	/**
	 * Set RelatedSearch
	 * @param RelatedSearchResponse RelatedSearch
	 * @return RelatedSearchResponse
	 */
	public function setRelatedSearch($_RelatedSearch)
	{
		return ($this->RelatedSearch = $_RelatedSearch);
	}
	/**
	 * Get RelatedSearch
	 * @return BingTypeRelatedSearchResponse
	 */
	public function getRelatedSearch()
	{
		return $this->RelatedSearch;
	}
	/**
	 * Set Phonebook
	 * @param PhonebookResponse Phonebook
	 * @return PhonebookResponse
	 */
	public function setPhonebook($_Phonebook)
	{
		return ($this->Phonebook = $_Phonebook);
	}
	/**
	 * Get Phonebook
	 * @return BingTypePhonebookResponse
	 */
	public function getPhonebook()
	{
		return $this->Phonebook;
	}
	/**
	 * Set Video
	 * @param VideoResponse Video
	 * @return VideoResponse
	 */
	public function setVideo($_Video)
	{
		return ($this->Video = $_Video);
	}
	/**
	 * Get Video
	 * @return BingTypeVideoResponse
	 */
	public function getVideo()
	{
		return $this->Video;
	}
	/**
	 * Set InstantAnswer
	 * @param InstantAnswerResponse InstantAnswer
	 * @return InstantAnswerResponse
	 */
	public function setInstantAnswer($_InstantAnswer)
	{
		return ($this->InstantAnswer = $_InstantAnswer);
	}
	/**
	 * Get InstantAnswer
	 * @return BingTypeInstantAnswerResponse
	 */
	public function getInstantAnswer()
	{
		return $this->InstantAnswer;
	}
	/**
	 * Set News
	 * @param NewsResponse News
	 * @return NewsResponse
	 */
	public function setNews($_News)
	{
		return ($this->News = $_News);
	}
	/**
	 * Get News
	 * @return BingTypeNewsResponse
	 */
	public function getNews()
	{
		return $this->News;
	}
	/**
	 * Set MobileWeb
	 * @param MobileWebResponse MobileWeb
	 * @return MobileWebResponse
	 */
	public function setMobileWeb($_MobileWeb)
	{
		return ($this->MobileWeb = $_MobileWeb);
	}
	/**
	 * Get MobileWeb
	 * @return BingTypeMobileWebResponse
	 */
	public function getMobileWeb()
	{
		return $this->MobileWeb;
	}
	/**
	 * Set Translation
	 * @param TranslationResponse Translation
	 * @return TranslationResponse
	 */
	public function setTranslation($_Translation)
	{
		return ($this->Translation = $_Translation);
	}
	/**
	 * Get Translation
	 * @return BingTypeTranslationResponse
	 */
	public function getTranslation()
	{
		return $this->Translation;
	}
	/**
	 * Set Errors
	 * @param ArrayOfError Errors
	 * @return ArrayOfError
	 */
	public function setErrors($_Errors)
	{
		return ($this->Errors = $_Errors);
	}
	/**
	 * Get Errors
	 * @return BingTypeArrayOfError
	 */
	public function getErrors()
	{
		return $this->Errors;
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