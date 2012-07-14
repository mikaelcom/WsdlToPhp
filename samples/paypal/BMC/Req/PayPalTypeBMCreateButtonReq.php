<?php
/**
 * Class file for PayPalTypeBMCreateButtonReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBMCreateButtonReq
 * @date 14/07/2012
 */
class PayPalTypeBMCreateButtonReq extends PayPalWsdlClass
{
	/**
	 * The BMCreateButtonRequest
	 * @var PayPalTypeBMCreateButtonRequestType
	 */
	public $BMCreateButtonRequest;
	/**
	 * Constructor
	 * @param PayPalTypeBMCreateButtonRequestType BMCreateButtonRequest
	 * @return PayPalTypeBMCreateButtonReq
	 */
	public function __construct($_BMCreateButtonRequest = null)
	{
		parent::__construct(array('BMCreateButtonRequest'=>$_BMCreateButtonRequest));
	}
	/**
	 * Set BMCreateButtonRequest
	 * @param BMCreateButtonRequestType BMCreateButtonRequest
	 * @return BMCreateButtonRequestType
	 */
	public function setBMCreateButtonRequest($_BMCreateButtonRequest)
	{
		return ($this->BMCreateButtonRequest = $_BMCreateButtonRequest);
	}
	/**
	 * Get BMCreateButtonRequest
	 * @return PayPalTypeBMCreateButtonRequestType
	 */
	public function getBMCreateButtonRequest()
	{
		return $this->BMCreateButtonRequest;
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