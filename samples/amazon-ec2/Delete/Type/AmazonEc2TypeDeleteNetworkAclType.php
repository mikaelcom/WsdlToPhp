<?php
/**
 * Class file for AmazonEc2TypeDeleteNetworkAclType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDeleteNetworkAclType
 * @date 10/07/2012
 */
class AmazonEc2TypeDeleteNetworkAclType extends AmazonEc2WsdlClass
{
	/**
	 * The networkAclId
	 * @var string
	 */
	public $networkAclId;
	/**
	 * Constructor
	 * @param string networkAclId
	 * @return AmazonEc2TypeDeleteNetworkAclType
	 */
	public function __construct($_networkAclId = null)
	{
		parent::__construct(array('networkAclId'=>$_networkAclId));
	}
	/**
	 * Set networkAclId
	 * @param string networkAclId
	 * @return string
	 */
	public function setNetworkAclId($_networkAclId)
	{
		return ($this->networkAclId = $_networkAclId);
	}
	/**
	 * Get networkAclId
	 * @return string
	 */
	public function getNetworkAclId()
	{
		return $this->networkAclId;
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