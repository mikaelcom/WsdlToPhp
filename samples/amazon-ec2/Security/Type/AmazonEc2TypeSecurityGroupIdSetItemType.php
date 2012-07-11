<?php
/**
 * Class file for AmazonEc2TypeSecurityGroupIdSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeSecurityGroupIdSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeSecurityGroupIdSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The groupId
	 * @var string
	 */
	public $groupId;
	/**
	 * Constructor
	 * @param string groupId
	 * @return AmazonEc2TypeSecurityGroupIdSetItemType
	 */
	public function __construct($_groupId = null)
	{
		parent::__construct(array('groupId'=>$_groupId));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>