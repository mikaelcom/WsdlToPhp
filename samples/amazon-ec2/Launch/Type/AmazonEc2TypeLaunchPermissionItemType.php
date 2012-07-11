<?php
/**
 * Class file for AmazonEc2TypeLaunchPermissionItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeLaunchPermissionItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeLaunchPermissionItemType extends AmazonEc2WsdlClass
{
	/**
	 * The userId
	 * @var string
	 */
	public $userId;
	/**
	 * The group
	 * @var string
	 */
	public $group;
	/**
	 * Constructor
	 * @param string userId
	 * @param string group
	 * @return AmazonEc2TypeLaunchPermissionItemType
	 */
	public function __construct($_userId = null,$_group = null)
	{
		parent::__construct(array('userId'=>$_userId,'group'=>$_group));
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
	 * Set group
	 * @param string group
	 * @return string
	 */
	public function setGroup($_group)
	{
		return ($this->group = $_group);
	}
	/**
	 * Get group
	 * @return string
	 */
	public function getGroup()
	{
		return $this->group;
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