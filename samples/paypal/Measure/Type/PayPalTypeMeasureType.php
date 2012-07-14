<?php
/**
 * Class file for PayPalTypeMeasureType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeMeasureType
 * @date 14/07/2012
 */
class PayPalTypeMeasureType extends PayPalWsdlClass
{
	/**
	 * The _
	 * @var double
	 */
	public $_;
	/**
	 * The unit
	 * Meta informations :
	 * 	- use : required
	 * @var token
	 */
	public $unit;
	/**
	 * Constructor
	 * @param double _
	 * @param token unit
	 * @return PayPalTypeMeasureType
	 */
	public function __construct($__ = null,$_unit = null)
	{
		parent::__construct(array('_'=>$__,'unit'=>$_unit));
	}
	/**
	 * Set _
	 * @param double _
	 * @return double
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get _
	 * @return double
	 */
	public function get_()
	{
		return $this->_;
	}
	/**
	 * Set unit
	 * @param token unit
	 * @return token
	 */
	public function setUnit($_unit)
	{
		return ($this->unit = $_unit);
	}
	/**
	 * Get unit
	 * @return token
	 */
	public function getUnit()
	{
		return $this->unit;
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