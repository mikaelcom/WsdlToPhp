<?php
/**
 * Class file for AmazonEc2TypeGetConsoleOutputResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeGetConsoleOutputResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeGetConsoleOutputResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The instanceId
	 * @var string
	 */
	public $instanceId;
	/**
	 * The timestamp
	 * @var dateTime
	 */
	public $timestamp;
	/**
	 * The output
	 * @var string
	 */
	public $output;
	/**
	 * Constructor
	 * @param string requestId
	 * @param string instanceId
	 * @param dateTime timestamp
	 * @param string output
	 * @return AmazonEc2TypeGetConsoleOutputResponseType
	 */
	public function __construct($_requestId = null,$_instanceId = null,$_timestamp = null,$_output = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'instanceId'=>$_instanceId,'timestamp'=>$_timestamp,'output'=>$_output));
	}
	/**
	 * Set requestId
	 * @param string requestId
	 * @return string
	 */
	public function setRequestId($_requestId)
	{
		return ($this->requestId = $_requestId);
	}
	/**
	 * Get requestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->requestId;
	}
	/**
	 * Set instanceId
	 * @param string instanceId
	 * @return string
	 */
	public function setInstanceId($_instanceId)
	{
		return ($this->instanceId = $_instanceId);
	}
	/**
	 * Get instanceId
	 * @return string
	 */
	public function getInstanceId()
	{
		return $this->instanceId;
	}
	/**
	 * Set timestamp
	 * @param dateTime timestamp
	 * @return dateTime
	 */
	public function setTimestamp($_timestamp)
	{
		return ($this->timestamp = $_timestamp);
	}
	/**
	 * Get timestamp
	 * @return dateTime
	 */
	public function getTimestamp()
	{
		return $this->timestamp;
	}
	/**
	 * Set output
	 * @param string output
	 * @return string
	 */
	public function setOutput($_output)
	{
		return ($this->output = $_output);
	}
	/**
	 * Get output
	 * @return string
	 */
	public function getOutput()
	{
		return $this->output;
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