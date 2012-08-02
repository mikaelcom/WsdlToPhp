<?php
/**
 * Class file for LifePicsTypeGetStoresByPostalCodeDistanceMerchantPagingResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByPostalCodeDistanceMerchantPagingResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByPostalCodeDistanceMerchantPagingResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByPostalCodeDistanceMerchantPagingResult
	 * @var LifePicsTypeGetStoresByPostalCodeDistanceMerchantPagingResult
	 */
	public $GetStoresByPostalCodeDistanceMerchantPagingResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByPostalCodeDistanceMerchantPagingResult GetStoresByPostalCodeDistanceMerchantPagingResult
	 * @return LifePicsTypeGetStoresByPostalCodeDistanceMerchantPagingResponse
	 */
	public function __construct($_GetStoresByPostalCodeDistanceMerchantPagingResult = null)
	{
		parent::__construct(array('GetStoresByPostalCodeDistanceMerchantPagingResult'=>$_GetStoresByPostalCodeDistanceMerchantPagingResult));
	}
	/**
	 * Set GetStoresByPostalCodeDistanceMerchantPagingResult
	 * @param GetStoresByPostalCodeDistanceMerchantPagingResult GetStoresByPostalCodeDistanceMerchantPagingResult
	 * @return GetStoresByPostalCodeDistanceMerchantPagingResult
	 */
	public function setGetStoresByPostalCodeDistanceMerchantPagingResult($_GetStoresByPostalCodeDistanceMerchantPagingResult)
	{
		return ($this->GetStoresByPostalCodeDistanceMerchantPagingResult = $_GetStoresByPostalCodeDistanceMerchantPagingResult);
	}
	/**
	 * Get GetStoresByPostalCodeDistanceMerchantPagingResult
	 * @return LifePicsTypeGetStoresByPostalCodeDistanceMerchantPagingResult
	 */
	public function getGetStoresByPostalCodeDistanceMerchantPagingResult()
	{
		return $this->GetStoresByPostalCodeDistanceMerchantPagingResult;
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