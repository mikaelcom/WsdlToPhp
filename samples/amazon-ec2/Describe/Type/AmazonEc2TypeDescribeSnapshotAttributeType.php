<?php
/**
 * Class file for AmazonEc2TypeDescribeSnapshotAttributeType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeSnapshotAttributeType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeSnapshotAttributeType extends AmazonEc2WsdlClass
{
	/**
	 * The snapshotId
	 * @var string
	 */
	public $snapshotId;
	/**
	 * The createVolumePermission
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $createVolumePermission;
	/**
	 * The productCodes
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $productCodes;
	/**
	 * Constructor
	 * @param string snapshotId
	 * @param AmazonEc2TypeEmptyElementType createVolumePermission
	 * @param AmazonEc2TypeEmptyElementType productCodes
	 * @return AmazonEc2TypeDescribeSnapshotAttributeType
	 */
	public function __construct($_snapshotId = null,$_createVolumePermission = null,$_productCodes = null)
	{
		parent::__construct(array('snapshotId'=>$_snapshotId,'createVolumePermission'=>$_createVolumePermission,'productCodes'=>$_productCodes));
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
	 * @param EmptyElementType createVolumePermission
	 * @return EmptyElementType
	 */
	public function setCreateVolumePermission($_createVolumePermission)
	{
		return ($this->createVolumePermission = $_createVolumePermission);
	}
	/**
	 * Get createVolumePermission
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getCreateVolumePermission()
	{
		return $this->createVolumePermission;
	}
	/**
	 * Set productCodes
	 * @param EmptyElementType productCodes
	 * @return EmptyElementType
	 */
	public function setProductCodes($_productCodes)
	{
		return ($this->productCodes = $_productCodes);
	}
	/**
	 * Get productCodes
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getProductCodes()
	{
		return $this->productCodes;
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