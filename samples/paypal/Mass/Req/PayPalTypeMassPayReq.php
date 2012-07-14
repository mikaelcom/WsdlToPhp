<?php
/**
 * Class file for PayPalTypeMassPayReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeMassPayReq
 * @date 14/07/2012
 */
class PayPalTypeMassPayReq extends PayPalWsdlClass
{
	/**
	 * The MassPayRequest
	 * @var PayPalTypeMassPayRequestType
	 */
	public $MassPayRequest;
	/**
	 * Constructor
	 * @param PayPalTypeMassPayRequestType MassPayRequest
	 * @return PayPalTypeMassPayReq
	 */
	public function __construct($_MassPayRequest = null)
	{
		parent::__construct(array('MassPayRequest'=>$_MassPayRequest));
	}
	/**
	 * Set MassPayRequest
	 * @param MassPayRequestType MassPayRequest
	 * @return MassPayRequestType
	 */
	public function setMassPayRequest($_MassPayRequest)
	{
		return ($this->MassPayRequest = $_MassPayRequest);
	}
	/**
	 * Get MassPayRequest
	 * @return PayPalTypeMassPayRequestType
	 */
	public function getMassPayRequest()
	{
		return $this->MassPayRequest;
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