<?php
/**
 * Class file for AmazonECommerceServiceTypeNonNegativeIntegerWithUnits
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeNonNegativeIntegerWithUnits
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeNonNegativeIntegerWithUnits extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The _
	 * @var nonNegativeInteger
	 */
	public $_;
	/**
	 * The Units
	 * Meta informations :
	 * 	- use : required
	 * @var string
	 */
	public $Units;
	/**
	 * Constructor
	 * @param nonNegativeInteger _
	 * @param string Units
	 * @return AmazonECommerceServiceTypeNonNegativeIntegerWithUnits
	 */
	public function __construct($__ = null,$_Units = null)
	{
		parent::__construct(array('_'=>$__,'Units'=>$_Units));
	}
	/**
	 * Set _
	 * @param nonNegativeInteger _
	 * @return nonNegativeInteger
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get _
	 * @return nonNegativeInteger
	 */
	public function get_()
	{
		return $this->_;
	}
	/**
	 * Set Units
	 * @param string Units
	 * @return string
	 */
	public function setUnits($_Units)
	{
		return ($this->Units = $_Units);
	}
	/**
	 * Get Units
	 * @return string
	 */
	public function getUnits()
	{
		return $this->Units;
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