<?php
/**
 * Class file for AmazonAlexaTypePerUser
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypePerUser
 * @date 10/07/2012
 */
class AmazonAlexaTypePerUser extends AmazonAlexaWsdlClass
{
	/**
	 * The AveragePageViews
	 * @var string
	 */
	public $AveragePageViews;
	/**
	 * Constructor
	 * @param string AveragePageViews
	 * @return AmazonAlexaTypePerUser
	 */
	public function __construct($_AveragePageViews = null)
	{
		parent::__construct(array('AveragePageViews'=>$_AveragePageViews));
	}
	/**
	 * Set AveragePageViews
	 * @param string AveragePageViews
	 * @return string
	 */
	public function setAveragePageViews($_AveragePageViews)
	{
		return ($this->AveragePageViews = $_AveragePageViews);
	}
	/**
	 * Get AveragePageViews
	 * @return string
	 */
	public function getAveragePageViews()
	{
		return $this->AveragePageViews;
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