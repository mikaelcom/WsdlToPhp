<?php
/**
 * Class file for AmazonEc2TypeDescribeSnapshotAttributeResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeSnapshotAttributeResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeSnapshotAttributeResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The snapshotId
	 * @var string
	 */
	public $snapshotId;
	/**
	 * The createVolumePermission
	 * @var AmazonEc2TypeCreateVolumePermissionListType
	 */
	public $createVolumePermission;
	/**
	 * The productCodes
	 * @var AmazonEc2TypeProductCodesSetType
	 */
	public $productCodes;
	/**
	 * Constructor
	 * @param string requestId
	 * @param string snapshotId
	 * @param AmazonEc2TypeCreateVolumePermissionListType createVolumePermission
	 * @param AmazonEc2TypeProductCodesSetType productCodes
	 * @return AmazonEc2TypeDescribeSnapshotAttributeResponseType
	 */
	public function __construct($_requestId = null,$_snapshotId = null,$_createVolumePermission = null,$_productCodes = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'snapshotId'=>$_snapshotId,'createVolumePermission'=>$_createVolumePermission,'productCodes'=>$_productCodes));
	}
	/**
	 * Set requestId
	 * @param string requestId
	 * @return string
	 */
	public function setRequestId($_requestId)
	{
		return ($this->requestId = $_requestId);
	}
	/**
	 * Get requestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->requestId;
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
	 * @param CreateVolumePermissionListType createVolumePermission
	 * @return CreateVolumePermissionListType
	 */
	public function setCreateVolumePermission($_createVolumePermission)
	{
		return ($this->createVolumePermission = $_createVolumePermission);
	}
	/**
	 * Get createVolumePermission
	 * @return AmazonEc2TypeCreateVolumePermissionListType
	 */
	public function getCreateVolumePermission()
	{
		return $this->createVolumePermission;
	}
	/**
	 * Set productCodes
	 * @param ProductCodesSetType productCodes
	 * @return ProductCodesSetType
	 */
	public function setProductCodes($_productCodes)
	{
		return ($this->productCodes = $_productCodes);
	}
	/**
	 * Get productCodes
	 * @return AmazonEc2TypeProductCodesSetType
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