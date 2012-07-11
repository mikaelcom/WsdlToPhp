<?php
/**
 * Class file for MicrosoftTranslatorTypeGetLanguageNamesResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeGetLanguageNamesResponse
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeGetLanguageNamesResponse extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The GetLanguageNamesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var MicrosoftTranslatorTypeArrayOfstring
	 */
	public $GetLanguageNamesResult;
	/**
	 * Constructor
	 * @param MicrosoftTranslatorTypeArrayOfstring GetLanguageNamesResult
	 * @return MicrosoftTranslatorTypeGetLanguageNamesResponse
	 */
	public function __construct($_GetLanguageNamesResult = null)
	{
		parent::__construct(array('GetLanguageNamesResult'=>new MicrosoftTranslatorTypeArrayOfstring($_GetLanguageNamesResult)));
	}
	/**
	 * Set GetLanguageNamesResult
	 * @param ArrayOfstring GetLanguageNamesResult
	 * @return ArrayOfstring
	 */
	public function setGetLanguageNamesResult($_GetLanguageNamesResult)
	{
		return ($this->GetLanguageNamesResult = $_GetLanguageNamesResult);
	}
	/**
	 * Get GetLanguageNamesResult
	 * @return MicrosoftTranslatorTypeArrayOfstring
	 */
	public function getGetLanguageNamesResult()
	{
		return $this->GetLanguageNamesResult;
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