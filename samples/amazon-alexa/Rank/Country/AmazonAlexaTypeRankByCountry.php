<?php
/**
 * Class file for AmazonAlexaTypeRankByCountry
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeRankByCountry
 * @date 10/07/2012
 */
class AmazonAlexaTypeRankByCountry extends AmazonAlexaWsdlClass
{
	/**
	 * The Country
	 * @var AmazonAlexaTypeCountry
	 */
	public $Country;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeCountry Country
	 * @return AmazonAlexaTypeRankByCountry
	 */
	public function __construct($_Country = null)
	{
		parent::__construct(array('Country'=>$_Country));
	}
	/**
	 * Set Country
	 * @param Country Country
	 * @return Country
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = $_Country);
	}
	/**
	 * Get Country
	 * @return AmazonAlexaTypeCountry
	 */
	public function getCountry()
	{
		return $this->Country;
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