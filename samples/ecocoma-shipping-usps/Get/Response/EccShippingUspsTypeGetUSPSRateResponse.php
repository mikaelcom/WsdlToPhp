<?php
/**
 * Class file for EccShippingUspsTypeGetUSPSRateResponse
 * @date 03/07/2012
 */
/**
 * Class EccShippingUspsTypeGetUSPSRateResponse
 * @date 03/07/2012
 */
class EccShippingUspsTypeGetUSPSRateResponse extends EccShippingUspsWsdlClass
{
	/**
	 * The GetUSPSRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccShippingUspsTypeShipping
	 */
	public $GetUSPSRateResult;
	/**
	 * Constructor
	 * @param EccShippingUspsTypeShipping GetUSPSRateResult
	 * @return EccShippingUspsTypeGetUSPSRateResponse
	 */
	public function __construct($_GetUSPSRateResult = null)
	{
		parent::__construct(array('GetUSPSRateResult'=>$_GetUSPSRateResult));
	}
	/**
	 * Set GetUSPSRateResult
	 * @param Shipping GetUSPSRateResult
	 * @return Shipping
	 */
	public function setGetUSPSRateResult($_GetUSPSRateResult)
	{
		return ($this->GetUSPSRateResult = $_GetUSPSRateResult);
	}
	/**
	 * Get GetUSPSRateResult
	 * @return EccShippingUspsTypeShipping
	 */
	public function getGetUSPSRateResult()
	{
		return $this->GetUSPSRateResult;
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