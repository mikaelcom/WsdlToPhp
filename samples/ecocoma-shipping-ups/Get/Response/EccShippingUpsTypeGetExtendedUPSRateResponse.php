<?php
/**
 * Class file for EccShippingUpsTypeGetExtendedUPSRateResponse
 * @date 03/07/2012
 */
/**
 * Class EccShippingUpsTypeGetExtendedUPSRateResponse
 * @date 03/07/2012
 */
class EccShippingUpsTypeGetExtendedUPSRateResponse extends EccShippingUpsWsdlClass
{
	/**
	 * The GetExtendedUPSRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccShippingUpsTypeShipping
	 */
	public $GetExtendedUPSRateResult;
	/**
	 * Constructor
	 * @param EccShippingUpsTypeShipping GetExtendedUPSRateResult
	 * @return EccShippingUpsTypeGetExtendedUPSRateResponse
	 */
	public function __construct($_GetExtendedUPSRateResult = null)
	{
		parent::__construct(array('GetExtendedUPSRateResult'=>$_GetExtendedUPSRateResult));
	}
	/**
	 * Set GetExtendedUPSRateResult
	 * @param Shipping GetExtendedUPSRateResult
	 * @return Shipping
	 */
	public function setGetExtendedUPSRateResult($_GetExtendedUPSRateResult)
	{
		return ($this->GetExtendedUPSRateResult = $_GetExtendedUPSRateResult);
	}
	/**
	 * Get GetExtendedUPSRateResult
	 * @return EccShippingUpsTypeShipping
	 */
	public function getGetExtendedUPSRateResult()
	{
		return $this->GetExtendedUPSRateResult;
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