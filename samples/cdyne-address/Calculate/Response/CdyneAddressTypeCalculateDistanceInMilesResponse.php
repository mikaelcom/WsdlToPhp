<?php
/**
 * Class file for CdyneAddressTypeCalculateDistanceInMilesResponse
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressTypeCalculateDistanceInMilesResponse
 * @date 02/07/2012
 */
class CdyneAddressTypeCalculateDistanceInMilesResponse extends CdyneAddressWsdlClass
{
	/**
	 * The CalculateDistanceInMilesResult
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CalculateDistanceInMilesResult;
	/**
	 * Constructor
	 * @param double CalculateDistanceInMilesResult
	 * @return CdyneAddressTypeCalculateDistanceInMilesResponse
	 */
	public function __construct($_CalculateDistanceInMilesResult)
	{
		parent::__construct(array('CalculateDistanceInMilesResult'=>$_CalculateDistanceInMilesResult));
	}
	/**
	 * Set CalculateDistanceInMilesResult
	 * @param double CalculateDistanceInMilesResult
	 * @return double
	 */
	public function setCalculateDistanceInMilesResult($_CalculateDistanceInMilesResult)
	{
		return ($this->CalculateDistanceInMilesResult = $_CalculateDistanceInMilesResult);
	}
	/**
	 * Get CalculateDistanceInMilesResult
	 * @return double
	 */
	public function getCalculateDistanceInMilesResult()
	{
		return $this->CalculateDistanceInMilesResult;
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