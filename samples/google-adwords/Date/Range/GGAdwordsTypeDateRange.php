<?php
/**
 * Class file for GGAdwordsTypeDateRange
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeDateRange
 * Documentation : Represents a range of dates that has either an upper or a lower bound. The format for the date is YYYYMMDD.
 * @date 03/07/2012
 */
class GGAdwordsTypeDateRange extends GGAdwordsWsdlClass
{
	/**
	 * The min
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : the lower bound of this date range, inclusive.
	 * @var string
	 */
	public $min;
	/**
	 * The max
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : the upper bound of this date range, inclusive.
	 * @var string
	 */
	public $max;
	/**
	 * Constructor
	 * @param string min
	 * @param string max
	 * @return GGAdwordsTypeDateRange
	 */
	public function __construct($_min = null,$_max = null)
	{
		parent::__construct(array('min'=>$_min,'max'=>$_max));
	}
	/**
	 * Set min
	 * @param string min
	 * @return string
	 */
	public function setMin($_min)
	{
		return ($this->min = $_min);
	}
	/**
	 * Get min
	 * @return string
	 */
	public function getMin()
	{
		return $this->min;
	}
	/**
	 * Set max
	 * @param string max
	 * @return string
	 */
	public function setMax($_max)
	{
		return ($this->max = $_max);
	}
	/**
	 * Get max
	 * @return string
	 */
	public function getMax()
	{
		return $this->max;
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