<?php
/**
 * Class file for AmazonAlexaTypeRankByCity
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeRankByCity
 * @date 10/07/2012
 */
class AmazonAlexaTypeRankByCity extends AmazonAlexaWsdlClass
{
	/**
	 * The City
	 * @var AmazonAlexaTypeCity
	 */
	public $City;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeCity City
	 * @return AmazonAlexaTypeRankByCity
	 */
	public function __construct($_City = null)
	{
		parent::__construct(array('City'=>$_City));
	}
	/**
	 * Set City
	 * @param City City
	 * @return City
	 */
	public function setCity($_City)
	{
		return ($this->City = $_City);
	}
	/**
	 * Get City
	 * @return AmazonAlexaTypeCity
	 */
	public function getCity()
	{
		return $this->City;
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