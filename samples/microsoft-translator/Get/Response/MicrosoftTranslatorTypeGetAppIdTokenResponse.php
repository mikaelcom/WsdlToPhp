<?php
/**
 * Class file for MicrosoftTranslatorTypeGetAppIdTokenResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeGetAppIdTokenResponse
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeGetAppIdTokenResponse extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The GetAppIdTokenResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $GetAppIdTokenResult;
	/**
	 * Constructor
	 * @param string GetAppIdTokenResult
	 * @return MicrosoftTranslatorTypeGetAppIdTokenResponse
	 */
	public function __construct($_GetAppIdTokenResult = null)
	{
		parent::__construct(array('GetAppIdTokenResult'=>$_GetAppIdTokenResult));
	}
	/**
	 * Set GetAppIdTokenResult
	 * @param string GetAppIdTokenResult
	 * @return string
	 */
	public function setGetAppIdTokenResult($_GetAppIdTokenResult)
	{
		return ($this->GetAppIdTokenResult = $_GetAppIdTokenResult);
	}
	/**
	 * Get GetAppIdTokenResult
	 * @return string
	 */
	public function getGetAppIdTokenResult()
	{
		return $this->GetAppIdTokenResult;
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