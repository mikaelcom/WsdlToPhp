<?php
/**
 * Class file for DirectSmileTypePlaceOrderResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypePlaceOrderResponse
 * @date 02/08/2012
 */
class DirectSmileTypePlaceOrderResponse extends DirectSmileWsdlClass
{
	/**
	 * The PlaceOrderResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PlaceOrderResult;
	/**
	 * Constructor
	 * @param string PlaceOrderResult
	 * @return DirectSmileTypePlaceOrderResponse
	 */
	public function __construct($_PlaceOrderResult = null)
	{
		parent::__construct(array('PlaceOrderResult'=>$_PlaceOrderResult));
	}
	/**
	 * Set PlaceOrderResult
	 * @param string PlaceOrderResult
	 * @return string
	 */
	public function setPlaceOrderResult($_PlaceOrderResult)
	{
		return ($this->PlaceOrderResult = $_PlaceOrderResult);
	}
	/**
	 * Get PlaceOrderResult
	 * @return string
	 */
	public function getPlaceOrderResult()
	{
		return $this->PlaceOrderResult;
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