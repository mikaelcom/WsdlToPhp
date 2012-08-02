<?php
/**
 * Class file for DirectSmileTypePlaceOrderAuthResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypePlaceOrderAuthResponse
 * @date 02/08/2012
 */
class DirectSmileTypePlaceOrderAuthResponse extends DirectSmileWsdlClass
{
	/**
	 * The PlaceOrderAuthResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PlaceOrderAuthResult;
	/**
	 * Constructor
	 * @param string PlaceOrderAuthResult
	 * @return DirectSmileTypePlaceOrderAuthResponse
	 */
	public function __construct($_PlaceOrderAuthResult = null)
	{
		parent::__construct(array('PlaceOrderAuthResult'=>$_PlaceOrderAuthResult));
	}
	/**
	 * Set PlaceOrderAuthResult
	 * @param string PlaceOrderAuthResult
	 * @return string
	 */
	public function setPlaceOrderAuthResult($_PlaceOrderAuthResult)
	{
		return ($this->PlaceOrderAuthResult = $_PlaceOrderAuthResult);
	}
	/**
	 * Get PlaceOrderAuthResult
	 * @return string
	 */
	public function getPlaceOrderAuthResult()
	{
		return $this->PlaceOrderAuthResult;
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