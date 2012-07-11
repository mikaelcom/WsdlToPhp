<?php
/**
 * Class file for AmazonECommerceServiceTypeImageSets
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeImageSets
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeImageSets extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The ImageSet
	 * @var AmazonECommerceServiceTypeImageSet
	 */
	public $ImageSet;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeImageSet ImageSet
	 * @return AmazonECommerceServiceTypeImageSets
	 */
	public function __construct($_ImageSet = null)
	{
		parent::__construct(array('ImageSet'=>$_ImageSet));
	}
	/**
	 * Set ImageSet
	 * @param ImageSet ImageSet
	 * @return ImageSet
	 */
	public function setImageSet($_ImageSet)
	{
		return ($this->ImageSet = $_ImageSet);
	}
	/**
	 * Get ImageSet
	 * @return AmazonECommerceServiceTypeImageSet
	 */
	public function getImageSet()
	{
		return $this->ImageSet;
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