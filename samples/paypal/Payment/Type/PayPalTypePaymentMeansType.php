<?php
/**
 * Class file for PayPalTypePaymentMeansType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePaymentMeansType
 * @date 14/07/2012
 */
class PayPalTypePaymentMeansType extends PayPalWsdlClass
{
	/**
	 * The TypeCodeID
	 * @var PayPalTypeSellerPaymentMethodCodeType
	 */
	public $TypeCodeID;
	/**
	 * Constructor
	 * @param PayPalTypeSellerPaymentMethodCodeType TypeCodeID
	 * @return PayPalTypePaymentMeansType
	 */
	public function __construct($_TypeCodeID = null)
	{
		parent::__construct(array('TypeCodeID'=>$_TypeCodeID));
	}
	/**
	 * Set TypeCodeID
	 * @param SellerPaymentMethodCodeType TypeCodeID
	 * @return SellerPaymentMethodCodeType
	 */
	public function setTypeCodeID($_TypeCodeID)
	{
		return ($this->TypeCodeID = PayPalTypeSellerPaymentMethodCodeType::valueIsValid($_TypeCodeID)?$_TypeCodeID:null);
	}
	/**
	 * Get TypeCodeID
	 * @return PayPalTypeSellerPaymentMethodCodeType
	 */
	public function getTypeCodeID()
	{
		return $this->TypeCodeID;
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