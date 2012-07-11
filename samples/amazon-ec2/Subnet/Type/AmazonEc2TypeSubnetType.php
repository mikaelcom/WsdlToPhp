<?php
/**
 * Class file for AmazonEc2TypeSubnetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeSubnetType
 * @date 10/07/2012
 */
class AmazonEc2TypeSubnetType extends AmazonEc2WsdlClass
{
	/**
	 * The subnetId
	 * @var string
	 */
	public $subnetId;
	/**
	 * The state
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $state;
	/**
	 * The vpcId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $vpcId;
	/**
	 * The cidrBlock
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $cidrBlock;
	/**
	 * The availableIpAddressCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $availableIpAddressCount;
	/**
	 * The availabilityZone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $availabilityZone;
	/**
	 * The tagSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeResourceTagSetType
	 */
	public $tagSet;
	/**
	 * Constructor
	 * @param string subnetId
	 * @param string state
	 * @param string vpcId
	 * @param string cidrBlock
	 * @param int availableIpAddressCount
	 * @param string availabilityZone
	 * @param AmazonEc2TypeResourceTagSetType tagSet
	 * @return AmazonEc2TypeSubnetType
	 */
	public function __construct($_subnetId = null,$_state = null,$_vpcId = null,$_cidrBlock = null,$_availableIpAddressCount = null,$_availabilityZone = null,$_tagSet = null)
	{
		parent::__construct(array('subnetId'=>$_subnetId,'state'=>$_state,'vpcId'=>$_vpcId,'cidrBlock'=>$_cidrBlock,'availableIpAddressCount'=>$_availableIpAddressCount,'availabilityZone'=>$_availabilityZone,'tagSet'=>$_tagSet));
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
	 * Set availableIpAddressCount
	 * @param int availableIpAddressCount
	 * @return int
	 */
	public function setAvailableIpAddressCount($_availableIpAddressCount)
	{
		return ($this->availableIpAddressCount = $_availableIpAddressCount);
	}
	/**
	 * Get availableIpAddressCount
	 * @return int
	 */
	public function getAvailableIpAddressCount()
	{
		return $this->availableIpAddressCount;
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
	 * Set tagSet
	 * @param ResourceTagSetType tagSet
	 * @return ResourceTagSetType
	 */
	public function setTagSet($_tagSet)
	{
		return ($this->tagSet = $_tagSet);
	}
	/**
	 * Get tagSet
	 * @return AmazonEc2TypeResourceTagSetType
	 */
	public function getTagSet()
	{
		return $this->tagSet;
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