<?php
/**
 * Class file for MicrosoftTranslatorTypeBreakSentences
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeBreakSentences
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeBreakSentences extends MicrosoftTranslatorWsdlClass
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
	 * The text
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $text;
	/**
	 * The language
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $language;
	/**
	 * Constructor
	 * @param string appId
	 * @param string text
	 * @param string language
	 * @return MicrosoftTranslatorTypeBreakSentences
	 */
	public function __construct($_appId = null,$_text = null,$_language = null)
	{
		parent::__construct(array('appId'=>$_appId,'text'=>$_text,'language'=>$_language));
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
	 * Set text
	 * @param string text
	 * @return string
	 */
	public function setText($_text)
	{
		return ($this->text = $_text);
	}
	/**
	 * Get text
	 * @return string
	 */
	public function getText()
	{
		return $this->text;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>