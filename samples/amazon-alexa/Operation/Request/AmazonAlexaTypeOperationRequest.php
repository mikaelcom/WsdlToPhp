<?php
/**
 * Class file for AmazonAlexaTypeOperationRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeOperationRequest
 * @date 10/07/2012
 */
class AmazonAlexaTypeOperationRequest extends AmazonAlexaWsdlClass
{
	/**
	 * The HTTPHeaders
	 * @var AmazonAlexaTypeHTTPHeaders
	 */
	public $HTTPHeaders;
	/**
	 * The RequestId
	 * @var string
	 */
	public $RequestId;
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
	 * @param AmazonAlexaTypeHTTPHeaders HTTPHeaders
	 * @param string RequestId
	 * @param AmazonAlexaTypeArguments Arguments
	 * @param AmazonAlexaTypeErrors Errors
	 * @return AmazonAlexaTypeOperationRequest
	 */
	public function __construct($_HTTPHeaders = null,$_RequestId = null,$_Arguments = null,$_Errors = null)
	{
		parent::__construct(array('HTTPHeaders'=>$_HTTPHeaders,'RequestId'=>$_RequestId,'Arguments'=>$_Arguments,'Errors'=>$_Errors));
	}
	/**
	 * Set HTTPHeaders
	 * @param HTTPHeaders HTTPHeaders
	 * @return HTTPHeaders
	 */
	public function setHTTPHeaders($_HTTPHeaders)
	{
		return ($this->HTTPHeaders = $_HTTPHeaders);
	}
	/**
	 * Get HTTPHeaders
	 * @return AmazonAlexaTypeHTTPHeaders
	 */
	public function getHTTPHeaders()
	{
		return $this->HTTPHeaders;
	}
	/**
	 * Set RequestId
	 * @param string RequestId
	 * @return string
	 */
	public function setRequestId($_RequestId)
	{
		return ($this->RequestId = $_RequestId);
	}
	/**
	 * Get RequestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->RequestId;
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