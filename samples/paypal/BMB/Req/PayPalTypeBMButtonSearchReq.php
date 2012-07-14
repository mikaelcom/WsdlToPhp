<?php
/**
 * Class file for PayPalTypeBMButtonSearchReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBMButtonSearchReq
 * @date 14/07/2012
 */
class PayPalTypeBMButtonSearchReq extends PayPalWsdlClass
{
	/**
	 * The BMButtonSearchRequest
	 * @var PayPalTypeBMButtonSearchRequestType
	 */
	public $BMButtonSearchRequest;
	/**
	 * Constructor
	 * @param PayPalTypeBMButtonSearchRequestType BMButtonSearchRequest
	 * @return PayPalTypeBMButtonSearchReq
	 */
	public function __construct($_BMButtonSearchRequest = null)
	{
		parent::__construct(array('BMButtonSearchRequest'=>$_BMButtonSearchRequest));
	}
	/**
	 * Set BMButtonSearchRequest
	 * @param BMButtonSearchRequestType BMButtonSearchRequest
	 * @return BMButtonSearchRequestType
	 */
	public function setBMButtonSearchRequest($_BMButtonSearchRequest)
	{
		return ($this->BMButtonSearchRequest = $_BMButtonSearchRequest);
	}
	/**
	 * Get BMButtonSearchRequest
	 * @return PayPalTypeBMButtonSearchRequestType
	 */
	public function getBMButtonSearchRequest()
	{
		return $this->BMButtonSearchRequest;
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