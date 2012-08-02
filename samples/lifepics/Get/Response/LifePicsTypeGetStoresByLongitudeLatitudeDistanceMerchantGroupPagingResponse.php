<?php
/**
 * Class file for LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResult
	 * @var LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResult
	 */
	public $GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResult GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResponse
	 */
	public function __construct($_GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResult = null)
	{
		parent::__construct(array('GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResult'=>$_GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResult));
	}
	/**
	 * Set GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResult
	 * @param GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResult GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResult
	 * @return GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResult
	 */
	public function setGetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResult($_GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResult)
	{
		return ($this->GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResult = $_GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResult);
	}
	/**
	 * Get GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResult
	 */
	public function getGetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResult()
	{
		return $this->GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingResult;
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