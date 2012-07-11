<?php
/**
 * Class file for UsgsElevationTypeGetAllElevationsResponse
 * @date 08/07/2012
 */
/**
 * Class UsgsElevationTypeGetAllElevationsResponse
 * @date 08/07/2012
 */
class UsgsElevationTypeGetAllElevationsResponse extends UsgsElevationWsdlClass
{
	/**
	 * The getAllElevationsResult
	 * @var UsgsElevationTypeGetAllElevationsResult
	 */
	public $getAllElevationsResult;
	/**
	 * Constructor
	 * @param UsgsElevationTypeGetAllElevationsResult getAllElevationsResult
	 * @return UsgsElevationTypeGetAllElevationsResponse
	 */
	public function __construct($_getAllElevationsResult = null)
	{
		parent::__construct(array('getAllElevationsResult'=>$_getAllElevationsResult));
	}
	/**
	 * Set getAllElevationsResult
	 * @param getAllElevationsResult getAllElevationsResult
	 * @return getAllElevationsResult
	 */
	public function setGetAllElevationsResult($_getAllElevationsResult)
	{
		return ($this->getAllElevationsResult = $_getAllElevationsResult);
	}
	/**
	 * Get getAllElevationsResult
	 * @return UsgsElevationTypegetAllElevationsResult
	 */
	public function getGetAllElevationsResult()
	{
		return $this->getAllElevationsResult;
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