<?php
/**
 * Class file for AmazonEc2TypeUserIdGroupPairType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeUserIdGroupPairType
 * @date 10/07/2012
 */
class AmazonEc2TypeUserIdGroupPairType extends AmazonEc2WsdlClass
{
	/**
	 * The userId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $userId;
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
	 * @param string userId
	 * @param string groupId
	 * @param string groupName
	 * @return AmazonEc2TypeUserIdGroupPairType
	 */
	public function __construct($_userId = null,$_groupId = null,$_groupName = null)
	{
		parent::__construct(array('userId'=>$_userId,'groupId'=>$_groupId,'groupName'=>$_groupName));
	}
	/**
	 * Set userId
	 * @param string userId
	 * @return string
	 */
	public function setUserId($_userId)
	{
		return ($this->userId = $_userId);
	}
	/**
	 * Get userId
	 * @return string
	 */
	public function getUserId()
	{
		return $this->userId;
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