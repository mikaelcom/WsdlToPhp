<?php
/**
 * Class file for AmazonEc2TypeGetPasswordDataResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeGetPasswordDataResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeGetPasswordDataResponseType extends AmazonEc2WsdlClass
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
	 * The passwordData
	 * @var string
	 */
	public $passwordData;
	/**
	 * Constructor
	 * @param string requestId
	 * @param string instanceId
	 * @param dateTime timestamp
	 * @param string passwordData
	 * @return AmazonEc2TypeGetPasswordDataResponseType
	 */
	public function __construct($_requestId = null,$_instanceId = null,$_timestamp = null,$_passwordData = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'instanceId'=>$_instanceId,'timestamp'=>$_timestamp,'passwordData'=>$_passwordData));
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
	 * Set passwordData
	 * @param string passwordData
	 * @return string
	 */
	public function setPasswordData($_passwordData)
	{
		return ($this->passwordData = $_passwordData);
	}
	/**
	 * Get passwordData
	 * @return string
	 */
	public function getPasswordData()
	{
		return $this->passwordData;
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