<?php
/**
 * Class file for AmazonEc2TypeInternetGatewayType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInternetGatewayType
 * @date 10/07/2012
 */
class AmazonEc2TypeInternetGatewayType extends AmazonEc2WsdlClass
{
	/**
	 * The internetGatewayId
	 * @var string
	 */
	public $internetGatewayId;
	/**
	 * The attachmentSet
	 * @var AmazonEc2TypeInternetGatewayAttachmentSetType
	 */
	public $attachmentSet;
	/**
	 * The tagSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeResourceTagSetType
	 */
	public $tagSet;
	/**
	 * Constructor
	 * @param string internetGatewayId
	 * @param AmazonEc2TypeInternetGatewayAttachmentSetType attachmentSet
	 * @param AmazonEc2TypeResourceTagSetType tagSet
	 * @return AmazonEc2TypeInternetGatewayType
	 */
	public function __construct($_internetGatewayId = null,$_attachmentSet = null,$_tagSet = null)
	{
		parent::__construct(array('internetGatewayId'=>$_internetGatewayId,'attachmentSet'=>$_attachmentSet,'tagSet'=>$_tagSet));
	}
	/**
	 * Set internetGatewayId
	 * @param string internetGatewayId
	 * @return string
	 */
	public function setInternetGatewayId($_internetGatewayId)
	{
		return ($this->internetGatewayId = $_internetGatewayId);
	}
	/**
	 * Get internetGatewayId
	 * @return string
	 */
	public function getInternetGatewayId()
	{
		return $this->internetGatewayId;
	}
	/**
	 * Set attachmentSet
	 * @param InternetGatewayAttachmentSetType attachmentSet
	 * @return InternetGatewayAttachmentSetType
	 */
	public function setAttachmentSet($_attachmentSet)
	{
		return ($this->attachmentSet = $_attachmentSet);
	}
	/**
	 * Get attachmentSet
	 * @return AmazonEc2TypeInternetGatewayAttachmentSetType
	 */
	public function getAttachmentSet()
	{
		return $this->attachmentSet;
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