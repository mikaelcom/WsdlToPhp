<?php
/**
 * Class file for LifePicsTypeGetStoresPagingResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresPagingResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresPagingResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresPagingResult
	 * @var LifePicsTypeGetStoresPagingResult
	 */
	public $GetStoresPagingResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresPagingResult GetStoresPagingResult
	 * @return LifePicsTypeGetStoresPagingResponse
	 */
	public function __construct($_GetStoresPagingResult = null)
	{
		parent::__construct(array('GetStoresPagingResult'=>$_GetStoresPagingResult));
	}
	/**
	 * Set GetStoresPagingResult
	 * @param GetStoresPagingResult GetStoresPagingResult
	 * @return GetStoresPagingResult
	 */
	public function setGetStoresPagingResult($_GetStoresPagingResult)
	{
		return ($this->GetStoresPagingResult = $_GetStoresPagingResult);
	}
	/**
	 * Get GetStoresPagingResult
	 * @return LifePicsTypeGetStoresPagingResult
	 */
	public function getGetStoresPagingResult()
	{
		return $this->GetStoresPagingResult;
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