<?php
/**
 * Class file for UsgsElevationTypeGetElevationResponse
 * @date 08/07/2012
 */
/**
 * Class UsgsElevationTypeGetElevationResponse
 * @date 08/07/2012
 */
class UsgsElevationTypeGetElevationResponse extends UsgsElevationWsdlClass
{
	/**
	 * The getElevationResult
	 * @var UsgsElevationTypeGetElevationResult
	 */
	public $getElevationResult;
	/**
	 * Constructor
	 * @param UsgsElevationTypeGetElevationResult getElevationResult
	 * @return UsgsElevationTypeGetElevationResponse
	 */
	public function __construct($_getElevationResult = null)
	{
		parent::__construct(array('getElevationResult'=>$_getElevationResult));
	}
	/**
	 * Set getElevationResult
	 * @param getElevationResult getElevationResult
	 * @return getElevationResult
	 */
	public function setGetElevationResult($_getElevationResult)
	{
		return ($this->getElevationResult = $_getElevationResult);
	}
	/**
	 * Get getElevationResult
	 * @return UsgsElevationTypegetElevationResult
	 */
	public function getGetElevationResult()
	{
		return $this->getElevationResult;
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