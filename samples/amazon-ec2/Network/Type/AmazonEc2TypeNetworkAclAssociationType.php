<?php
/**
 * Class file for AmazonEc2TypeNetworkAclAssociationType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeNetworkAclAssociationType
 * @date 10/07/2012
 */
class AmazonEc2TypeNetworkAclAssociationType extends AmazonEc2WsdlClass
{
	/**
	 * The networkAclAssociationId
	 * @var string
	 */
	public $networkAclAssociationId;
	/**
	 * The networkAclId
	 * @var string
	 */
	public $networkAclId;
	/**
	 * The subnetId
	 * @var string
	 */
	public $subnetId;
	/**
	 * Constructor
	 * @param string networkAclAssociationId
	 * @param string networkAclId
	 * @param string subnetId
	 * @return AmazonEc2TypeNetworkAclAssociationType
	 */
	public function __construct($_networkAclAssociationId = null,$_networkAclId = null,$_subnetId = null)
	{
		parent::__construct(array('networkAclAssociationId'=>$_networkAclAssociationId,'networkAclId'=>$_networkAclId,'subnetId'=>$_subnetId));
	}
	/**
	 * Set networkAclAssociationId
	 * @param string networkAclAssociationId
	 * @return string
	 */
	public function setNetworkAclAssociationId($_networkAclAssociationId)
	{
		return ($this->networkAclAssociationId = $_networkAclAssociationId);
	}
	/**
	 * Get networkAclAssociationId
	 * @return string
	 */
	public function getNetworkAclAssociationId()
	{
		return $this->networkAclAssociationId;
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
	 * Set subnetId
	 * @param string subnetId
	 * @return string
	 */
	public function setSubnetId($_subnetId)
	{
		return ($this->subnetId = $_subnetId);
	}
	/**
	 * Get subnetId
	 * @return string
	 */
	public function getSubnetId()
	{
		return $this->subnetId;
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