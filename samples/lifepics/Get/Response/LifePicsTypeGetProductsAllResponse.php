<?php
/**
 * Class file for LifePicsTypeGetProductsAllResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetProductsAllResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetProductsAllResponse extends LifePicsWsdlClass
{
	/**
	 * The GetProductsAllResult
	 * @var LifePicsTypeGetProductsAllResult
	 */
	public $GetProductsAllResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetProductsAllResult GetProductsAllResult
	 * @return LifePicsTypeGetProductsAllResponse
	 */
	public function __construct($_GetProductsAllResult = null)
	{
		parent::__construct(array('GetProductsAllResult'=>$_GetProductsAllResult));
	}
	/**
	 * Set GetProductsAllResult
	 * @param GetProductsAllResult GetProductsAllResult
	 * @return GetProductsAllResult
	 */
	public function setGetProductsAllResult($_GetProductsAllResult)
	{
		return ($this->GetProductsAllResult = $_GetProductsAllResult);
	}
	/**
	 * Get GetProductsAllResult
	 * @return LifePicsTypeGetProductsAllResult
	 */
	public function getGetProductsAllResult()
	{
		return $this->GetProductsAllResult;
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