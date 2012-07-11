<?php
/**
 * Class file for MicrosoftTranslatorTypeGetLanguagesForTranslate
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeGetLanguagesForTranslate
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeGetLanguagesForTranslate extends MicrosoftTranslatorWsdlClass
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
	 * Constructor
	 * @param string appId
	 * @return MicrosoftTranslatorTypeGetLanguagesForTranslate
	 */
	public function __construct($_appId = null)
	{
		parent::__construct(array('appId'=>$_appId));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>