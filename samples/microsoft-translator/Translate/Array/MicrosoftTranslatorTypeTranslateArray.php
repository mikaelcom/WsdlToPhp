<?php
/**
 * Class file for MicrosoftTranslatorTypeTranslateArray
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeTranslateArray
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeTranslateArray extends MicrosoftTranslatorWsdlClass
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
	 * The texts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var MicrosoftTranslatorTypeArrayOfstring
	 */
	public $texts;
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
	 * @param MicrosoftTranslatorTypeArrayOfstring texts
	 * @param string from
	 * @param string to
	 * @param MicrosoftTranslatorTypeTranslateOptions options
	 * @return MicrosoftTranslatorTypeTranslateArray
	 */
	public function __construct($_appId = null,$_texts = null,$_from = null,$_to = null,$_options = null)
	{
		parent::__construct(array('appId'=>$_appId,'texts'=>new MicrosoftTranslatorTypeArrayOfstring($_texts),'from'=>$_from,'to'=>$_to,'options'=>$_options));
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
	 * Set texts
	 * @param ArrayOfstring texts
	 * @return ArrayOfstring
	 */
	public function setTexts($_texts)
	{
		return ($this->texts = $_texts);
	}
	/**
	 * Get texts
	 * @return MicrosoftTranslatorTypeArrayOfstring
	 */
	public function getTexts()
	{
		return $this->texts;
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