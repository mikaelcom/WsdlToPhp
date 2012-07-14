<?php
/**
 * Class file for PayPalTypeBMUpdateButtonReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBMUpdateButtonReq
 * @date 14/07/2012
 */
class PayPalTypeBMUpdateButtonReq extends PayPalWsdlClass
{
	/**
	 * The BMUpdateButtonRequest
	 * @var PayPalTypeBMUpdateButtonRequestType
	 */
	public $BMUpdateButtonRequest;
	/**
	 * Constructor
	 * @param PayPalTypeBMUpdateButtonRequestType BMUpdateButtonRequest
	 * @return PayPalTypeBMUpdateButtonReq
	 */
	public function __construct($_BMUpdateButtonRequest = null)
	{
		parent::__construct(array('BMUpdateButtonRequest'=>$_BMUpdateButtonRequest));
	}
	/**
	 * Set BMUpdateButtonRequest
	 * @param BMUpdateButtonRequestType BMUpdateButtonRequest
	 * @return BMUpdateButtonRequestType
	 */
	public function setBMUpdateButtonRequest($_BMUpdateButtonRequest)
	{
		return ($this->BMUpdateButtonRequest = $_BMUpdateButtonRequest);
	}
	/**
	 * Get BMUpdateButtonRequest
	 * @return PayPalTypeBMUpdateButtonRequestType
	 */
	public function getBMUpdateButtonRequest()
	{
		return $this->BMUpdateButtonRequest;
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