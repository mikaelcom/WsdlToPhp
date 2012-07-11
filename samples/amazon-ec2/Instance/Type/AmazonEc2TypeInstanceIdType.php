<?php
/**
 * Class file for AmazonEc2TypeInstanceIdType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceIdType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceIdType extends AmazonEc2WsdlClass
{
	/**
	 * The instanceId
	 * @var string
	 */
	public $instanceId;
	/**
	 * Constructor
	 * @param string instanceId
	 * @return AmazonEc2TypeInstanceIdType
	 */
	public function __construct($_instanceId = null)
	{
		parent::__construct(array('instanceId'=>$_instanceId));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>