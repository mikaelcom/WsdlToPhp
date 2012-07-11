<?php
/**
 * Class file for MicrosoftTranslatorTypeGetTranslationsArrayResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeGetTranslationsArrayResponse
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeGetTranslationsArrayResponse extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The GetTranslationsArrayResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var MicrosoftTranslatorTypeArrayOfGetTranslationsResponse
	 */
	public $GetTranslationsArrayResult;
	/**
	 * Constructor
	 * @param MicrosoftTranslatorTypeArrayOfGetTranslationsResponse GetTranslationsArrayResult
	 * @return MicrosoftTranslatorTypeGetTranslationsArrayResponse
	 */
	public function __construct($_GetTranslationsArrayResult = null)
	{
		parent::__construct(array('GetTranslationsArrayResult'=>new MicrosoftTranslatorTypeArrayOfGetTranslationsResponse($_GetTranslationsArrayResult)));
	}
	/**
	 * Set GetTranslationsArrayResult
	 * @param ArrayOfGetTranslationsResponse GetTranslationsArrayResult
	 * @return ArrayOfGetTranslationsResponse
	 */
	public function setGetTranslationsArrayResult($_GetTranslationsArrayResult)
	{
		return ($this->GetTranslationsArrayResult = $_GetTranslationsArrayResult);
	}
	/**
	 * Get GetTranslationsArrayResult
	 * @return MicrosoftTranslatorTypeArrayOfGetTranslationsResponse
	 */
	public function getGetTranslationsArrayResult()
	{
		return $this->GetTranslationsArrayResult;
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