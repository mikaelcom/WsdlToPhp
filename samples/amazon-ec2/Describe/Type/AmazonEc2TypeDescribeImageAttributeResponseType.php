<?php
/**
 * Class file for AmazonEc2TypeDescribeImageAttributeResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeImageAttributeResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeImageAttributeResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The imageId
	 * @var string
	 */
	public $imageId;
	/**
	 * The launchPermission
	 * @var AmazonEc2TypeLaunchPermissionListType
	 */
	public $launchPermission;
	/**
	 * The productCodes
	 * @var AmazonEc2TypeProductCodesSetType
	 */
	public $productCodes;
	/**
	 * The kernel
	 * @var AmazonEc2TypeNullableAttributeValueType
	 */
	public $kernel;
	/**
	 * The ramdisk
	 * @var AmazonEc2TypeNullableAttributeValueType
	 */
	public $ramdisk;
	/**
	 * The description
	 * @var AmazonEc2TypeNullableAttributeValueType
	 */
	public $description;
	/**
	 * The blockDeviceMapping
	 * @var AmazonEc2TypeBlockDeviceMappingType
	 */
	public $blockDeviceMapping;
	/**
	 * Constructor
	 * @param string requestId
	 * @param string imageId
	 * @param AmazonEc2TypeLaunchPermissionListType launchPermission
	 * @param AmazonEc2TypeProductCodesSetType productCodes
	 * @param AmazonEc2TypeNullableAttributeValueType kernel
	 * @param AmazonEc2TypeNullableAttributeValueType ramdisk
	 * @param AmazonEc2TypeNullableAttributeValueType description
	 * @param AmazonEc2TypeBlockDeviceMappingType blockDeviceMapping
	 * @return AmazonEc2TypeDescribeImageAttributeResponseType
	 */
	public function __construct($_requestId = null,$_imageId = null,$_launchPermission = null,$_productCodes = null,$_kernel = null,$_ramdisk = null,$_description = null,$_blockDeviceMapping = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'imageId'=>$_imageId,'launchPermission'=>$_launchPermission,'productCodes'=>$_productCodes,'kernel'=>$_kernel,'ramdisk'=>$_ramdisk,'description'=>$_description,'blockDeviceMapping'=>$_blockDeviceMapping));
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
	 * Set imageId
	 * @param string imageId
	 * @return string
	 */
	public function setImageId($_imageId)
	{
		return ($this->imageId = $_imageId);
	}
	/**
	 * Get imageId
	 * @return string
	 */
	public function getImageId()
	{
		return $this->imageId;
	}
	/**
	 * Set launchPermission
	 * @param LaunchPermissionListType launchPermission
	 * @return LaunchPermissionListType
	 */
	public function setLaunchPermission($_launchPermission)
	{
		return ($this->launchPermission = $_launchPermission);
	}
	/**
	 * Get launchPermission
	 * @return AmazonEc2TypeLaunchPermissionListType
	 */
	public function getLaunchPermission()
	{
		return $this->launchPermission;
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
	 * Set kernel
	 * @param NullableAttributeValueType kernel
	 * @return NullableAttributeValueType
	 */
	public function setKernel($_kernel)
	{
		return ($this->kernel = $_kernel);
	}
	/**
	 * Get kernel
	 * @return AmazonEc2TypeNullableAttributeValueType
	 */
	public function getKernel()
	{
		return $this->kernel;
	}
	/**
	 * Set ramdisk
	 * @param NullableAttributeValueType ramdisk
	 * @return NullableAttributeValueType
	 */
	public function setRamdisk($_ramdisk)
	{
		return ($this->ramdisk = $_ramdisk);
	}
	/**
	 * Get ramdisk
	 * @return AmazonEc2TypeNullableAttributeValueType
	 */
	public function getRamdisk()
	{
		return $this->ramdisk;
	}
	/**
	 * Set description
	 * @param NullableAttributeValueType description
	 * @return NullableAttributeValueType
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return AmazonEc2TypeNullableAttributeValueType
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set blockDeviceMapping
	 * @param BlockDeviceMappingType blockDeviceMapping
	 * @return BlockDeviceMappingType
	 */
	public function setBlockDeviceMapping($_blockDeviceMapping)
	{
		return ($this->blockDeviceMapping = $_blockDeviceMapping);
	}
	/**
	 * Get blockDeviceMapping
	 * @return AmazonEc2TypeBlockDeviceMappingType
	 */
	public function getBlockDeviceMapping()
	{
		return $this->blockDeviceMapping;
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