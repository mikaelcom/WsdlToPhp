<?php
/**
 * Class file for LifePicsTypeGetStoresByPostalCodeDistanceMerchantResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByPostalCodeDistanceMerchantResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByPostalCodeDistanceMerchantResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByPostalCodeDistanceMerchantResult
	 * @var LifePicsTypeGetStoresByPostalCodeDistanceMerchantResult
	 */
	public $GetStoresByPostalCodeDistanceMerchantResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByPostalCodeDistanceMerchantResult GetStoresByPostalCodeDistanceMerchantResult
	 * @return LifePicsTypeGetStoresByPostalCodeDistanceMerchantResponse
	 */
	public function __construct($_GetStoresByPostalCodeDistanceMerchantResult = null)
	{
		parent::__construct(array('GetStoresByPostalCodeDistanceMerchantResult'=>$_GetStoresByPostalCodeDistanceMerchantResult));
	}
	/**
	 * Set GetStoresByPostalCodeDistanceMerchantResult
	 * @param GetStoresByPostalCodeDistanceMerchantResult GetStoresByPostalCodeDistanceMerchantResult
	 * @return GetStoresByPostalCodeDistanceMerchantResult
	 */
	public function setGetStoresByPostalCodeDistanceMerchantResult($_GetStoresByPostalCodeDistanceMerchantResult)
	{
		return ($this->GetStoresByPostalCodeDistanceMerchantResult = $_GetStoresByPostalCodeDistanceMerchantResult);
	}
	/**
	 * Get GetStoresByPostalCodeDistanceMerchantResult
	 * @return LifePicsTypeGetStoresByPostalCodeDistanceMerchantResult
	 */
	public function getGetStoresByPostalCodeDistanceMerchantResult()
	{
		return $this->GetStoresByPostalCodeDistanceMerchantResult;
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