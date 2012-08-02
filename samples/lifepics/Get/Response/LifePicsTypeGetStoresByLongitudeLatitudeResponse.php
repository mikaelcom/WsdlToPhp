<?php
/**
 * Class file for LifePicsTypeGetStoresByLongitudeLatitudeResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByLongitudeLatitudeResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByLongitudeLatitudeResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByLongitudeLatitudeResult
	 * @var LifePicsTypeGetStoresByLongitudeLatitudeResult
	 */
	public $GetStoresByLongitudeLatitudeResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByLongitudeLatitudeResult GetStoresByLongitudeLatitudeResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudeResponse
	 */
	public function __construct($_GetStoresByLongitudeLatitudeResult = null)
	{
		parent::__construct(array('GetStoresByLongitudeLatitudeResult'=>$_GetStoresByLongitudeLatitudeResult));
	}
	/**
	 * Set GetStoresByLongitudeLatitudeResult
	 * @param GetStoresByLongitudeLatitudeResult GetStoresByLongitudeLatitudeResult
	 * @return GetStoresByLongitudeLatitudeResult
	 */
	public function setGetStoresByLongitudeLatitudeResult($_GetStoresByLongitudeLatitudeResult)
	{
		return ($this->GetStoresByLongitudeLatitudeResult = $_GetStoresByLongitudeLatitudeResult);
	}
	/**
	 * Get GetStoresByLongitudeLatitudeResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudeResult
	 */
	public function getGetStoresByLongitudeLatitudeResult()
	{
		return $this->GetStoresByLongitudeLatitudeResult;
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