<?php
/**
 * Class file for AmazonEc2TypeVpcType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeVpcType
 * @date 10/07/2012
 */
class AmazonEc2TypeVpcType extends AmazonEc2WsdlClass
{
	/**
	 * The vpcId
	 * @var string
	 */
	public $vpcId;
	/**
	 * The state
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $state;
	/**
	 * The cidrBlock
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $cidrBlock;
	/**
	 * The dhcpOptionsId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $dhcpOptionsId;
	/**
	 * The tagSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeResourceTagSetType
	 */
	public $tagSet;
	/**
	 * The instanceTenancy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $instanceTenancy;
	/**
	 * Constructor
	 * @param string vpcId
	 * @param string state
	 * @param string cidrBlock
	 * @param string dhcpOptionsId
	 * @param AmazonEc2TypeResourceTagSetType tagSet
	 * @param string instanceTenancy
	 * @return AmazonEc2TypeVpcType
	 */
	public function __construct($_vpcId = null,$_state = null,$_cidrBlock = null,$_dhcpOptionsId = null,$_tagSet = null,$_instanceTenancy = null)
	{
		parent::__construct(array('vpcId'=>$_vpcId,'state'=>$_state,'cidrBlock'=>$_cidrBlock,'dhcpOptionsId'=>$_dhcpOptionsId,'tagSet'=>$_tagSet,'instanceTenancy'=>$_instanceTenancy));
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
	 * Set dhcpOptionsId
	 * @param string dhcpOptionsId
	 * @return string
	 */
	public function setDhcpOptionsId($_dhcpOptionsId)
	{
		return ($this->dhcpOptionsId = $_dhcpOptionsId);
	}
	/**
	 * Get dhcpOptionsId
	 * @return string
	 */
	public function getDhcpOptionsId()
	{
		return $this->dhcpOptionsId;
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
	 * Set instanceTenancy
	 * @param string instanceTenancy
	 * @return string
	 */
	public function setInstanceTenancy($_instanceTenancy)
	{
		return ($this->instanceTenancy = $_instanceTenancy);
	}
	/**
	 * Get instanceTenancy
	 * @return string
	 */
	public function getInstanceTenancy()
	{
		return $this->instanceTenancy;
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