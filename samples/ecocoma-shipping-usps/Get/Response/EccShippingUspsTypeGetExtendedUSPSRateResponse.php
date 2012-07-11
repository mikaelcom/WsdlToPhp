<?php
/**
 * Class file for EccShippingUspsTypeGetExtendedUSPSRateResponse
 * @date 03/07/2012
 */
/**
 * Class EccShippingUspsTypeGetExtendedUSPSRateResponse
 * @date 03/07/2012
 */
class EccShippingUspsTypeGetExtendedUSPSRateResponse extends EccShippingUspsWsdlClass
{
	/**
	 * The GetExtendedUSPSRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccShippingUspsTypeShipping
	 */
	public $GetExtendedUSPSRateResult;
	/**
	 * Constructor
	 * @param EccShippingUspsTypeShipping GetExtendedUSPSRateResult
	 * @return EccShippingUspsTypeGetExtendedUSPSRateResponse
	 */
	public function __construct($_GetExtendedUSPSRateResult = null)
	{
		parent::__construct(array('GetExtendedUSPSRateResult'=>$_GetExtendedUSPSRateResult));
	}
	/**
	 * Set GetExtendedUSPSRateResult
	 * @param Shipping GetExtendedUSPSRateResult
	 * @return Shipping
	 */
	public function setGetExtendedUSPSRateResult($_GetExtendedUSPSRateResult)
	{
		return ($this->GetExtendedUSPSRateResult = $_GetExtendedUSPSRateResult);
	}
	/**
	 * Get GetExtendedUSPSRateResult
	 * @return EccShippingUspsTypeShipping
	 */
	public function getGetExtendedUSPSRateResult()
	{
		return $this->GetExtendedUSPSRateResult;
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