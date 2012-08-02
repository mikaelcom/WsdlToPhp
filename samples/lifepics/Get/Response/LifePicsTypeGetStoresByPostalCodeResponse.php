<?php
/**
 * Class file for LifePicsTypeGetStoresByPostalCodeResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByPostalCodeResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByPostalCodeResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByPostalCodeResult
	 * @var LifePicsTypeGetStoresByPostalCodeResult
	 */
	public $GetStoresByPostalCodeResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByPostalCodeResult GetStoresByPostalCodeResult
	 * @return LifePicsTypeGetStoresByPostalCodeResponse
	 */
	public function __construct($_GetStoresByPostalCodeResult = null)
	{
		parent::__construct(array('GetStoresByPostalCodeResult'=>$_GetStoresByPostalCodeResult));
	}
	/**
	 * Set GetStoresByPostalCodeResult
	 * @param GetStoresByPostalCodeResult GetStoresByPostalCodeResult
	 * @return GetStoresByPostalCodeResult
	 */
	public function setGetStoresByPostalCodeResult($_GetStoresByPostalCodeResult)
	{
		return ($this->GetStoresByPostalCodeResult = $_GetStoresByPostalCodeResult);
	}
	/**
	 * Get GetStoresByPostalCodeResult
	 * @return LifePicsTypeGetStoresByPostalCodeResult
	 */
	public function getGetStoresByPostalCodeResult()
	{
		return $this->GetStoresByPostalCodeResult;
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