<?php
/**
 * Class file for LifePicsTypeAddItemToCartWebResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeAddItemToCartWebResponse
 * @date 02/08/2012
 */
class LifePicsTypeAddItemToCartWebResponse extends LifePicsWsdlClass
{
	/**
	 * The AddItemToCartWebResult
	 * @var LifePicsTypeAddItemToCartWebResult
	 */
	public $AddItemToCartWebResult;
	/**
	 * Constructor
	 * @param LifePicsTypeAddItemToCartWebResult AddItemToCartWebResult
	 * @return LifePicsTypeAddItemToCartWebResponse
	 */
	public function __construct($_AddItemToCartWebResult = null)
	{
		parent::__construct(array('AddItemToCartWebResult'=>$_AddItemToCartWebResult));
	}
	/**
	 * Set AddItemToCartWebResult
	 * @param AddItemToCartWebResult AddItemToCartWebResult
	 * @return AddItemToCartWebResult
	 */
	public function setAddItemToCartWebResult($_AddItemToCartWebResult)
	{
		return ($this->AddItemToCartWebResult = $_AddItemToCartWebResult);
	}
	/**
	 * Get AddItemToCartWebResult
	 * @return LifePicsTypeAddItemToCartWebResult
	 */
	public function getAddItemToCartWebResult()
	{
		return $this->AddItemToCartWebResult;
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