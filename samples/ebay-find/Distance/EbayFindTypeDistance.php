<?php
/**
 * Class file for EbayFindTypeDistance
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeDistance
 * Documentation : Unit of measure used in a distance calculation. Units can be in either kilometers or miles, depending on the Global ID.
 * @date 04/07/2012
 */
class EbayFindTypeDistance extends EbayFindWsdlClass
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
	 * @return EbayFindTypeDistance
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