<?php
/**
 * Class file for AmazonAlexaTypeRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeRequest
 * @date 10/07/2012
 */
class AmazonAlexaTypeRequest extends AmazonAlexaWsdlClass
{
	/**
	 * The IsValid
	 * @var string
	 */
	public $IsValid;
	/**
	 * The Arguments
	 * @var AmazonAlexaTypeArguments
	 */
	public $Arguments;
	/**
	 * The Errors
	 * @var AmazonAlexaTypeErrors
	 */
	public $Errors;
	/**
	 * Constructor
	 * @param string IsValid
	 * @param AmazonAlexaTypeArguments Arguments
	 * @param AmazonAlexaTypeErrors Errors
	 * @return AmazonAlexaTypeRequest
	 */
	public function __construct($_IsValid = null,$_Arguments = null,$_Errors = null)
	{
		parent::__construct(array('IsValid'=>$_IsValid,'Arguments'=>$_Arguments,'Errors'=>$_Errors));
	}
	/**
	 * Set IsValid
	 * @param string IsValid
	 * @return string
	 */
	public function setIsValid($_IsValid)
	{
		return ($this->IsValid = $_IsValid);
	}
	/**
	 * Get IsValid
	 * @return string
	 */
	public function getIsValid()
	{
		return $this->IsValid;
	}
	/**
	 * Set Arguments
	 * @param Arguments Arguments
	 * @return Arguments
	 */
	public function setArguments($_Arguments)
	{
		return ($this->Arguments = $_Arguments);
	}
	/**
	 * Get Arguments
	 * @return AmazonAlexaTypeArguments
	 */
	public function getArguments()
	{
		return $this->Arguments;
	}
	/**
	 * Set Errors
	 * @param Errors Errors
	 * @return Errors
	 */
	public function setErrors($_Errors)
	{
		return ($this->Errors = $_Errors);
	}
	/**
	 * Get Errors
	 * @return AmazonAlexaTypeErrors
	 */
	public function getErrors()
	{
		return $this->Errors;
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