<?php
/**
 * Class file for AmazonEc2TypeModifyNetworkInterfaceAttributeType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeModifyNetworkInterfaceAttributeType
 * @date 10/07/2012
 */
class AmazonEc2TypeModifyNetworkInterfaceAttributeType extends AmazonEc2WsdlClass
{
	/**
	 * The networkInterfaceId
	 * @var string
	 */
	public $networkInterfaceId;
	/**
	 * The description
	 * @var AmazonEc2TypeNullableAttributeValueType
	 */
	public $description;
	/**
	 * The sourceDestCheck
	 * @var AmazonEc2TypeAttributeBooleanValueType
	 */
	public $sourceDestCheck;
	/**
	 * The groupSet
	 * @var AmazonEc2TypeSecurityGroupIdSetType
	 */
	public $groupSet;
	/**
	 * The attachment
	 * @var AmazonEc2TypeModifyNetworkInterfaceAttachmentType
	 */
	public $attachment;
	/**
	 * Constructor
	 * @param string networkInterfaceId
	 * @param AmazonEc2TypeNullableAttributeValueType description
	 * @param AmazonEc2TypeAttributeBooleanValueType sourceDestCheck
	 * @param AmazonEc2TypeSecurityGroupIdSetType groupSet
	 * @param AmazonEc2TypeModifyNetworkInterfaceAttachmentType attachment
	 * @return AmazonEc2TypeModifyNetworkInterfaceAttributeType
	 */
	public function __construct($_networkInterfaceId = null,$_description = null,$_sourceDestCheck = null,$_groupSet = null,$_attachment = null)
	{
		parent::__construct(array('networkInterfaceId'=>$_networkInterfaceId,'description'=>$_description,'sourceDestCheck'=>$_sourceDestCheck,'groupSet'=>$_groupSet,'attachment'=>$_attachment));
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
	 * Set description
	 * @param NullableAttributeValueType description
	 * @return NullableAttributeValueType
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return AmazonEc2TypeNullableAttributeValueType
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set sourceDestCheck
	 * @param AttributeBooleanValueType sourceDestCheck
	 * @return AttributeBooleanValueType
	 */
	public function setSourceDestCheck($_sourceDestCheck)
	{
		return ($this->sourceDestCheck = $_sourceDestCheck);
	}
	/**
	 * Get sourceDestCheck
	 * @return AmazonEc2TypeAttributeBooleanValueType
	 */
	public function getSourceDestCheck()
	{
		return $this->sourceDestCheck;
	}
	/**
	 * Set groupSet
	 * @param SecurityGroupIdSetType groupSet
	 * @return SecurityGroupIdSetType
	 */
	public function setGroupSet($_groupSet)
	{
		return ($this->groupSet = $_groupSet);
	}
	/**
	 * Get groupSet
	 * @return AmazonEc2TypeSecurityGroupIdSetType
	 */
	public function getGroupSet()
	{
		return $this->groupSet;
	}
	/**
	 * Set attachment
	 * @param ModifyNetworkInterfaceAttachmentType attachment
	 * @return ModifyNetworkInterfaceAttachmentType
	 */
	public function setAttachment($_attachment)
	{
		return ($this->attachment = $_attachment);
	}
	/**
	 * Get attachment
	 * @return AmazonEc2TypeModifyNetworkInterfaceAttachmentType
	 */
	public function getAttachment()
	{
		return $this->attachment;
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