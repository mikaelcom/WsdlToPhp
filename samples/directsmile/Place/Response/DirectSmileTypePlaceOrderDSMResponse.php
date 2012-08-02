<?php
/**
 * Class file for DirectSmileTypePlaceOrderDSMResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypePlaceOrderDSMResponse
 * @date 02/08/2012
 */
class DirectSmileTypePlaceOrderDSMResponse extends DirectSmileWsdlClass
{
	/**
	 * The PlaceOrderDSMResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PlaceOrderDSMResult;
	/**
	 * Constructor
	 * @param string PlaceOrderDSMResult
	 * @return DirectSmileTypePlaceOrderDSMResponse
	 */
	public function __construct($_PlaceOrderDSMResult = null)
	{
		parent::__construct(array('PlaceOrderDSMResult'=>$_PlaceOrderDSMResult));
	}
	/**
	 * Set PlaceOrderDSMResult
	 * @param string PlaceOrderDSMResult
	 * @return string
	 */
	public function setPlaceOrderDSMResult($_PlaceOrderDSMResult)
	{
		return ($this->PlaceOrderDSMResult = $_PlaceOrderDSMResult);
	}
	/**
	 * Get PlaceOrderDSMResult
	 * @return string
	 */
	public function getPlaceOrderDSMResult()
	{
		return $this->PlaceOrderDSMResult;
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