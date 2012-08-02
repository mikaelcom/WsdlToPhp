<?php
/**
 * Class file for LifePicsTypeGetStoresByLongitudeLatitudePagingResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByLongitudeLatitudePagingResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByLongitudeLatitudePagingResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByLongitudeLatitudePagingResult
	 * @var LifePicsTypeGetStoresByLongitudeLatitudePagingResult
	 */
	public $GetStoresByLongitudeLatitudePagingResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByLongitudeLatitudePagingResult GetStoresByLongitudeLatitudePagingResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudePagingResponse
	 */
	public function __construct($_GetStoresByLongitudeLatitudePagingResult = null)
	{
		parent::__construct(array('GetStoresByLongitudeLatitudePagingResult'=>$_GetStoresByLongitudeLatitudePagingResult));
	}
	/**
	 * Set GetStoresByLongitudeLatitudePagingResult
	 * @param GetStoresByLongitudeLatitudePagingResult GetStoresByLongitudeLatitudePagingResult
	 * @return GetStoresByLongitudeLatitudePagingResult
	 */
	public function setGetStoresByLongitudeLatitudePagingResult($_GetStoresByLongitudeLatitudePagingResult)
	{
		return ($this->GetStoresByLongitudeLatitudePagingResult = $_GetStoresByLongitudeLatitudePagingResult);
	}
	/**
	 * Get GetStoresByLongitudeLatitudePagingResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudePagingResult
	 */
	public function getGetStoresByLongitudeLatitudePagingResult()
	{
		return $this->GetStoresByLongitudeLatitudePagingResult;
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