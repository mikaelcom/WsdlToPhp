<?php
/**
 * Class file for AmazonAlexaTypeWebMapResult
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeWebMapResult
 * @date 10/07/2012
 */
class AmazonAlexaTypeWebMapResult extends AmazonAlexaWsdlClass
{
	/**
	 * The Request
	 * @var AmazonAlexaTypeRequest
	 */
	public $Request;
	/**
	 * The Errors
	 * @var AmazonAlexaTypeErrors
	 */
	public $Errors;
	/**
	 * The Alexa
	 * @var AmazonAlexaTypeAlexa
	 */
	public $Alexa;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeRequest Request
	 * @param AmazonAlexaTypeErrors Errors
	 * @param AmazonAlexaTypeAlexa Alexa
	 * @return AmazonAlexaTypeWebMapResult
	 */
	public function __construct($_Request = null,$_Errors = null,$_Alexa = null)
	{
		parent::__construct(array('Request'=>$_Request,'Errors'=>$_Errors,'Alexa'=>$_Alexa));
	}
	/**
	 * Set Request
	 * @param Request Request
	 * @return Request
	 */
	public function setRequest($_Request)
	{
		return ($this->Request = $_Request);
	}
	/**
	 * Get Request
	 * @return AmazonAlexaTypeRequest
	 */
	public function getRequest()
	{
		return $this->Request;
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
	 * Set Alexa
	 * @param Alexa Alexa
	 * @return Alexa
	 */
	public function setAlexa($_Alexa)
	{
		return ($this->Alexa = $_Alexa);
	}
	/**
	 * Get Alexa
	 * @return AmazonAlexaTypeAlexa
	 */
	public function getAlexa()
	{
		return $this->Alexa;
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