<?php
/**
 * Class file for LifePicsTypeAddItemToCartResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeAddItemToCartResponse
 * @date 02/08/2012
 */
class LifePicsTypeAddItemToCartResponse extends LifePicsWsdlClass
{
	/**
	 * The AddItemToCartResult
	 * @var LifePicsTypeAddItemToCartResult
	 */
	public $AddItemToCartResult;
	/**
	 * Constructor
	 * @param LifePicsTypeAddItemToCartResult AddItemToCartResult
	 * @return LifePicsTypeAddItemToCartResponse
	 */
	public function __construct($_AddItemToCartResult = null)
	{
		parent::__construct(array('AddItemToCartResult'=>$_AddItemToCartResult));
	}
	/**
	 * Set AddItemToCartResult
	 * @param AddItemToCartResult AddItemToCartResult
	 * @return AddItemToCartResult
	 */
	public function setAddItemToCartResult($_AddItemToCartResult)
	{
		return ($this->AddItemToCartResult = $_AddItemToCartResult);
	}
	/**
	 * Get AddItemToCartResult
	 * @return LifePicsTypeAddItemToCartResult
	 */
	public function getAddItemToCartResult()
	{
		return $this->AddItemToCartResult;
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