<?php
/**
 * Class file for EccShippingFedexTypeGetExtendedFedExRateResponse
 * @date 03/07/2012
 */
/**
 * Class EccShippingFedexTypeGetExtendedFedExRateResponse
 * @date 03/07/2012
 */
class EccShippingFedexTypeGetExtendedFedExRateResponse extends EccShippingFedexWsdlClass
{
	/**
	 * The GetExtendedFedExRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccShippingFedexTypeShipping
	 */
	public $GetExtendedFedExRateResult;
	/**
	 * Constructor
	 * @param EccShippingFedexTypeShipping GetExtendedFedExRateResult
	 * @return EccShippingFedexTypeGetExtendedFedExRateResponse
	 */
	public function __construct($_GetExtendedFedExRateResult = null)
	{
		parent::__construct(array('GetExtendedFedExRateResult'=>$_GetExtendedFedExRateResult));
	}
	/**
	 * Set GetExtendedFedExRateResult
	 * @param Shipping GetExtendedFedExRateResult
	 * @return Shipping
	 */
	public function setGetExtendedFedExRateResult($_GetExtendedFedExRateResult)
	{
		return ($this->GetExtendedFedExRateResult = $_GetExtendedFedExRateResult);
	}
	/**
	 * Get GetExtendedFedExRateResult
	 * @return EccShippingFedexTypeShipping
	 */
	public function getGetExtendedFedExRateResult()
	{
		return $this->GetExtendedFedExRateResult;
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