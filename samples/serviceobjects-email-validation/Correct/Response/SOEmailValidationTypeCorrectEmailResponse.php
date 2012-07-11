<?php
/**
 * Class file for SOEmailValidationTypeCorrectEmailResponse
 * @date 08/07/2012
 */
/**
 * Class SOEmailValidationTypeCorrectEmailResponse
 * @date 08/07/2012
 */
class SOEmailValidationTypeCorrectEmailResponse extends SOEmailValidationWsdlClass
{
	/**
	 * The CorrectEmailResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOEmailValidationTypeEmailCorrectResult
	 */
	public $CorrectEmailResult;
	/**
	 * Constructor
	 * @param SOEmailValidationTypeEmailCorrectResult CorrectEmailResult
	 * @return SOEmailValidationTypeCorrectEmailResponse
	 */
	public function __construct($_CorrectEmailResult = null)
	{
		parent::__construct(array('CorrectEmailResult'=>$_CorrectEmailResult));
	}
	/**
	 * Set CorrectEmailResult
	 * @param EmailCorrectResult CorrectEmailResult
	 * @return EmailCorrectResult
	 */
	public function setCorrectEmailResult($_CorrectEmailResult)
	{
		return ($this->CorrectEmailResult = $_CorrectEmailResult);
	}
	/**
	 * Get CorrectEmailResult
	 * @return SOEmailValidationTypeEmailCorrectResult
	 */
	public function getCorrectEmailResult()
	{
		return $this->CorrectEmailResult;
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