<?php
/**
 * Class file for AmazonEc2TypeSecurityGroupItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeSecurityGroupItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeSecurityGroupItemType extends AmazonEc2WsdlClass
{
	/**
	 * The ownerId
	 * @var string
	 */
	public $ownerId;
	/**
	 * The groupId
	 * @var string
	 */
	public $groupId;
	/**
	 * The groupName
	 * @var string
	 */
	public $groupName;
	/**
	 * The groupDescription
	 * @var string
	 */
	public $groupDescription;
	/**
	 * The vpcId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $vpcId;
	/**
	 * The ipPermissions
	 * @var AmazonEc2TypeIpPermissionSetType
	 */
	public $ipPermissions;
	/**
	 * The ipPermissionsEgress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeIpPermissionSetType
	 */
	public $ipPermissionsEgress;
	/**
	 * The tagSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeResourceTagSetType
	 */
	public $tagSet;
	/**
	 * Constructor
	 * @param string ownerId
	 * @param string groupId
	 * @param string groupName
	 * @param string groupDescription
	 * @param string vpcId
	 * @param AmazonEc2TypeIpPermissionSetType ipPermissions
	 * @param AmazonEc2TypeIpPermissionSetType ipPermissionsEgress
	 * @param AmazonEc2TypeResourceTagSetType tagSet
	 * @return AmazonEc2TypeSecurityGroupItemType
	 */
	public function __construct($_ownerId = null,$_groupId = null,$_groupName = null,$_groupDescription = null,$_vpcId = null,$_ipPermissions = null,$_ipPermissionsEgress = null,$_tagSet = null)
	{
		parent::__construct(array('ownerId'=>$_ownerId,'groupId'=>$_groupId,'groupName'=>$_groupName,'groupDescription'=>$_groupDescription,'vpcId'=>$_vpcId,'ipPermissions'=>$_ipPermissions,'ipPermissionsEgress'=>$_ipPermissionsEgress,'tagSet'=>$_tagSet));
	}
	/**
	 * Set ownerId
	 * @param string ownerId
	 * @return string
	 */
	public function setOwnerId($_ownerId)
	{
		return ($this->ownerId = $_ownerId);
	}
	/**
	 * Get ownerId
	 * @return string
	 */
	public function getOwnerId()
	{
		return $this->ownerId;
	}
	/**
	 * Set groupId
	 * @param string groupId
	 * @return string
	 */
	public function setGroupId($_groupId)
	{
		return ($this->groupId = $_groupId);
	}
	/**
	 * Get groupId
	 * @return string
	 */
	public function getGroupId()
	{
		return $this->groupId;
	}
	/**
	 * Set groupName
	 * @param string groupName
	 * @return string
	 */
	public function setGroupName($_groupName)
	{
		return ($this->groupName = $_groupName);
	}
	/**
	 * Get groupName
	 * @return string
	 */
	public function getGroupName()
	{
		return $this->groupName;
	}
	/**
	 * Set groupDescription
	 * @param string groupDescription
	 * @return string
	 */
	public function setGroupDescription($_groupDescription)
	{
		return ($this->groupDescription = $_groupDescription);
	}
	/**
	 * Get groupDescription
	 * @return string
	 */
	public function getGroupDescription()
	{
		return $this->groupDescription;
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
	 * Set ipPermissions
	 * @param IpPermissionSetType ipPermissions
	 * @return IpPermissionSetType
	 */
	public function setIpPermissions($_ipPermissions)
	{
		return ($this->ipPermissions = $_ipPermissions);
	}
	/**
	 * Get ipPermissions
	 * @return AmazonEc2TypeIpPermissionSetType
	 */
	public function getIpPermissions()
	{
		return $this->ipPermissions;
	}
	/**
	 * Set ipPermissionsEgress
	 * @param IpPermissionSetType ipPermissionsEgress
	 * @return IpPermissionSetType
	 */
	public function setIpPermissionsEgress($_ipPermissionsEgress)
	{
		return ($this->ipPermissionsEgress = $_ipPermissionsEgress);
	}
	/**
	 * Get ipPermissionsEgress
	 * @return AmazonEc2TypeIpPermissionSetType
	 */
	public function getIpPermissionsEgress()
	{
		return $this->ipPermissionsEgress;
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