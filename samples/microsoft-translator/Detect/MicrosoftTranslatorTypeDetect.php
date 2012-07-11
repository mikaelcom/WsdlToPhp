<?php
/**
 * Class file for MicrosoftTranslatorTypeDetect
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeDetect
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeDetect extends MicrosoftTranslatorWsdlClass
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
	 * Constructor
	 * @param string appId
	 * @param string text
	 * @return MicrosoftTranslatorTypeDetect
	 */
	public function __construct($_appId = null,$_text = null)
	{
		parent::__construct(array('appId'=>$_appId,'text'=>$_text));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>