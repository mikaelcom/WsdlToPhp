<?php
/**
 * Class file for AmazonEc2TypeProductDescriptionSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeProductDescriptionSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeProductDescriptionSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The productDescription
	 * @var string
	 */
	public $productDescription;
	/**
	 * Constructor
	 * @param string productDescription
	 * @return AmazonEc2TypeProductDescriptionSetItemType
	 */
	public function __construct($_productDescription = null)
	{
		parent::__construct(array('productDescription'=>$_productDescription));
	}
	/**
	 * Set productDescription
	 * @param string productDescription
	 * @return string
	 */
	public function setProductDescription($_productDescription)
	{
		return ($this->productDescription = $_productDescription);
	}
	/**
	 * Get productDescription
	 * @return string
	 */
	public function getProductDescription()
	{
		return $this->productDescription;
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