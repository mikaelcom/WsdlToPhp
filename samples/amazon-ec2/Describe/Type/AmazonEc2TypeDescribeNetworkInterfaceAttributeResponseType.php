<?php
/**
 * Class file for AmazonEc2TypeDescribeNetworkInterfaceAttributeResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeNetworkInterfaceAttributeResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeNetworkInterfaceAttributeResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
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
	 * @var AmazonEc2TypeGroupSetType
	 */
	public $groupSet;
	/**
	 * The attachment
	 * @var AmazonEc2TypeNetworkInterfaceAttachmentType
	 */
	public $attachment;
	/**
	 * Constructor
	 * @param string requestId
	 * @param string networkInterfaceId
	 * @param AmazonEc2TypeNullableAttributeValueType description
	 * @param AmazonEc2TypeAttributeBooleanValueType sourceDestCheck
	 * @param AmazonEc2TypeGroupSetType groupSet
	 * @param AmazonEc2TypeNetworkInterfaceAttachmentType attachment
	 * @return AmazonEc2TypeDescribeNetworkInterfaceAttributeResponseType
	 */
	public function __construct($_requestId = null,$_networkInterfaceId = null,$_description = null,$_sourceDestCheck = null,$_groupSet = null,$_attachment = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'networkInterfaceId'=>$_networkInterfaceId,'description'=>$_description,'sourceDestCheck'=>$_sourceDestCheck,'groupSet'=>$_groupSet,'attachment'=>$_attachment));
	}
	/**
	 * Set requestId
	 * @param string requestId
	 * @return string
	 */
	public function setRequestId($_requestId)
	{
		return ($this->requestId = $_requestId);
	}
	/**
	 * Get requestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->requestId;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>