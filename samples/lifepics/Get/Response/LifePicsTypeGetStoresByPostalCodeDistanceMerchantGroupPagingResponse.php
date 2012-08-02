<?php
/**
 * Class file for LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupPagingResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupPagingResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupPagingResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByPostalCodeDistanceMerchantGroupPagingResult
	 * @var LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupPagingResult
	 */
	public $GetStoresByPostalCodeDistanceMerchantGroupPagingResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupPagingResult GetStoresByPostalCodeDistanceMerchantGroupPagingResult
	 * @return LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupPagingResponse
	 */
	public function __construct($_GetStoresByPostalCodeDistanceMerchantGroupPagingResult = null)
	{
		parent::__construct(array('GetStoresByPostalCodeDistanceMerchantGroupPagingResult'=>$_GetStoresByPostalCodeDistanceMerchantGroupPagingResult));
	}
	/**
	 * Set GetStoresByPostalCodeDistanceMerchantGroupPagingResult
	 * @param GetStoresByPostalCodeDistanceMerchantGroupPagingResult GetStoresByPostalCodeDistanceMerchantGroupPagingResult
	 * @return GetStoresByPostalCodeDistanceMerchantGroupPagingResult
	 */
	public function setGetStoresByPostalCodeDistanceMerchantGroupPagingResult($_GetStoresByPostalCodeDistanceMerchantGroupPagingResult)
	{
		return ($this->GetStoresByPostalCodeDistanceMerchantGroupPagingResult = $_GetStoresByPostalCodeDistanceMerchantGroupPagingResult);
	}
	/**
	 * Get GetStoresByPostalCodeDistanceMerchantGroupPagingResult
	 * @return LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupPagingResult
	 */
	public function getGetStoresByPostalCodeDistanceMerchantGroupPagingResult()
	{
		return $this->GetStoresByPostalCodeDistanceMerchantGroupPagingResult;
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