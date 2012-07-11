<?php
/**
 * Class file for AmazonEc2TypeStopInstancesResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeStopInstancesResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeStopInstancesResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The instancesSet
	 * @var AmazonEc2TypeInstanceStateChangeSetType
	 */
	public $instancesSet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeInstanceStateChangeSetType instancesSet
	 * @return AmazonEc2TypeStopInstancesResponseType
	 */
	public function __construct($_requestId = null,$_instancesSet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'instancesSet'=>$_instancesSet));
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
	 * Set instancesSet
	 * @param InstanceStateChangeSetType instancesSet
	 * @return InstanceStateChangeSetType
	 */
	public function setInstancesSet($_instancesSet)
	{
		return ($this->instancesSet = $_instancesSet);
	}
	/**
	 * Get instancesSet
	 * @return AmazonEc2TypeInstanceStateChangeSetType
	 */
	public function getInstancesSet()
	{
		return $this->instancesSet;
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