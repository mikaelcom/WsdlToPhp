<?php
/**
 * Class file for MicrosoftTranslatorTypeGetLanguagesForTranslateResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeGetLanguagesForTranslateResponse
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeGetLanguagesForTranslateResponse extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The GetLanguagesForTranslateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var MicrosoftTranslatorTypeArrayOfstring
	 */
	public $GetLanguagesForTranslateResult;
	/**
	 * Constructor
	 * @param MicrosoftTranslatorTypeArrayOfstring GetLanguagesForTranslateResult
	 * @return MicrosoftTranslatorTypeGetLanguagesForTranslateResponse
	 */
	public function __construct($_GetLanguagesForTranslateResult = null)
	{
		parent::__construct(array('GetLanguagesForTranslateResult'=>new MicrosoftTranslatorTypeArrayOfstring($_GetLanguagesForTranslateResult)));
	}
	/**
	 * Set GetLanguagesForTranslateResult
	 * @param ArrayOfstring GetLanguagesForTranslateResult
	 * @return ArrayOfstring
	 */
	public function setGetLanguagesForTranslateResult($_GetLanguagesForTranslateResult)
	{
		return ($this->GetLanguagesForTranslateResult = $_GetLanguagesForTranslateResult);
	}
	/**
	 * Get GetLanguagesForTranslateResult
	 * @return MicrosoftTranslatorTypeArrayOfstring
	 */
	public function getGetLanguagesForTranslateResult()
	{
		return $this->GetLanguagesForTranslateResult;
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