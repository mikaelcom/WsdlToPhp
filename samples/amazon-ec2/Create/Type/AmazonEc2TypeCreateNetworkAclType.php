<?php
/**
 * Class file for AmazonEc2TypeCreateNetworkAclType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateNetworkAclType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateNetworkAclType extends AmazonEc2WsdlClass
{
	/**
	 * The vpcId
	 * @var string
	 */
	public $vpcId;
	/**
	 * Constructor
	 * @param string vpcId
	 * @return AmazonEc2TypeCreateNetworkAclType
	 */
	public function __construct($_vpcId = null)
	{
		parent::__construct(array('vpcId'=>$_vpcId));
	}
	/**
	 * Set vpcId
	 * @param string vpcId
	 * @return string
	 */
	public function setVpcId($_vpcId)
	{
		return ($this->vpcId = $_vpcId);
	}
	/**
	 * Get vpcId
	 * @return string
	 */
	public function getVpcId()
	{
		return $this->vpcId;
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