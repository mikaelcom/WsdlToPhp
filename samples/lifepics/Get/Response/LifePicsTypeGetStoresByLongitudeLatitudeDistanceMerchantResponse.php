<?php
/**
 * Class file for LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByLongitudeLatitudeDistanceMerchantResult
	 * @var LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantResult
	 */
	public $GetStoresByLongitudeLatitudeDistanceMerchantResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantResult GetStoresByLongitudeLatitudeDistanceMerchantResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantResponse
	 */
	public function __construct($_GetStoresByLongitudeLatitudeDistanceMerchantResult = null)
	{
		parent::__construct(array('GetStoresByLongitudeLatitudeDistanceMerchantResult'=>$_GetStoresByLongitudeLatitudeDistanceMerchantResult));
	}
	/**
	 * Set GetStoresByLongitudeLatitudeDistanceMerchantResult
	 * @param GetStoresByLongitudeLatitudeDistanceMerchantResult GetStoresByLongitudeLatitudeDistanceMerchantResult
	 * @return GetStoresByLongitudeLatitudeDistanceMerchantResult
	 */
	public function setGetStoresByLongitudeLatitudeDistanceMerchantResult($_GetStoresByLongitudeLatitudeDistanceMerchantResult)
	{
		return ($this->GetStoresByLongitudeLatitudeDistanceMerchantResult = $_GetStoresByLongitudeLatitudeDistanceMerchantResult);
	}
	/**
	 * Get GetStoresByLongitudeLatitudeDistanceMerchantResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantResult
	 */
	public function getGetStoresByLongitudeLatitudeDistanceMerchantResult()
	{
		return $this->GetStoresByLongitudeLatitudeDistanceMerchantResult;
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