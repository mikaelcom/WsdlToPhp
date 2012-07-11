<?php
/**
 * Class file for AmazonEc2TypeLaunchPermissionOperationType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeLaunchPermissionOperationType
 * @date 10/07/2012
 */
class AmazonEc2TypeLaunchPermissionOperationType extends AmazonEc2WsdlClass
{
	/**
	 * The add
	 * @var AmazonEc2TypeLaunchPermissionListType
	 */
	public $add;
	/**
	 * The remove
	 * @var AmazonEc2TypeLaunchPermissionListType
	 */
	public $remove;
	/**
	 * Constructor
	 * @param AmazonEc2TypeLaunchPermissionListType add
	 * @param AmazonEc2TypeLaunchPermissionListType remove
	 * @return AmazonEc2TypeLaunchPermissionOperationType
	 */
	public function __construct($_add = null,$_remove = null)
	{
		parent::__construct(array('add'=>$_add,'remove'=>$_remove));
	}
	/**
	 * Set add
	 * @param LaunchPermissionListType add
	 * @return LaunchPermissionListType
	 */
	public function setAdd($_add)
	{
		return ($this->add = $_add);
	}
	/**
	 * Get add
	 * @return AmazonEc2TypeLaunchPermissionListType
	 */
	public function getAdd()
	{
		return $this->add;
	}
	/**
	 * Set remove
	 * @param LaunchPermissionListType remove
	 * @return LaunchPermissionListType
	 */
	public function setRemove($_remove)
	{
		return ($this->remove = $_remove);
	}
	/**
	 * Get remove
	 * @return AmazonEc2TypeLaunchPermissionListType
	 */
	public function getRemove()
	{
		return $this->remove;
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