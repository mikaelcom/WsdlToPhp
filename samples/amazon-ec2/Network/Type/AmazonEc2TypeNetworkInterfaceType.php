<?php
/**
 * Class file for AmazonEc2TypeNetworkInterfaceType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeNetworkInterfaceType
 * @date 10/07/2012
 */
class AmazonEc2TypeNetworkInterfaceType extends AmazonEc2WsdlClass
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
	 * The availabilityZone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $availabilityZone;
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
	 * The requesterId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $requesterId;
	/**
	 * The requesterManaged
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $requesterManaged;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The macAddress
	 * @var string
	 */
	public $macAddress;
	/**
	 * The privateIpAddress
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
	 * @var boolean
	 */
	public $sourceDestCheck;
	/**
	 * The groupSet
	 * @var AmazonEc2TypeGroupSetType
	 */
	public $groupSet;
	/**
	 * The attachment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeNetworkInterfaceAttachmentType
	 */
	public $attachment;
	/**
	 * The association
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeNetworkInterfaceAssociationType
	 */
	public $association;
	/**
	 * The tagSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeResourceTagSetType
	 */
	public $tagSet;
	/**
	 * The privateIpAddressesSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeNetworkInterfacePrivateIpAddressesSetType
	 */
	public $privateIpAddressesSet;
	/**
	 * Constructor
	 * @param string networkInterfaceId
	 * @param string subnetId
	 * @param string vpcId
	 * @param string availabilityZone
	 * @param string description
	 * @param string ownerId
	 * @param string requesterId
	 * @param boolean requesterManaged
	 * @param string status
	 * @param string macAddress
	 * @param string privateIpAddress
	 * @param string privateDnsName
	 * @param boolean sourceDestCheck
	 * @param AmazonEc2TypeGroupSetType groupSet
	 * @param AmazonEc2TypeNetworkInterfaceAttachmentType attachment
	 * @param AmazonEc2TypeNetworkInterfaceAssociationType association
	 * @param AmazonEc2TypeResourceTagSetType tagSet
	 * @param AmazonEc2TypeNetworkInterfacePrivateIpAddressesSetType privateIpAddressesSet
	 * @return AmazonEc2TypeNetworkInterfaceType
	 */
	public function __construct($_networkInterfaceId = null,$_subnetId = null,$_vpcId = null,$_availabilityZone = null,$_description = null,$_ownerId = null,$_requesterId = null,$_requesterManaged = null,$_status = null,$_macAddress = null,$_privateIpAddress = null,$_privateDnsName = null,$_sourceDestCheck = null,$_groupSet = null,$_attachment = null,$_association = null,$_tagSet = null,$_privateIpAddressesSet = null)
	{
		parent::__construct(array('networkInterfaceId'=>$_networkInterfaceId,'subnetId'=>$_subnetId,'vpcId'=>$_vpcId,'availabilityZone'=>$_availabilityZone,'description'=>$_description,'ownerId'=>$_ownerId,'requesterId'=>$_requesterId,'requesterManaged'=>$_requesterManaged,'status'=>$_status,'macAddress'=>$_macAddress,'privateIpAddress'=>$_privateIpAddress,'privateDnsName'=>$_privateDnsName,'sourceDestCheck'=>$_sourceDestCheck,'groupSet'=>$_groupSet,'attachment'=>$_attachment,'association'=>$_association,'tagSet'=>$_tagSet,'privateIpAddressesSet'=>$_privateIpAddressesSet));
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
	 * Set requesterId
	 * @param string requesterId
	 * @return string
	 */
	public function setRequesterId($_requesterId)
	{
		return ($this->requesterId = $_requesterId);
	}
	/**
	 * Get requesterId
	 * @return string
	 */
	public function getRequesterId()
	{
		return $this->requesterId;
	}
	/**
	 * Set requesterManaged
	 * @param boolean requesterManaged
	 * @return boolean
	 */
	public function setRequesterManaged($_requesterManaged)
	{
		return ($this->requesterManaged = $_requesterManaged);
	}
	/**
	 * Get requesterManaged
	 * @return boolean
	 */
	public function getRequesterManaged()
	{
		return $this->requesterManaged;
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
	 * Set macAddress
	 * @param string macAddress
	 * @return string
	 */
	public function setMacAddress($_macAddress)
	{
		return ($this->macAddress = $_macAddress);
	}
	/**
	 * Get macAddress
	 * @return string
	 */
	public function getMacAddress()
	{
		return $this->macAddress;
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
	 * @param NetworkInterfaceAttachmentType attachment
	 * @return NetworkInterfaceAttachmentType
	 */
	public function setAttachment($_attachment)
	{
		return ($this->attachment = $_attachment);
	}
	/**
	 * Get attachment
	 * @return AmazonEc2TypeNetworkInterfaceAttachmentType
	 */
	public function getAttachment()
	{
		return $this->attachment;
	}
	/**
	 * Set association
	 * @param NetworkInterfaceAssociationType association
	 * @return NetworkInterfaceAssociationType
	 */
	public function setAssociation($_association)
	{
		return ($this->association = $_association);
	}
	/**
	 * Get association
	 * @return AmazonEc2TypeNetworkInterfaceAssociationType
	 */
	public function getAssociation()
	{
		return $this->association;
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
	 * Set privateIpAddressesSet
	 * @param NetworkInterfacePrivateIpAddressesSetType privateIpAddressesSet
	 * @return NetworkInterfacePrivateIpAddressesSetType
	 */
	public function setPrivateIpAddressesSet($_privateIpAddressesSet)
	{
		return ($this->privateIpAddressesSet = $_privateIpAddressesSet);
	}
	/**
	 * Get privateIpAddressesSet
	 * @return AmazonEc2TypeNetworkInterfacePrivateIpAddressesSetType
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