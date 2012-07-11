<?php
/**
 * Class file for EbayShoppingTypeDistanceType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeDistanceType
 * Documentation : Distance, used for a proximity search.
 * @date 05/07/2012
 */
class EbayShoppingTypeDistanceType extends EbayShoppingWsdlClass
{
	/**
	 * The _
	 * @var double
	 */
	public $_;
	/**
	 * The unit
	 * @var string
	 */
	public $unit;
	/**
	 * Constructor
	 * @param double _
	 * @param string unit
	 * @return EbayShoppingTypeDistanceType
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
	 * @param string unit
	 * @return string
	 */
	public function setUnit($_unit)
	{
		return ($this->unit = $_unit);
	}
	/**
	 * Get unit
	 * @return string
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