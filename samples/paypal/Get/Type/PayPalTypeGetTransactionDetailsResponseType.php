<?php
/**
 * Class file for PayPalTypeGetTransactionDetailsResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetTransactionDetailsResponseType
 * @date 14/07/2012
 */
class PayPalTypeGetTransactionDetailsResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The PaymentTransactionDetails
	 * @var PayPalTypePaymentTransactionType
	 */
	public $PaymentTransactionDetails;
	/**
	 * The ThreeDSecureDetails
	 * @var PayPalTypeThreeDSecureInfoType
	 */
	public $ThreeDSecureDetails;
	/**
	 * Constructor
	 * @param PayPalTypePaymentTransactionType PaymentTransactionDetails
	 * @param PayPalTypeThreeDSecureInfoType ThreeDSecureDetails
	 * @return PayPalTypeGetTransactionDetailsResponseType
	 */
	public function __construct($_PaymentTransactionDetails = null,$_ThreeDSecureDetails = null)
	{
		PayPalWsdlClass::__construct(array('PaymentTransactionDetails'=>$_PaymentTransactionDetails,'ThreeDSecureDetails'=>$_ThreeDSecureDetails));
	}
	/**
	 * Set PaymentTransactionDetails
	 * @param PaymentTransactionType PaymentTransactionDetails
	 * @return PaymentTransactionType
	 */
	public function setPaymentTransactionDetails($_PaymentTransactionDetails)
	{
		return ($this->PaymentTransactionDetails = $_PaymentTransactionDetails);
	}
	/**
	 * Get PaymentTransactionDetails
	 * @return PayPalTypePaymentTransactionType
	 */
	public function getPaymentTransactionDetails()
	{
		return $this->PaymentTransactionDetails;
	}
	/**
	 * Set ThreeDSecureDetails
	 * @param ThreeDSecureInfoType ThreeDSecureDetails
	 * @return ThreeDSecureInfoType
	 */
	public function setThreeDSecureDetails($_ThreeDSecureDetails)
	{
		return ($this->ThreeDSecureDetails = $_ThreeDSecureDetails);
	}
	/**
	 * Get ThreeDSecureDetails
	 * @return PayPalTypeThreeDSecureInfoType
	 */
	public function getThreeDSecureDetails()
	{
		return $this->ThreeDSecureDetails;
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