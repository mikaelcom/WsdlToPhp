<?php
/**
 * Class file for AmazonECommerceServiceTypeOperationRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeOperationRequest
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeOperationRequest extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The HTTPHeaders
	 * @var AmazonECommerceServiceTypeHTTPHeaders
	 */
	public $HTTPHeaders;
	/**
	 * The RequestId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $RequestId;
	/**
	 * The Arguments
	 * @var AmazonECommerceServiceTypeArguments
	 */
	public $Arguments;
	/**
	 * The Errors
	 * @var AmazonECommerceServiceTypeErrors
	 */
	public $Errors;
	/**
	 * The RequestProcessingTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var float
	 */
	public $RequestProcessingTime;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeHTTPHeaders HTTPHeaders
	 * @param string RequestId
	 * @param AmazonECommerceServiceTypeArguments Arguments
	 * @param AmazonECommerceServiceTypeErrors Errors
	 * @param float RequestProcessingTime
	 * @return AmazonECommerceServiceTypeOperationRequest
	 */
	public function __construct($_HTTPHeaders = null,$_RequestId = null,$_Arguments = null,$_Errors = null,$_RequestProcessingTime = null)
	{
		parent::__construct(array('HTTPHeaders'=>$_HTTPHeaders,'RequestId'=>$_RequestId,'Arguments'=>$_Arguments,'Errors'=>$_Errors,'RequestProcessingTime'=>$_RequestProcessingTime));
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
	 * @return AmazonECommerceServiceTypeHTTPHeaders
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
	 * @return AmazonECommerceServiceTypeArguments
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
	 * @return AmazonECommerceServiceTypeErrors
	 */
	public function getErrors()
	{
		return $this->Errors;
	}
	/**
	 * Set RequestProcessingTime
	 * @param float RequestProcessingTime
	 * @return float
	 */
	public function setRequestProcessingTime($_RequestProcessingTime)
	{
		return ($this->RequestProcessingTime = $_RequestProcessingTime);
	}
	/**
	 * Get RequestProcessingTime
	 * @return float
	 */
	public function getRequestProcessingTime()
	{
		return $this->RequestProcessingTime;
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