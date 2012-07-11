<?php
/**
 * Class file for AmazonECommerceServiceTypeVariationAttributes
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeVariationAttributes
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeVariationAttributes extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The VariationAttribute
	 * @var AmazonECommerceServiceTypeVariationAttribute
	 */
	public $VariationAttribute;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeVariationAttribute VariationAttribute
	 * @return AmazonECommerceServiceTypeVariationAttributes
	 */
	public function __construct($_VariationAttribute = null)
	{
		parent::__construct(array('VariationAttribute'=>$_VariationAttribute));
	}
	/**
	 * Set VariationAttribute
	 * @param VariationAttribute VariationAttribute
	 * @return VariationAttribute
	 */
	public function setVariationAttribute($_VariationAttribute)
	{
		return ($this->VariationAttribute = $_VariationAttribute);
	}
	/**
	 * Get VariationAttribute
	 * @return AmazonECommerceServiceTypeVariationAttribute
	 */
	public function getVariationAttribute()
	{
		return $this->VariationAttribute;
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