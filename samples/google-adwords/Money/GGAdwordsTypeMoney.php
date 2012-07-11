<?php
/**
 * Class file for GGAdwordsTypeMoney
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeMoney
 * Documentation : Represents a money amount.
 * @date 03/07/2012
 */
class GGAdwordsTypeMoney extends GGAdwordsTypeComparableValue
{
	/**
	 * The microAmount
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Amount in micros. One million is equivalent to one unit.
	 * @var long
	 */
	public $microAmount;
	/**
	 * Constructor
	 * @param long microAmount
	 * @return GGAdwordsTypeMoney
	 */
	public function __construct($_microAmount = null)
	{
		GGAdwordsWsdlClass::__construct(array('microAmount'=>$_microAmount));
	}
	/**
	 * Set microAmount
	 * @param long microAmount
	 * @return long
	 */
	public function setMicroAmount($_microAmount)
	{
		return ($this->microAmount = $_microAmount);
	}
	/**
	 * Get microAmount
	 * @return long
	 */
	public function getMicroAmount()
	{
		return $this->microAmount;
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