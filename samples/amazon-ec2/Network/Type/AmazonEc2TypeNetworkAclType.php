<?php
/**
 * Class file for AmazonEc2TypeNetworkAclType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeNetworkAclType
 * @date 10/07/2012
 */
class AmazonEc2TypeNetworkAclType extends AmazonEc2WsdlClass
{
	/**
	 * The networkAclId
	 * @var string
	 */
	public $networkAclId;
	/**
	 * The vpcId
	 * @var string
	 */
	public $vpcId;
	/**
	 * The default
	 * @var boolean
	 */
	public $default;
	/**
	 * The entrySet
	 * @var AmazonEc2TypeNetworkAclEntrySetType
	 */
	public $entrySet;
	/**
	 * The associationSet
	 * @var AmazonEc2TypeNetworkAclAssociationSetType
	 */
	public $associationSet;
	/**
	 * The tagSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeResourceTagSetType
	 */
	public $tagSet;
	/**
	 * Constructor
	 * @param string networkAclId
	 * @param string vpcId
	 * @param boolean default
	 * @param AmazonEc2TypeNetworkAclEntrySetType entrySet
	 * @param AmazonEc2TypeNetworkAclAssociationSetType associationSet
	 * @param AmazonEc2TypeResourceTagSetType tagSet
	 * @return AmazonEc2TypeNetworkAclType
	 */
	public function __construct($_networkAclId = null,$_vpcId = null,$_default = null,$_entrySet = null,$_associationSet = null,$_tagSet = null)
	{
		parent::__construct(array('networkAclId'=>$_networkAclId,'vpcId'=>$_vpcId,'default'=>$_default,'entrySet'=>$_entrySet,'associationSet'=>$_associationSet,'tagSet'=>$_tagSet));
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
	 * Set default
	 * @param boolean default
	 * @return boolean
	 */
	public function setDefault($_default)
	{
		return ($this->default = $_default);
	}
	/**
	 * Get default
	 * @return boolean
	 */
	public function getDefault()
	{
		return $this->default;
	}
	/**
	 * Set entrySet
	 * @param NetworkAclEntrySetType entrySet
	 * @return NetworkAclEntrySetType
	 */
	public function setEntrySet($_entrySet)
	{
		return ($this->entrySet = $_entrySet);
	}
	/**
	 * Get entrySet
	 * @return AmazonEc2TypeNetworkAclEntrySetType
	 */
	public function getEntrySet()
	{
		return $this->entrySet;
	}
	/**
	 * Set associationSet
	 * @param NetworkAclAssociationSetType associationSet
	 * @return NetworkAclAssociationSetType
	 */
	public function setAssociationSet($_associationSet)
	{
		return ($this->associationSet = $_associationSet);
	}
	/**
	 * Get associationSet
	 * @return AmazonEc2TypeNetworkAclAssociationSetType
	 */
	public function getAssociationSet()
	{
		return $this->associationSet;
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