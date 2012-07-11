<?php
/**
 * Class file for MicrosoftTranslatorTypeDetectArrayResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeDetectArrayResponse
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeDetectArrayResponse extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The DetectArrayResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var MicrosoftTranslatorTypeArrayOfstring
	 */
	public $DetectArrayResult;
	/**
	 * Constructor
	 * @param MicrosoftTranslatorTypeArrayOfstring DetectArrayResult
	 * @return MicrosoftTranslatorTypeDetectArrayResponse
	 */
	public function __construct($_DetectArrayResult = null)
	{
		parent::__construct(array('DetectArrayResult'=>new MicrosoftTranslatorTypeArrayOfstring($_DetectArrayResult)));
	}
	/**
	 * Set DetectArrayResult
	 * @param ArrayOfstring DetectArrayResult
	 * @return ArrayOfstring
	 */
	public function setDetectArrayResult($_DetectArrayResult)
	{
		return ($this->DetectArrayResult = $_DetectArrayResult);
	}
	/**
	 * Get DetectArrayResult
	 * @return MicrosoftTranslatorTypeArrayOfstring
	 */
	public function getDetectArrayResult()
	{
		return $this->DetectArrayResult;
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