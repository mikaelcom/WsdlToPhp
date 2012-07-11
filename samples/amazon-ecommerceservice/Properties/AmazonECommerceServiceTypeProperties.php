<?php
/**
 * Class file for AmazonECommerceServiceTypeProperties
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeProperties
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeProperties extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Property
	 * @var AmazonECommerceServiceTypeProperty
	 */
	public $Property;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeProperty Property
	 * @return AmazonECommerceServiceTypeProperties
	 */
	public function __construct($_Property = null)
	{
		parent::__construct(array('Property'=>$_Property));
	}
	/**
	 * Set Property
	 * @param Property Property
	 * @return Property
	 */
	public function setProperty($_Property)
	{
		return ($this->Property = $_Property);
	}
	/**
	 * Get Property
	 * @return AmazonECommerceServiceTypeProperty
	 */
	public function getProperty()
	{
		return $this->Property;
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