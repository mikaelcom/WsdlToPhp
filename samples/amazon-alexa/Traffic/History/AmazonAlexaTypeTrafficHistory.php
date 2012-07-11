<?php
/**
 * Class file for AmazonAlexaTypeTrafficHistory
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeTrafficHistory
 * @date 10/07/2012
 */
class AmazonAlexaTypeTrafficHistory extends AmazonAlexaWsdlClass
{
	/**
	 * The Request
	 * @var AmazonAlexaTypeTrafficHistoryRequest
	 */
	public $Request;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeTrafficHistoryRequest Request
	 * @return AmazonAlexaTypeTrafficHistory
	 */
	public function __construct($_Request = null)
	{
		parent::__construct(array('Request'=>$_Request));
	}
	/**
	 * Set Request
	 * @param TrafficHistoryRequest Request
	 * @return TrafficHistoryRequest
	 */
	public function setRequest($_Request)
	{
		return ($this->Request = $_Request);
	}
	/**
	 * Get Request
	 * @return AmazonAlexaTypeTrafficHistoryRequest
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