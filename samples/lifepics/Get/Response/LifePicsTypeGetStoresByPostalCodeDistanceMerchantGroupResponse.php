<?php
/**
 * Class file for LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByPostalCodeDistanceMerchantGroupResult
	 * @var LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupResult
	 */
	public $GetStoresByPostalCodeDistanceMerchantGroupResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupResult GetStoresByPostalCodeDistanceMerchantGroupResult
	 * @return LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupResponse
	 */
	public function __construct($_GetStoresByPostalCodeDistanceMerchantGroupResult = null)
	{
		parent::__construct(array('GetStoresByPostalCodeDistanceMerchantGroupResult'=>$_GetStoresByPostalCodeDistanceMerchantGroupResult));
	}
	/**
	 * Set GetStoresByPostalCodeDistanceMerchantGroupResult
	 * @param GetStoresByPostalCodeDistanceMerchantGroupResult GetStoresByPostalCodeDistanceMerchantGroupResult
	 * @return GetStoresByPostalCodeDistanceMerchantGroupResult
	 */
	public function setGetStoresByPostalCodeDistanceMerchantGroupResult($_GetStoresByPostalCodeDistanceMerchantGroupResult)
	{
		return ($this->GetStoresByPostalCodeDistanceMerchantGroupResult = $_GetStoresByPostalCodeDistanceMerchantGroupResult);
	}
	/**
	 * Get GetStoresByPostalCodeDistanceMerchantGroupResult
	 * @return LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupResult
	 */
	public function getGetStoresByPostalCodeDistanceMerchantGroupResult()
	{
		return $this->GetStoresByPostalCodeDistanceMerchantGroupResult;
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