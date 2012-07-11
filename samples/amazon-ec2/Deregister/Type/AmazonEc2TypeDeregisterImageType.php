<?php
/**
 * Class file for AmazonEc2TypeDeregisterImageType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDeregisterImageType
 * @date 10/07/2012
 */
class AmazonEc2TypeDeregisterImageType extends AmazonEc2WsdlClass
{
	/**
	 * The imageId
	 * @var string
	 */
	public $imageId;
	/**
	 * Constructor
	 * @param string imageId
	 * @return AmazonEc2TypeDeregisterImageType
	 */
	public function __construct($_imageId = null)
	{
		parent::__construct(array('imageId'=>$_imageId));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>