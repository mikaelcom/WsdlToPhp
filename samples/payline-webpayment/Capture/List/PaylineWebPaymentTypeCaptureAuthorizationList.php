<?php
/**
 * Class file for PaylineWebPaymentTypeCaptureAuthorizationList
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeCaptureAuthorizationList
 * Documentation : An array of authorization to capture
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeCaptureAuthorizationList extends PaylineWebPaymentWsdlClass
{
	/**
	 * The capture
	 * Meta informations :
	 * 	- maxOccurs : 5000
	 * 	- minOccurs : 1
	 * @var PaylineWebPaymentTypeCapture
	 */
	public $capture;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeCapture capture
	 * @return PaylineWebPaymentTypeCaptureAuthorizationList
	 */
	public function __construct($_capture)
	{
		parent::__construct(array('capture'=>$_capture));
	}
	/**
	 * Set capture
	 * @param capture capture
	 * @return capture
	 */
	public function setCapture($_capture)
	{
		return ($this->capture = $_capture);
	}
	/**
	 * Get capture
	 * @return PaylineWebPaymentTypecapture
	 */
	public function getCapture()
	{
		return $this->capture;
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