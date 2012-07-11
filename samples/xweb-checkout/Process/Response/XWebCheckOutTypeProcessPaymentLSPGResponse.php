<?php
/**
 * Class file for XWebCheckOutTypeProcessPaymentLSPGResponse
 * @date 09/07/2012
 */
/**
 * Class XWebCheckOutTypeProcessPaymentLSPGResponse
 * @date 09/07/2012
 */
class XWebCheckOutTypeProcessPaymentLSPGResponse extends XWebCheckOutWsdlClass
{
	/**
	 * The PaymentGatewayResponse
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PaymentGatewayResponse;
	/**
	 * Constructor
	 * @param string PaymentGatewayResponse
	 * @return XWebCheckOutTypeProcessPaymentLSPGResponse
	 */
	public function __construct($_PaymentGatewayResponse)
	{
		parent::__construct(array('PaymentGatewayResponse'=>$_PaymentGatewayResponse));
	}
	/**
	 * Set PaymentGatewayResponse
	 * @param string PaymentGatewayResponse
	 * @return string
	 */
	public function setPaymentGatewayResponse($_PaymentGatewayResponse)
	{
		return ($this->PaymentGatewayResponse = $_PaymentGatewayResponse);
	}
	/**
	 * Get PaymentGatewayResponse
	 * @return string
	 */
	public function getPaymentGatewayResponse()
	{
		return $this->PaymentGatewayResponse;
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