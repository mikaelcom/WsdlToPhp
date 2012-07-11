<?php
/**
 * Class file for AmazonEc2TypeAttachInternetGatewayType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAttachInternetGatewayType
 * @date 10/07/2012
 */
class AmazonEc2TypeAttachInternetGatewayType extends AmazonEc2WsdlClass
{
	/**
	 * The internetGatewayId
	 * @var string
	 */
	public $internetGatewayId;
	/**
	 * The vpcId
	 * @var string
	 */
	public $vpcId;
	/**
	 * Constructor
	 * @param string internetGatewayId
	 * @param string vpcId
	 * @return AmazonEc2TypeAttachInternetGatewayType
	 */
	public function __construct($_internetGatewayId = null,$_vpcId = null)
	{
		parent::__construct(array('internetGatewayId'=>$_internetGatewayId,'vpcId'=>$_vpcId));
	}
	/**
	 * Set internetGatewayId
	 * @param string internetGatewayId
	 * @return string
	 */
	public function setInternetGatewayId($_internetGatewayId)
	{
		return ($this->internetGatewayId = $_internetGatewayId);
	}
	/**
	 * Get internetGatewayId
	 * @return string
	 */
	public function getInternetGatewayId()
	{
		return $this->internetGatewayId;
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