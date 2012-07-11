<?php
/**
 * Class file for MicrosoftTranslatorTypeSpeakResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeSpeakResponse
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeSpeakResponse extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The SpeakResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $SpeakResult;
	/**
	 * Constructor
	 * @param string SpeakResult
	 * @return MicrosoftTranslatorTypeSpeakResponse
	 */
	public function __construct($_SpeakResult = null)
	{
		parent::__construct(array('SpeakResult'=>$_SpeakResult));
	}
	/**
	 * Set SpeakResult
	 * @param string SpeakResult
	 * @return string
	 */
	public function setSpeakResult($_SpeakResult)
	{
		return ($this->SpeakResult = $_SpeakResult);
	}
	/**
	 * Get SpeakResult
	 * @return string
	 */
	public function getSpeakResult()
	{
		return $this->SpeakResult;
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