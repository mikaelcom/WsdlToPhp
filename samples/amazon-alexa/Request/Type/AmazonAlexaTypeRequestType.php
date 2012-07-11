<?php
/**
 * Class file for AmazonAlexaTypeRequestType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeRequestType
 * @date 10/07/2012
 */
class AmazonAlexaTypeRequestType extends AmazonAlexaWsdlClass
{
	/**
	 * The Arguments
	 * @var AmazonAlexaTypeArguments
	 */
	public $Arguments;
	/**
	 * The DateTime
	 * @var dateTime
	 */
	public $DateTime;
	/**
	 * The ResponseTime
	 * @var UnsignedIntegerType
	 */
	public $ResponseTime;
	/**
	 * The Errors
	 * @var AmazonAlexaTypeErrors
	 */
	public $Errors;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeArguments Arguments
	 * @param dateTime DateTime
	 * @param UnsignedIntegerType ResponseTime
	 * @param AmazonAlexaTypeErrors Errors
	 * @return AmazonAlexaTypeRequestType
	 */
	public function __construct($_Arguments = null,$_DateTime = null,$_ResponseTime = null,$_Errors = null)
	{
		parent::__construct(array('Arguments'=>$_Arguments,'DateTime'=>$_DateTime,'ResponseTime'=>$_ResponseTime,'Errors'=>$_Errors));
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
	 * Set DateTime
	 * @param dateTime DateTime
	 * @return dateTime
	 */
	public function setDateTime($_DateTime)
	{
		return ($this->DateTime = $_DateTime);
	}
	/**
	 * Get DateTime
	 * @return dateTime
	 */
	public function getDateTime()
	{
		return $this->DateTime;
	}
	/**
	 * Set ResponseTime
	 * @param UnsignedIntegerType ResponseTime
	 * @return UnsignedIntegerType
	 */
	public function setResponseTime($_ResponseTime)
	{
		return ($this->ResponseTime = $_ResponseTime);
	}
	/**
	 * Get ResponseTime
	 * @return UnsignedIntegerType
	 */
	public function getResponseTime()
	{
		return $this->ResponseTime;
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