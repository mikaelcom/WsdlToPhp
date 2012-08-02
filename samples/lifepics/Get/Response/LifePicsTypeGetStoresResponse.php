<?php
/**
 * Class file for LifePicsTypeGetStoresResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresResult
	 * @var LifePicsTypeGetStoresResult
	 */
	public $GetStoresResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresResult GetStoresResult
	 * @return LifePicsTypeGetStoresResponse
	 */
	public function __construct($_GetStoresResult = null)
	{
		parent::__construct(array('GetStoresResult'=>$_GetStoresResult));
	}
	/**
	 * Set GetStoresResult
	 * @param GetStoresResult GetStoresResult
	 * @return GetStoresResult
	 */
	public function setGetStoresResult($_GetStoresResult)
	{
		return ($this->GetStoresResult = $_GetStoresResult);
	}
	/**
	 * Get GetStoresResult
	 * @return LifePicsTypeGetStoresResult
	 */
	public function getGetStoresResult()
	{
		return $this->GetStoresResult;
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