<?php
/**
 * Class file for MicrosoftTranslatorTypeGetLanguageNames
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeGetLanguageNames
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeGetLanguageNames extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The appId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $appId;
	/**
	 * The locale
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $locale;
	/**
	 * The languageCodes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var MicrosoftTranslatorTypeArrayOfstring
	 */
	public $languageCodes;
	/**
	 * Constructor
	 * @param string appId
	 * @param string locale
	 * @param MicrosoftTranslatorTypeArrayOfstring languageCodes
	 * @return MicrosoftTranslatorTypeGetLanguageNames
	 */
	public function __construct($_appId = null,$_locale = null,$_languageCodes = null)
	{
		parent::__construct(array('appId'=>$_appId,'locale'=>$_locale,'languageCodes'=>new MicrosoftTranslatorTypeArrayOfstring($_languageCodes)));
	}
	/**
	 * Set appId
	 * @param string appId
	 * @return string
	 */
	public function setAppId($_appId)
	{
		return ($this->appId = $_appId);
	}
	/**
	 * Get appId
	 * @return string
	 */
	public function getAppId()
	{
		return $this->appId;
	}
	/**
	 * Set locale
	 * @param string locale
	 * @return string
	 */
	public function setLocale($_locale)
	{
		return ($this->locale = $_locale);
	}
	/**
	 * Get locale
	 * @return string
	 */
	public function getLocale()
	{
		return $this->locale;
	}
	/**
	 * Set languageCodes
	 * @param ArrayOfstring languageCodes
	 * @return ArrayOfstring
	 */
	public function setLanguageCodes($_languageCodes)
	{
		return ($this->languageCodes = $_languageCodes);
	}
	/**
	 * Get languageCodes
	 * @return MicrosoftTranslatorTypeArrayOfstring
	 */
	public function getLanguageCodes()
	{
		return $this->languageCodes;
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