<?php
/**
 * Class file for AmazonEc2TypeModifyImageAttributeType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeModifyImageAttributeType
 * @date 10/07/2012
 */
class AmazonEc2TypeModifyImageAttributeType extends AmazonEc2WsdlClass
{
	/**
	 * The imageId
	 * @var string
	 */
	public $imageId;
	/**
	 * The launchPermission
	 * @var AmazonEc2TypeLaunchPermissionOperationType
	 */
	public $launchPermission;
	/**
	 * The productCodes
	 * @var AmazonEc2TypeProductCodeListType
	 */
	public $productCodes;
	/**
	 * The description
	 * @var AmazonEc2TypeAttributeValueType
	 */
	public $description;
	/**
	 * Constructor
	 * @param string imageId
	 * @param AmazonEc2TypeLaunchPermissionOperationType launchPermission
	 * @param AmazonEc2TypeProductCodeListType productCodes
	 * @param AmazonEc2TypeAttributeValueType description
	 * @return AmazonEc2TypeModifyImageAttributeType
	 */
	public function __construct($_imageId = null,$_launchPermission = null,$_productCodes = null,$_description = null)
	{
		parent::__construct(array('imageId'=>$_imageId,'launchPermission'=>$_launchPermission,'productCodes'=>$_productCodes,'description'=>$_description));
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
	 * @param LaunchPermissionOperationType launchPermission
	 * @return LaunchPermissionOperationType
	 */
	public function setLaunchPermission($_launchPermission)
	{
		return ($this->launchPermission = $_launchPermission);
	}
	/**
	 * Get launchPermission
	 * @return AmazonEc2TypeLaunchPermissionOperationType
	 */
	public function getLaunchPermission()
	{
		return $this->launchPermission;
	}
	/**
	 * Set productCodes
	 * @param ProductCodeListType productCodes
	 * @return ProductCodeListType
	 */
	public function setProductCodes($_productCodes)
	{
		return ($this->productCodes = $_productCodes);
	}
	/**
	 * Get productCodes
	 * @return AmazonEc2TypeProductCodeListType
	 */
	public function getProductCodes()
	{
		return $this->productCodes;
	}
	/**
	 * Set description
	 * @param AttributeValueType description
	 * @return AttributeValueType
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return AmazonEc2TypeAttributeValueType
	 */
	public function getDescription()
	{
		return $this->description;
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