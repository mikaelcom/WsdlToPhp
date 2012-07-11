<?php
/**
 * Class file for MicrosoftTranslatorTypeDetectResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeDetectResponse
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeDetectResponse extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The DetectResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $DetectResult;
	/**
	 * Constructor
	 * @param string DetectResult
	 * @return MicrosoftTranslatorTypeDetectResponse
	 */
	public function __construct($_DetectResult = null)
	{
		parent::__construct(array('DetectResult'=>$_DetectResult));
	}
	/**
	 * Set DetectResult
	 * @param string DetectResult
	 * @return string
	 */
	public function setDetectResult($_DetectResult)
	{
		return ($this->DetectResult = $_DetectResult);
	}
	/**
	 * Get DetectResult
	 * @return string
	 */
	public function getDetectResult()
	{
		return $this->DetectResult;
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