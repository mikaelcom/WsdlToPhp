<?php
/**
 * Class file for PaylineWebPaymentTypeDoMassCaptureRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDoMassCaptureRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDoMassCaptureRequest extends PaylineWebPaymentWsdlClass
{
	/**
	 * The captureAuthorizationList
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeCaptureAuthorizationList
	 */
	public $captureAuthorizationList;
	/**
	 * The comment
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $comment;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeCaptureAuthorizationList captureAuthorizationList
	 * @param string comment
	 * @return PaylineWebPaymentTypeDoMassCaptureRequest
	 */
	public function __construct($_captureAuthorizationList = null,$_comment = null)
	{
		parent::__construct(array('captureAuthorizationList'=>$_captureAuthorizationList,'comment'=>$_comment));
	}
	/**
	 * Set captureAuthorizationList
	 * @param captureAuthorizationList captureAuthorizationList
	 * @return captureAuthorizationList
	 */
	public function setCaptureAuthorizationList($_captureAuthorizationList)
	{
		return ($this->captureAuthorizationList = $_captureAuthorizationList);
	}
	/**
	 * Get captureAuthorizationList
	 * @return PaylineWebPaymentTypecaptureAuthorizationList
	 */
	public function getCaptureAuthorizationList()
	{
		return $this->captureAuthorizationList;
	}
	/**
	 * Set comment
	 * @param string comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get comment
	 * @return string
	 */
	public function getComment()
	{
		return $this->comment;
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