<?php
/**
 * Class file for EccShippingDhlTypeGetDHLRateResponse
 * @date 03/07/2012
 */
/**
 * Class EccShippingDhlTypeGetDHLRateResponse
 * @date 03/07/2012
 */
class EccShippingDhlTypeGetDHLRateResponse extends EccShippingDhlWsdlClass
{
	/**
	 * The GetDHLRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccShippingDhlTypeShipping
	 */
	public $GetDHLRateResult;
	/**
	 * Constructor
	 * @param EccShippingDhlTypeShipping GetDHLRateResult
	 * @return EccShippingDhlTypeGetDHLRateResponse
	 */
	public function __construct($_GetDHLRateResult = null)
	{
		parent::__construct(array('GetDHLRateResult'=>$_GetDHLRateResult));
	}
	/**
	 * Set GetDHLRateResult
	 * @param Shipping GetDHLRateResult
	 * @return Shipping
	 */
	public function setGetDHLRateResult($_GetDHLRateResult)
	{
		return ($this->GetDHLRateResult = $_GetDHLRateResult);
	}
	/**
	 * Get GetDHLRateResult
	 * @return EccShippingDhlTypeShipping
	 */
	public function getGetDHLRateResult()
	{
		return $this->GetDHLRateResult;
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