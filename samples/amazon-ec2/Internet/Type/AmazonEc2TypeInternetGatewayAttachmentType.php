<?php
/**
 * Class file for AmazonEc2TypeInternetGatewayAttachmentType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInternetGatewayAttachmentType
 * @date 10/07/2012
 */
class AmazonEc2TypeInternetGatewayAttachmentType extends AmazonEc2WsdlClass
{
	/**
	 * The vpcId
	 * @var string
	 */
	public $vpcId;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * Constructor
	 * @param string vpcId
	 * @param string state
	 * @return AmazonEc2TypeInternetGatewayAttachmentType
	 */
	public function __construct($_vpcId = null,$_state = null)
	{
		parent::__construct(array('vpcId'=>$_vpcId,'state'=>$_state));
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
	 * Set state
	 * @param string state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Get state
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
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