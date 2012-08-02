<?php
/**
 * Class file for LifePicsTypeGetProductsResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetProductsResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetProductsResponse extends LifePicsWsdlClass
{
	/**
	 * The GetProductsResult
	 * @var LifePicsTypeGetProductsResult
	 */
	public $GetProductsResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetProductsResult GetProductsResult
	 * @return LifePicsTypeGetProductsResponse
	 */
	public function __construct($_GetProductsResult = null)
	{
		parent::__construct(array('GetProductsResult'=>$_GetProductsResult));
	}
	/**
	 * Set GetProductsResult
	 * @param GetProductsResult GetProductsResult
	 * @return GetProductsResult
	 */
	public function setGetProductsResult($_GetProductsResult)
	{
		return ($this->GetProductsResult = $_GetProductsResult);
	}
	/**
	 * Get GetProductsResult
	 * @return LifePicsTypeGetProductsResult
	 */
	public function getGetProductsResult()
	{
		return $this->GetProductsResult;
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