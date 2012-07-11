<?php
/**
 * Class file for EccShippingFedexTypeGetFedExRateResponse
 * @date 03/07/2012
 */
/**
 * Class EccShippingFedexTypeGetFedExRateResponse
 * @date 03/07/2012
 */
class EccShippingFedexTypeGetFedExRateResponse extends EccShippingFedexWsdlClass
{
	/**
	 * The GetFedExRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccShippingFedexTypeShipping
	 */
	public $GetFedExRateResult;
	/**
	 * Constructor
	 * @param EccShippingFedexTypeShipping GetFedExRateResult
	 * @return EccShippingFedexTypeGetFedExRateResponse
	 */
	public function __construct($_GetFedExRateResult = null)
	{
		parent::__construct(array('GetFedExRateResult'=>$_GetFedExRateResult));
	}
	/**
	 * Set GetFedExRateResult
	 * @param Shipping GetFedExRateResult
	 * @return Shipping
	 */
	public function setGetFedExRateResult($_GetFedExRateResult)
	{
		return ($this->GetFedExRateResult = $_GetFedExRateResult);
	}
	/**
	 * Get GetFedExRateResult
	 * @return EccShippingFedexTypeShipping
	 */
	public function getGetFedExRateResult()
	{
		return $this->GetFedExRateResult;
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