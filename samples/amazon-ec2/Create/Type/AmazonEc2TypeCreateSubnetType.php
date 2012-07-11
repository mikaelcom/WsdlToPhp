<?php
/**
 * Class file for AmazonEc2TypeCreateSubnetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateSubnetType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateSubnetType extends AmazonEc2WsdlClass
{
	/**
	 * The vpcId
	 * @var string
	 */
	public $vpcId;
	/**
	 * The cidrBlock
	 * @var string
	 */
	public $cidrBlock;
	/**
	 * The availabilityZone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $availabilityZone;
	/**
	 * Constructor
	 * @param string vpcId
	 * @param string cidrBlock
	 * @param string availabilityZone
	 * @return AmazonEc2TypeCreateSubnetType
	 */
	public function __construct($_vpcId = null,$_cidrBlock = null,$_availabilityZone = null)
	{
		parent::__construct(array('vpcId'=>$_vpcId,'cidrBlock'=>$_cidrBlock,'availabilityZone'=>$_availabilityZone));
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
	 * Set cidrBlock
	 * @param string cidrBlock
	 * @return string
	 */
	public function setCidrBlock($_cidrBlock)
	{
		return ($this->cidrBlock = $_cidrBlock);
	}
	/**
	 * Get cidrBlock
	 * @return string
	 */
	public function getCidrBlock()
	{
		return $this->cidrBlock;
	}
	/**
	 * Set availabilityZone
	 * @param string availabilityZone
	 * @return string
	 */
	public function setAvailabilityZone($_availabilityZone)
	{
		return ($this->availabilityZone = $_availabilityZone);
	}
	/**
	 * Get availabilityZone
	 * @return string
	 */
	public function getAvailabilityZone()
	{
		return $this->availabilityZone;
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