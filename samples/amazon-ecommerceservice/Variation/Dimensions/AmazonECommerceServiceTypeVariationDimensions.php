<?php
/**
 * Class file for AmazonECommerceServiceTypeVariationDimensions
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeVariationDimensions
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeVariationDimensions extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The VariationDimension
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $VariationDimension;
	/**
	 * Constructor
	 * @param string VariationDimension
	 * @return AmazonECommerceServiceTypeVariationDimensions
	 */
	public function __construct($_VariationDimension = null)
	{
		parent::__construct(array('VariationDimension'=>$_VariationDimension));
	}
	/**
	 * Set VariationDimension
	 * @param string VariationDimension
	 * @return string
	 */
	public function setVariationDimension($_VariationDimension)
	{
		return ($this->VariationDimension = $_VariationDimension);
	}
	/**
	 * Get VariationDimension
	 * @return string
	 */
	public function getVariationDimension()
	{
		return $this->VariationDimension;
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