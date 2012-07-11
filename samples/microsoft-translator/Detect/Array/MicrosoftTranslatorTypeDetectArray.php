<?php
/**
 * Class file for MicrosoftTranslatorTypeDetectArray
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeDetectArray
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeDetectArray extends MicrosoftTranslatorWsdlClass
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
	 * Constructor
	 * @param string appId
	 * @param MicrosoftTranslatorTypeArrayOfstring texts
	 * @return MicrosoftTranslatorTypeDetectArray
	 */
	public function __construct($_appId = null,$_texts = null)
	{
		parent::__construct(array('appId'=>$_appId,'texts'=>new MicrosoftTranslatorTypeArrayOfstring($_texts)));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>