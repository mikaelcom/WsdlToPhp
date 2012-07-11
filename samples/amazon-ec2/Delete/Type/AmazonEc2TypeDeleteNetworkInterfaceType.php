<?php
/**
 * Class file for AmazonEc2TypeDeleteNetworkInterfaceType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDeleteNetworkInterfaceType
 * @date 10/07/2012
 */
class AmazonEc2TypeDeleteNetworkInterfaceType extends AmazonEc2WsdlClass
{
	/**
	 * The networkInterfaceId
	 * @var string
	 */
	public $networkInterfaceId;
	/**
	 * Constructor
	 * @param string networkInterfaceId
	 * @return AmazonEc2TypeDeleteNetworkInterfaceType
	 */
	public function __construct($_networkInterfaceId = null)
	{
		parent::__construct(array('networkInterfaceId'=>$_networkInterfaceId));
	}
	/**
	 * Set networkInterfaceId
	 * @param string networkInterfaceId
	 * @return string
	 */
	public function setNetworkInterfaceId($_networkInterfaceId)
	{
		return ($this->networkInterfaceId = $_networkInterfaceId);
	}
	/**
	 * Get networkInterfaceId
	 * @return string
	 */
	public function getNetworkInterfaceId()
	{
		return $this->networkInterfaceId;
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