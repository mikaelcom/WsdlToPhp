<?php
/**
 * Class file for LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantPagingResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantPagingResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantPagingResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByLongitudeLatitudeDistanceMerchantPagingResult
	 * @var LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantPagingResult
	 */
	public $GetStoresByLongitudeLatitudeDistanceMerchantPagingResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantPagingResult GetStoresByLongitudeLatitudeDistanceMerchantPagingResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantPagingResponse
	 */
	public function __construct($_GetStoresByLongitudeLatitudeDistanceMerchantPagingResult = null)
	{
		parent::__construct(array('GetStoresByLongitudeLatitudeDistanceMerchantPagingResult'=>$_GetStoresByLongitudeLatitudeDistanceMerchantPagingResult));
	}
	/**
	 * Set GetStoresByLongitudeLatitudeDistanceMerchantPagingResult
	 * @param GetStoresByLongitudeLatitudeDistanceMerchantPagingResult GetStoresByLongitudeLatitudeDistanceMerchantPagingResult
	 * @return GetStoresByLongitudeLatitudeDistanceMerchantPagingResult
	 */
	public function setGetStoresByLongitudeLatitudeDistanceMerchantPagingResult($_GetStoresByLongitudeLatitudeDistanceMerchantPagingResult)
	{
		return ($this->GetStoresByLongitudeLatitudeDistanceMerchantPagingResult = $_GetStoresByLongitudeLatitudeDistanceMerchantPagingResult);
	}
	/**
	 * Get GetStoresByLongitudeLatitudeDistanceMerchantPagingResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantPagingResult
	 */
	public function getGetStoresByLongitudeLatitudeDistanceMerchantPagingResult()
	{
		return $this->GetStoresByLongitudeLatitudeDistanceMerchantPagingResult;
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