<?php
/**
 * Class file for AmazonEc2TypeCreateVolumePermissionOperationType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateVolumePermissionOperationType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateVolumePermissionOperationType extends AmazonEc2WsdlClass
{
	/**
	 * The add
	 * @var AmazonEc2TypeCreateVolumePermissionListType
	 */
	public $add;
	/**
	 * The remove
	 * @var AmazonEc2TypeCreateVolumePermissionListType
	 */
	public $remove;
	/**
	 * Constructor
	 * @param AmazonEc2TypeCreateVolumePermissionListType add
	 * @param AmazonEc2TypeCreateVolumePermissionListType remove
	 * @return AmazonEc2TypeCreateVolumePermissionOperationType
	 */
	public function __construct($_add = null,$_remove = null)
	{
		parent::__construct(array('add'=>$_add,'remove'=>$_remove));
	}
	/**
	 * Set add
	 * @param CreateVolumePermissionListType add
	 * @return CreateVolumePermissionListType
	 */
	public function setAdd($_add)
	{
		return ($this->add = $_add);
	}
	/**
	 * Get add
	 * @return AmazonEc2TypeCreateVolumePermissionListType
	 */
	public function getAdd()
	{
		return $this->add;
	}
	/**
	 * Set remove
	 * @param CreateVolumePermissionListType remove
	 * @return CreateVolumePermissionListType
	 */
	public function setRemove($_remove)
	{
		return ($this->remove = $_remove);
	}
	/**
	 * Get remove
	 * @return AmazonEc2TypeCreateVolumePermissionListType
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