<?php
/**
 * Class file for AmazonAlexaTypeResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeResponseType
 * @date 10/07/2012
 */
class AmazonAlexaTypeResponseType extends AmazonAlexaWsdlClass
{
	/**
	 * The Request
	 * @var AmazonAlexaTypeRequestType
	 */
	public $Request;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeRequestType Request
	 * @return AmazonAlexaTypeResponseType
	 */
	public function __construct($_Request = null)
	{
		parent::__construct(array('Request'=>$_Request));
	}
	/**
	 * Set Request
	 * @param RequestType Request
	 * @return RequestType
	 */
	public function setRequest($_Request)
	{
		return ($this->Request = $_Request);
	}
	/**
	 * Get Request
	 * @return AmazonAlexaTypeRequestType
	 */
	public function getRequest()
	{
		return $this->Request;
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