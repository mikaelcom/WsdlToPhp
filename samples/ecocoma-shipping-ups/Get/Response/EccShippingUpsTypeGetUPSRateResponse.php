<?php
/**
 * Class file for EccShippingUpsTypeGetUPSRateResponse
 * @date 03/07/2012
 */
/**
 * Class EccShippingUpsTypeGetUPSRateResponse
 * @date 03/07/2012
 */
class EccShippingUpsTypeGetUPSRateResponse extends EccShippingUpsWsdlClass
{
	/**
	 * The GetUPSRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccShippingUpsTypeShipping
	 */
	public $GetUPSRateResult;
	/**
	 * Constructor
	 * @param EccShippingUpsTypeShipping GetUPSRateResult
	 * @return EccShippingUpsTypeGetUPSRateResponse
	 */
	public function __construct($_GetUPSRateResult = null)
	{
		parent::__construct(array('GetUPSRateResult'=>$_GetUPSRateResult));
	}
	/**
	 * Set GetUPSRateResult
	 * @param Shipping GetUPSRateResult
	 * @return Shipping
	 */
	public function setGetUPSRateResult($_GetUPSRateResult)
	{
		return ($this->GetUPSRateResult = $_GetUPSRateResult);
	}
	/**
	 * Get GetUPSRateResult
	 * @return EccShippingUpsTypeShipping
	 */
	public function getGetUPSRateResult()
	{
		return $this->GetUPSRateResult;
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