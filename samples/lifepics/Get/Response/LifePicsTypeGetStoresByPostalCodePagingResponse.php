<?php
/**
 * Class file for LifePicsTypeGetStoresByPostalCodePagingResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByPostalCodePagingResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByPostalCodePagingResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByPostalCodePagingResult
	 * @var LifePicsTypeGetStoresByPostalCodePagingResult
	 */
	public $GetStoresByPostalCodePagingResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByPostalCodePagingResult GetStoresByPostalCodePagingResult
	 * @return LifePicsTypeGetStoresByPostalCodePagingResponse
	 */
	public function __construct($_GetStoresByPostalCodePagingResult = null)
	{
		parent::__construct(array('GetStoresByPostalCodePagingResult'=>$_GetStoresByPostalCodePagingResult));
	}
	/**
	 * Set GetStoresByPostalCodePagingResult
	 * @param GetStoresByPostalCodePagingResult GetStoresByPostalCodePagingResult
	 * @return GetStoresByPostalCodePagingResult
	 */
	public function setGetStoresByPostalCodePagingResult($_GetStoresByPostalCodePagingResult)
	{
		return ($this->GetStoresByPostalCodePagingResult = $_GetStoresByPostalCodePagingResult);
	}
	/**
	 * Get GetStoresByPostalCodePagingResult
	 * @return LifePicsTypeGetStoresByPostalCodePagingResult
	 */
	public function getGetStoresByPostalCodePagingResult()
	{
		return $this->GetStoresByPostalCodePagingResult;
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