<?php
/**
 * Class file for AmazonAlexaTypeUrlInfo
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeUrlInfo
 * @date 10/07/2012
 */
class AmazonAlexaTypeUrlInfo extends AmazonAlexaWsdlClass
{
	/**
	 * The Request
	 * @var AmazonAlexaTypeUrlInfoRequest
	 */
	public $Request;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeUrlInfoRequest Request
	 * @return AmazonAlexaTypeUrlInfo
	 */
	public function __construct($_Request = null)
	{
		parent::__construct(array('Request'=>$_Request));
	}
	/**
	 * Set Request
	 * @param UrlInfoRequest Request
	 * @return UrlInfoRequest
	 */
	public function setRequest($_Request)
	{
		return ($this->Request = $_Request);
	}
	/**
	 * Get Request
	 * @return AmazonAlexaTypeUrlInfoRequest
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