<?php
/**
 * Class file for EccShippingDhlTypeGetExtendedDHLRateResponse
 * @date 03/07/2012
 */
/**
 * Class EccShippingDhlTypeGetExtendedDHLRateResponse
 * @date 03/07/2012
 */
class EccShippingDhlTypeGetExtendedDHLRateResponse extends EccShippingDhlWsdlClass
{
	/**
	 * The GetExtendedDHLRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccShippingDhlTypeShipping
	 */
	public $GetExtendedDHLRateResult;
	/**
	 * Constructor
	 * @param EccShippingDhlTypeShipping GetExtendedDHLRateResult
	 * @return EccShippingDhlTypeGetExtendedDHLRateResponse
	 */
	public function __construct($_GetExtendedDHLRateResult = null)
	{
		parent::__construct(array('GetExtendedDHLRateResult'=>$_GetExtendedDHLRateResult));
	}
	/**
	 * Set GetExtendedDHLRateResult
	 * @param Shipping GetExtendedDHLRateResult
	 * @return Shipping
	 */
	public function setGetExtendedDHLRateResult($_GetExtendedDHLRateResult)
	{
		return ($this->GetExtendedDHLRateResult = $_GetExtendedDHLRateResult);
	}
	/**
	 * Get GetExtendedDHLRateResult
	 * @return EccShippingDhlTypeShipping
	 */
	public function getGetExtendedDHLRateResult()
	{
		return $this->GetExtendedDHLRateResult;
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