<?php
/**
 * Class file for AmazonEc2TypeInstanceNetworkInterfaceSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceNetworkInterfaceSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceNetworkInterfaceSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The networkInterfaceId
	 * @var string
	 */
	public $networkInterfaceId;
	/**
	 * The subnetId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $subnetId;
	/**
	 * The vpcId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $vpcId;
	/**
	 * The description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $description;
	/**
	 * The ownerId
	 * @var string
	 */
	public $ownerId;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The privateIpAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $privateIpAddress;
	/**
	 * The privateDnsName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $privateDnsName;
	/**
	 * The sourceDestCheck
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $sourceDestCheck;
	/**
	 * The groupSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeGroupSetType
	 */
	public $groupSet;
	/**
	 * The attachment
	 * @var AmazonEc2TypeInstanceNetworkInterfaceAttachmentType
	 */
	public $attachment;
	/**
	 * The association
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeInstanceNetworkInterfaceAssociationType
	 */
	public $association;
	/**
	 * The privateIpAddressesSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeInstancePrivateIpAddressesSetType
	 */
	public $privateIpAddressesSet;
	/**
	 * Constructor
	 * @param string networkInterfaceId
	 * @param string subnetId
	 * @param string vpcId
	 * @param string description
	 * @param string ownerId
	 * @param string status
	 * @param string privateIpAddress
	 * @param string privateDnsName
	 * @param boolean sourceDestCheck
	 * @param AmazonEc2TypeGroupSetType groupSet
	 * @param AmazonEc2TypeInstanceNetworkInterfaceAttachmentType attachment
	 * @param AmazonEc2TypeInstanceNetworkInterfaceAssociationType association
	 * @param AmazonEc2TypeInstancePrivateIpAddressesSetType privateIpAddressesSet
	 * @return AmazonEc2TypeInstanceNetworkInterfaceSetItemType
	 */
	public function __construct($_networkInterfaceId = null,$_subnetId = null,$_vpcId = null,$_description = null,$_ownerId = null,$_status = null,$_privateIpAddress = null,$_privateDnsName = null,$_sourceDestCheck = null,$_groupSet = null,$_attachment = null,$_association = null,$_privateIpAddressesSet = null)
	{
		parent::__construct(array('networkInterfaceId'=>$_networkInterfaceId,'subnetId'=>$_subnetId,'vpcId'=>$_vpcId,'description'=>$_description,'ownerId'=>$_ownerId,'status'=>$_status,'privateIpAddress'=>$_privateIpAddress,'privateDnsName'=>$_privateDnsName,'sourceDestCheck'=>$_sourceDestCheck,'groupSet'=>$_groupSet,'attachment'=>$_attachment,'association'=>$_association,'privateIpAddressesSet'=>$_privateIpAddressesSet));
	}
	/**
	 * Set networkInterfaceId
	 * @param string networkInterfaceId
	 * @return string
	 */
	public function setNetworkInterfaceId($_networkInterfaceId)
	{
		return ($this->networkInterfaceId = $_networkInterfaceId);
	}
	/**
	 * Get networkInterfaceId
	 * @return string
	 */
	public function getNetworkInterfaceId()
	{
		return $this->networkInterfaceId;
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
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
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
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set privateIpAddress
	 * @param string privateIpAddress
	 * @return string
	 */
	public function setPrivateIpAddress($_privateIpAddress)
	{
		return ($this->privateIpAddress = $_privateIpAddress);
	}
	/**
	 * Get privateIpAddress
	 * @return string
	 */
	public function getPrivateIpAddress()
	{
		return $this->privateIpAddress;
	}
	/**
	 * Set privateDnsName
	 * @param string privateDnsName
	 * @return string
	 */
	public function setPrivateDnsName($_privateDnsName)
	{
		return ($this->privateDnsName = $_privateDnsName);
	}
	/**
	 * Get privateDnsName
	 * @return string
	 */
	public function getPrivateDnsName()
	{
		return $this->privateDnsName;
	}
	/**
	 * Set sourceDestCheck
	 * @param boolean sourceDestCheck
	 * @return boolean
	 */
	public function setSourceDestCheck($_sourceDestCheck)
	{
		return ($this->sourceDestCheck = $_sourceDestCheck);
	}
	/**
	 * Get sourceDestCheck
	 * @return boolean
	 */
	public function getSourceDestCheck()
	{
		return $this->sourceDestCheck;
	}
	/**
	 * Set groupSet
	 * @param GroupSetType groupSet
	 * @return GroupSetType
	 */
	public function setGroupSet($_groupSet)
	{
		return ($this->groupSet = $_groupSet);
	}
	/**
	 * Get groupSet
	 * @return AmazonEc2TypeGroupSetType
	 */
	public function getGroupSet()
	{
		return $this->groupSet;
	}
	/**
	 * Set attachment
	 * @param InstanceNetworkInterfaceAttachmentType attachment
	 * @return InstanceNetworkInterfaceAttachmentType
	 */
	public function setAttachment($_attachment)
	{
		return ($this->attachment = $_attachment);
	}
	/**
	 * Get attachment
	 * @return AmazonEc2TypeInstanceNetworkInterfaceAttachmentType
	 */
	public function getAttachment()
	{
		return $this->attachment;
	}
	/**
	 * Set association
	 * @param InstanceNetworkInterfaceAssociationType association
	 * @return InstanceNetworkInterfaceAssociationType
	 */
	public function setAssociation($_association)
	{
		return ($this->association = $_association);
	}
	/**
	 * Get association
	 * @return AmazonEc2TypeInstanceNetworkInterfaceAssociationType
	 */
	public function getAssociation()
	{
		return $this->association;
	}
	/**
	 * Set privateIpAddressesSet
	 * @param InstancePrivateIpAddressesSetType privateIpAddressesSet
	 * @return InstancePrivateIpAddressesSetType
	 */
	public function setPrivateIpAddressesSet($_privateIpAddressesSet)
	{
		return ($this->privateIpAddressesSet = $_privateIpAddressesSet);
	}
	/**
	 * Get privateIpAddressesSet
	 * @return AmazonEc2TypeInstancePrivateIpAddressesSetType
	 */
	public function getPrivateIpAddressesSet()
	{
		return $this->privateIpAddressesSet;
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