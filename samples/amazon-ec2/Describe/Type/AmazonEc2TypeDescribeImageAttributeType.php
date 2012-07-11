<?php
/**
 * Class file for AmazonEc2TypeDescribeImageAttributeType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeImageAttributeType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeImageAttributeType extends AmazonEc2WsdlClass
{
	/**
	 * The imageId
	 * @var string
	 */
	public $imageId;
	/**
	 * The launchPermission
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $launchPermission;
	/**
	 * The productCodes
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $productCodes;
	/**
	 * The kernel
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $kernel;
	/**
	 * The ramdisk
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $ramdisk;
	/**
	 * The blockDeviceMapping
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $blockDeviceMapping;
	/**
	 * The description
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $description;
	/**
	 * The instanceTypeCategory
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $instanceTypeCategory;
	/**
	 * Constructor
	 * @param string imageId
	 * @param AmazonEc2TypeEmptyElementType launchPermission
	 * @param AmazonEc2TypeEmptyElementType productCodes
	 * @param AmazonEc2TypeEmptyElementType kernel
	 * @param AmazonEc2TypeEmptyElementType ramdisk
	 * @param AmazonEc2TypeEmptyElementType blockDeviceMapping
	 * @param AmazonEc2TypeEmptyElementType description
	 * @param AmazonEc2TypeEmptyElementType instanceTypeCategory
	 * @return AmazonEc2TypeDescribeImageAttributeType
	 */
	public function __construct($_imageId = null,$_launchPermission = null,$_productCodes = null,$_kernel = null,$_ramdisk = null,$_blockDeviceMapping = null,$_description = null,$_instanceTypeCategory = null)
	{
		parent::__construct(array('imageId'=>$_imageId,'launchPermission'=>$_launchPermission,'productCodes'=>$_productCodes,'kernel'=>$_kernel,'ramdisk'=>$_ramdisk,'blockDeviceMapping'=>$_blockDeviceMapping,'description'=>$_description,'instanceTypeCategory'=>$_instanceTypeCategory));
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
	 * @param EmptyElementType launchPermission
	 * @return EmptyElementType
	 */
	public function setLaunchPermission($_launchPermission)
	{
		return ($this->launchPermission = $_launchPermission);
	}
	/**
	 * Get launchPermission
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getLaunchPermission()
	{
		return $this->launchPermission;
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
	 * Set kernel
	 * @param EmptyElementType kernel
	 * @return EmptyElementType
	 */
	public function setKernel($_kernel)
	{
		return ($this->kernel = $_kernel);
	}
	/**
	 * Get kernel
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getKernel()
	{
		return $this->kernel;
	}
	/**
	 * Set ramdisk
	 * @param EmptyElementType ramdisk
	 * @return EmptyElementType
	 */
	public function setRamdisk($_ramdisk)
	{
		return ($this->ramdisk = $_ramdisk);
	}
	/**
	 * Get ramdisk
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getRamdisk()
	{
		return $this->ramdisk;
	}
	/**
	 * Set blockDeviceMapping
	 * @param EmptyElementType blockDeviceMapping
	 * @return EmptyElementType
	 */
	public function setBlockDeviceMapping($_blockDeviceMapping)
	{
		return ($this->blockDeviceMapping = $_blockDeviceMapping);
	}
	/**
	 * Get blockDeviceMapping
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getBlockDeviceMapping()
	{
		return $this->blockDeviceMapping;
	}
	/**
	 * Set description
	 * @param EmptyElementType description
	 * @return EmptyElementType
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set instanceTypeCategory
	 * @param EmptyElementType instanceTypeCategory
	 * @return EmptyElementType
	 */
	public function setInstanceTypeCategory($_instanceTypeCategory)
	{
		return ($this->instanceTypeCategory = $_instanceTypeCategory);
	}
	/**
	 * Get instanceTypeCategory
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getInstanceTypeCategory()
	{
		return $this->instanceTypeCategory;
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