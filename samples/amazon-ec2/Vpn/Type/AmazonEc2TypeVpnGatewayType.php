<?php
/**
 * Class file for AmazonEc2TypeVpnGatewayType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeVpnGatewayType
 * @date 10/07/2012
 */
class AmazonEc2TypeVpnGatewayType extends AmazonEc2WsdlClass
{
	/**
	 * The vpnGatewayId
	 * @var string
	 */
	public $vpnGatewayId;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The availabilityZone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $availabilityZone;
	/**
	 * The attachments
	 * @var AmazonEc2TypeAttachmentSetType
	 */
	public $attachments;
	/**
	 * The tagSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeResourceTagSetType
	 */
	public $tagSet;
	/**
	 * Constructor
	 * @param string vpnGatewayId
	 * @param string state
	 * @param string type
	 * @param string availabilityZone
	 * @param AmazonEc2TypeAttachmentSetType attachments
	 * @param AmazonEc2TypeResourceTagSetType tagSet
	 * @return AmazonEc2TypeVpnGatewayType
	 */
	public function __construct($_vpnGatewayId = null,$_state = null,$_type = null,$_availabilityZone = null,$_attachments = null,$_tagSet = null)
	{
		parent::__construct(array('vpnGatewayId'=>$_vpnGatewayId,'state'=>$_state,'type'=>$_type,'availabilityZone'=>$_availabilityZone,'attachments'=>$_attachments,'tagSet'=>$_tagSet));
	}
	/**
	 * Set vpnGatewayId
	 * @param string vpnGatewayId
	 * @return string
	 */
	public function setVpnGatewayId($_vpnGatewayId)
	{
		return ($this->vpnGatewayId = $_vpnGatewayId);
	}
	/**
	 * Get vpnGatewayId
	 * @return string
	 */
	public function getVpnGatewayId()
	{
		return $this->vpnGatewayId;
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
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
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
	 * Set attachments
	 * @param AttachmentSetType attachments
	 * @return AttachmentSetType
	 */
	public function setAttachments($_attachments)
	{
		return ($this->attachments = $_attachments);
	}
	/**
	 * Get attachments
	 * @return AmazonEc2TypeAttachmentSetType
	 */
	public function getAttachments()
	{
		return $this->attachments;
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