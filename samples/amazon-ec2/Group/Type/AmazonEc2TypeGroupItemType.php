<?php
/**
 * Class file for AmazonEc2TypeGroupItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeGroupItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeGroupItemType extends AmazonEc2WsdlClass
{
	/**
	 * The groupId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $groupId;
	/**
	 * The groupName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $groupName;
	/**
	 * Constructor
	 * @param string groupId
	 * @param string groupName
	 * @return AmazonEc2TypeGroupItemType
	 */
	public function __construct($_groupId = null,$_groupName = null)
	{
		parent::__construct(array('groupId'=>$_groupId,'groupName'=>$_groupName));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>