<?php
/**
 * Class file for AmazonEc2TypeModifySnapshotAttributeType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeModifySnapshotAttributeType
 * @date 10/07/2012
 */
class AmazonEc2TypeModifySnapshotAttributeType extends AmazonEc2WsdlClass
{
	/**
	 * The snapshotId
	 * @var string
	 */
	public $snapshotId;
	/**
	 * The createVolumePermission
	 * @var AmazonEc2TypeCreateVolumePermissionOperationType
	 */
	public $createVolumePermission;
	/**
	 * Constructor
	 * @param string snapshotId
	 * @param AmazonEc2TypeCreateVolumePermissionOperationType createVolumePermission
	 * @return AmazonEc2TypeModifySnapshotAttributeType
	 */
	public function __construct($_snapshotId = null,$_createVolumePermission = null)
	{
		parent::__construct(array('snapshotId'=>$_snapshotId,'createVolumePermission'=>$_createVolumePermission));
	}
	/**
	 * Set snapshotId
	 * @param string snapshotId
	 * @return string
	 */
	public function setSnapshotId($_snapshotId)
	{
		return ($this->snapshotId = $_snapshotId);
	}
	/**
	 * Get snapshotId
	 * @return string
	 */
	public function getSnapshotId()
	{
		return $this->snapshotId;
	}
	/**
	 * Set createVolumePermission
	 * @param CreateVolumePermissionOperationType createVolumePermission
	 * @return CreateVolumePermissionOperationType
	 */
	public function setCreateVolumePermission($_createVolumePermission)
	{
		return ($this->createVolumePermission = $_createVolumePermission);
	}
	/**
	 * Get createVolumePermission
	 * @return AmazonEc2TypeCreateVolumePermissionOperationType
	 */
	public function getCreateVolumePermission()
	{
		return $this->createVolumePermission;
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