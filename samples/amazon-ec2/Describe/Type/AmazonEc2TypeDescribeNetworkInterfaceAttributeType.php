<?php
/**
 * Class file for AmazonEc2TypeDescribeNetworkInterfaceAttributeType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeNetworkInterfaceAttributeType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeNetworkInterfaceAttributeType extends AmazonEc2WsdlClass
{
	/**
	 * The networkInterfaceId
	 * @var string
	 */
	public $networkInterfaceId;
	/**
	 * The description
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $description;
	/**
	 * The sourceDestCheck
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $sourceDestCheck;
	/**
	 * The groupSet
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $groupSet;
	/**
	 * The attachment
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $attachment;
	/**
	 * Constructor
	 * @param string networkInterfaceId
	 * @param AmazonEc2TypeEmptyElementType description
	 * @param AmazonEc2TypeEmptyElementType sourceDestCheck
	 * @param AmazonEc2TypeEmptyElementType groupSet
	 * @param AmazonEc2TypeEmptyElementType attachment
	 * @return AmazonEc2TypeDescribeNetworkInterfaceAttributeType
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
	 * @param EmptyElementType description
	 * @return EmptyElementType
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set sourceDestCheck
	 * @param EmptyElementType sourceDestCheck
	 * @return EmptyElementType
	 */
	public function setSourceDestCheck($_sourceDestCheck)
	{
		return ($this->sourceDestCheck = $_sourceDestCheck);
	}
	/**
	 * Get sourceDestCheck
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getSourceDestCheck()
	{
		return $this->sourceDestCheck;
	}
	/**
	 * Set groupSet
	 * @param EmptyElementType groupSet
	 * @return EmptyElementType
	 */
	public function setGroupSet($_groupSet)
	{
		return ($this->groupSet = $_groupSet);
	}
	/**
	 * Get groupSet
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getGroupSet()
	{
		return $this->groupSet;
	}
	/**
	 * Set attachment
	 * @param EmptyElementType attachment
	 * @return EmptyElementType
	 */
	public function setAttachment($_attachment)
	{
		return ($this->attachment = $_attachment);
	}
	/**
	 * Get attachment
	 * @return AmazonEc2TypeEmptyElementType
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