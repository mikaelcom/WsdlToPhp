<?php
/**
 * Class file for LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByLongitudeLatitudeDistanceMerchantGroupResult
	 * @var LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupResult
	 */
	public $GetStoresByLongitudeLatitudeDistanceMerchantGroupResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupResult GetStoresByLongitudeLatitudeDistanceMerchantGroupResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupResponse
	 */
	public function __construct($_GetStoresByLongitudeLatitudeDistanceMerchantGroupResult = null)
	{
		parent::__construct(array('GetStoresByLongitudeLatitudeDistanceMerchantGroupResult'=>$_GetStoresByLongitudeLatitudeDistanceMerchantGroupResult));
	}
	/**
	 * Set GetStoresByLongitudeLatitudeDistanceMerchantGroupResult
	 * @param GetStoresByLongitudeLatitudeDistanceMerchantGroupResult GetStoresByLongitudeLatitudeDistanceMerchantGroupResult
	 * @return GetStoresByLongitudeLatitudeDistanceMerchantGroupResult
	 */
	public function setGetStoresByLongitudeLatitudeDistanceMerchantGroupResult($_GetStoresByLongitudeLatitudeDistanceMerchantGroupResult)
	{
		return ($this->GetStoresByLongitudeLatitudeDistanceMerchantGroupResult = $_GetStoresByLongitudeLatitudeDistanceMerchantGroupResult);
	}
	/**
	 * Get GetStoresByLongitudeLatitudeDistanceMerchantGroupResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupResult
	 */
	public function getGetStoresByLongitudeLatitudeDistanceMerchantGroupResult()
	{
		return $this->GetStoresByLongitudeLatitudeDistanceMerchantGroupResult;
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