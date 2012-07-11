<?php
/**
 * Class file for MicrosoftTranslatorTypeTranslateResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeTranslateResponse
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeTranslateResponse extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The TranslateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $TranslateResult;
	/**
	 * Constructor
	 * @param string TranslateResult
	 * @return MicrosoftTranslatorTypeTranslateResponse
	 */
	public function __construct($_TranslateResult = null)
	{
		parent::__construct(array('TranslateResult'=>$_TranslateResult));
	}
	/**
	 * Set TranslateResult
	 * @param string TranslateResult
	 * @return string
	 */
	public function setTranslateResult($_TranslateResult)
	{
		return ($this->TranslateResult = $_TranslateResult);
	}
	/**
	 * Get TranslateResult
	 * @return string
	 */
	public function getTranslateResult()
	{
		return $this->TranslateResult;
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