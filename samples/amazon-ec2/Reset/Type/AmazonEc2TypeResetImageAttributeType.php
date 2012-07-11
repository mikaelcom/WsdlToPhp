<?php
/**
 * Class file for AmazonEc2TypeResetImageAttributeType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeResetImageAttributeType
 * @date 10/07/2012
 */
class AmazonEc2TypeResetImageAttributeType extends AmazonEc2WsdlClass
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
	 * Constructor
	 * @param string imageId
	 * @param AmazonEc2TypeEmptyElementType launchPermission
	 * @return AmazonEc2TypeResetImageAttributeType
	 */
	public function __construct($_imageId = null,$_launchPermission = null)
	{
		parent::__construct(array('imageId'=>$_imageId,'launchPermission'=>$_launchPermission));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>