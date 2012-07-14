<?php
/**
 * Class file for PayPalTypePaymentType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePaymentType
 * @date 14/07/2012
 */
class PayPalTypePaymentType extends PayPalWsdlClass
{
	/**
	 * The PaymentMeans
	 * @var PayPalTypePaymentMeansType
	 */
	public $PaymentMeans;
	/**
	 * Constructor
	 * @param PayPalTypePaymentMeansType PaymentMeans
	 * @return PayPalTypePaymentType
	 */
	public function __construct($_PaymentMeans = null)
	{
		parent::__construct(array('PaymentMeans'=>$_PaymentMeans));
	}
	/**
	 * Set PaymentMeans
	 * @param PaymentMeansType PaymentMeans
	 * @return PaymentMeansType
	 */
	public function setPaymentMeans($_PaymentMeans)
	{
		return ($this->PaymentMeans = $_PaymentMeans);
	}
	/**
	 * Get PaymentMeans
	 * @return PayPalTypePaymentMeansType
	 */
	public function getPaymentMeans()
	{
		return $this->PaymentMeans;
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