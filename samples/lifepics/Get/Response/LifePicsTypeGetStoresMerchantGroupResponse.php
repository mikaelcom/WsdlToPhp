<?php
/**
 * Class file for LifePicsTypeGetStoresMerchantGroupResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresMerchantGroupResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresMerchantGroupResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresMerchantGroupResult
	 * @var LifePicsTypeGetStoresMerchantGroupResult
	 */
	public $GetStoresMerchantGroupResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresMerchantGroupResult GetStoresMerchantGroupResult
	 * @return LifePicsTypeGetStoresMerchantGroupResponse
	 */
	public function __construct($_GetStoresMerchantGroupResult = null)
	{
		parent::__construct(array('GetStoresMerchantGroupResult'=>$_GetStoresMerchantGroupResult));
	}
	/**
	 * Set GetStoresMerchantGroupResult
	 * @param GetStoresMerchantGroupResult GetStoresMerchantGroupResult
	 * @return GetStoresMerchantGroupResult
	 */
	public function setGetStoresMerchantGroupResult($_GetStoresMerchantGroupResult)
	{
		return ($this->GetStoresMerchantGroupResult = $_GetStoresMerchantGroupResult);
	}
	/**
	 * Get GetStoresMerchantGroupResult
	 * @return LifePicsTypeGetStoresMerchantGroupResult
	 */
	public function getGetStoresMerchantGroupResult()
	{
		return $this->GetStoresMerchantGroupResult;
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