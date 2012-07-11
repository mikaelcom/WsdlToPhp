<?php
/**
 * Class file for GGAdwordsTypeLongValue
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeLongValue
 * Documentation : Number value type for constructing long valued ranges.
 * @date 03/07/2012
 */
class GGAdwordsTypeLongValue extends GGAdwordsTypeNumberValue
{
	/**
	 * The number
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : the underlying long value.
	 * @var long
	 */
	public $number;
	/**
	 * Constructor
	 * @param long number
	 * @return GGAdwordsTypeLongValue
	 */
	public function __construct($_number = null)
	{
		GGAdwordsWsdlClass::__construct(array('number'=>$_number));
	}
	/**
	 * Set number
	 * @param long number
	 * @return long
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return long
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