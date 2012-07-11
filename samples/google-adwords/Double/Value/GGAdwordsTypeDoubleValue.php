<?php
/**
 * Class file for GGAdwordsTypeDoubleValue
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeDoubleValue
 * Documentation : Number value type for constructing double valued ranges.
 * @date 03/07/2012
 */
class GGAdwordsTypeDoubleValue extends GGAdwordsTypeNumberValue
{
	/**
	 * The number
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : the underlying double value.
	 * @var double
	 */
	public $number;
	/**
	 * Constructor
	 * @param double number
	 * @return GGAdwordsTypeDoubleValue
	 */
	public function __construct($_number = null)
	{
		GGAdwordsWsdlClass::__construct(array('number'=>$_number));
	}
	/**
	 * Set number
	 * @param double number
	 * @return double
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return double
	 */
	public function getNumber()
	{
		return $this->number;
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