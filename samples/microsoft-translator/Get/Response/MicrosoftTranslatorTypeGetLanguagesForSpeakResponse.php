<?php
/**
 * Class file for MicrosoftTranslatorTypeGetLanguagesForSpeakResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeGetLanguagesForSpeakResponse
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeGetLanguagesForSpeakResponse extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The GetLanguagesForSpeakResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var MicrosoftTranslatorTypeArrayOfstring
	 */
	public $GetLanguagesForSpeakResult;
	/**
	 * Constructor
	 * @param MicrosoftTranslatorTypeArrayOfstring GetLanguagesForSpeakResult
	 * @return MicrosoftTranslatorTypeGetLanguagesForSpeakResponse
	 */
	public function __construct($_GetLanguagesForSpeakResult = null)
	{
		parent::__construct(array('GetLanguagesForSpeakResult'=>new MicrosoftTranslatorTypeArrayOfstring($_GetLanguagesForSpeakResult)));
	}
	/**
	 * Set GetLanguagesForSpeakResult
	 * @param ArrayOfstring GetLanguagesForSpeakResult
	 * @return ArrayOfstring
	 */
	public function setGetLanguagesForSpeakResult($_GetLanguagesForSpeakResult)
	{
		return ($this->GetLanguagesForSpeakResult = $_GetLanguagesForSpeakResult);
	}
	/**
	 * Get GetLanguagesForSpeakResult
	 * @return MicrosoftTranslatorTypeArrayOfstring
	 */
	public function getGetLanguagesForSpeakResult()
	{
		return $this->GetLanguagesForSpeakResult;
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