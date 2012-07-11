<?php
/**
 * Class file for JmDataMovieAppTypeCheckAvailabilityResponse
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeCheckAvailabilityResponse
 * @date 10/07/2012
 */
class JmDataMovieAppTypeCheckAvailabilityResponse extends JmDataMovieAppWsdlClass
{
	/**
	 * The CheckAvailabilityResult
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $CheckAvailabilityResult;
	/**
	 * Constructor
	 * @param boolean CheckAvailabilityResult
	 * @return JmDataMovieAppTypeCheckAvailabilityResponse
	 */
	public function __construct($_CheckAvailabilityResult)
	{
		parent::__construct(array('CheckAvailabilityResult'=>$_CheckAvailabilityResult));
	}
	/**
	 * Set CheckAvailabilityResult
	 * @param boolean CheckAvailabilityResult
	 * @return boolean
	 */
	public function setCheckAvailabilityResult($_CheckAvailabilityResult)
	{
		return ($this->CheckAvailabilityResult = $_CheckAvailabilityResult);
	}
	/**
	 * Get CheckAvailabilityResult
	 * @return boolean
	 */
	public function getCheckAvailabilityResult()
	{
		return $this->CheckAvailabilityResult;
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