<?php
/**
 * Class file for AmazonAlexaTypeWebMap
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeWebMap
 * @date 10/07/2012
 */
class AmazonAlexaTypeWebMap extends AmazonAlexaWsdlClass
{
	/**
	 * The Request
	 * @var AmazonAlexaTypeWebMapRequest
	 */
	public $Request;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeWebMapRequest Request
	 * @return AmazonAlexaTypeWebMap
	 */
	public function __construct($_Request = null)
	{
		parent::__construct(array('Request'=>$_Request));
	}
	/**
	 * Set Request
	 * @param WebMapRequest Request
	 * @return WebMapRequest
	 */
	public function setRequest($_Request)
	{
		return ($this->Request = $_Request);
	}
	/**
	 * Get Request
	 * @return AmazonAlexaTypeWebMapRequest
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