<?php
/**
 * Class file for MicrosoftTranslatorTypeAddTranslationArray
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeAddTranslationArray
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeAddTranslationArray extends MicrosoftTranslatorWsdlClass
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
	 * The translations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var MicrosoftTranslatorTypeArrayOfTranslation
	 */
	public $translations;
	/**
	 * The from
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $from;
	/**
	 * The to
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $to;
	/**
	 * The options
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var MicrosoftTranslatorTypeTranslateOptions
	 */
	public $options;
	/**
	 * Constructor
	 * @param string appId
	 * @param MicrosoftTranslatorTypeArrayOfTranslation translations
	 * @param string from
	 * @param string to
	 * @param MicrosoftTranslatorTypeTranslateOptions options
	 * @return MicrosoftTranslatorTypeAddTranslationArray
	 */
	public function __construct($_appId = null,$_translations = null,$_from = null,$_to = null,$_options = null)
	{
		parent::__construct(array('appId'=>$_appId,'translations'=>new MicrosoftTranslatorTypeArrayOfTranslation($_translations),'from'=>$_from,'to'=>$_to,'options'=>$_options));
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
	 * Set translations
	 * @param ArrayOfTranslation translations
	 * @return ArrayOfTranslation
	 */
	public function setTranslations($_translations)
	{
		return ($this->translations = $_translations);
	}
	/**
	 * Get translations
	 * @return MicrosoftTranslatorTypeArrayOfTranslation
	 */
	public function getTranslations()
	{
		return $this->translations;
	}
	/**
	 * Set from
	 * @param string from
	 * @return string
	 */
	public function setFrom($_from)
	{
		return ($this->from = $_from);
	}
	/**
	 * Get from
	 * @return string
	 */
	public function getFrom()
	{
		return $this->from;
	}
	/**
	 * Set to
	 * @param string to
	 * @return string
	 */
	public function setTo($_to)
	{
		return ($this->to = $_to);
	}
	/**
	 * Get to
	 * @return string
	 */
	public function getTo()
	{
		return $this->to;
	}
	/**
	 * Set options
	 * @param TranslateOptions options
	 * @return TranslateOptions
	 */
	public function setOptions($_options)
	{
		return ($this->options = $_options);
	}
	/**
	 * Get options
	 * @return MicrosoftTranslatorTypeTranslateOptions
	 */
	public function getOptions()
	{
		return $this->options;
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