<?php
/**
 * Class file for PayPalTypeThreeDSecureInfoType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeThreeDSecureInfoType
 * Documentation : 3DSecureInfoType Information about 3D Secure parameters.
 * @date 14/07/2012
 */
class PayPalTypeThreeDSecureInfoType extends PayPalWsdlClass
{
	/**
	 * The ThreeDSecureRequest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeThreeDSecureRequestType
	 */
	public $ThreeDSecureRequest;
	/**
	 * The ThreeDSecureResponse
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeThreeDSecureResponseType
	 */
	public $ThreeDSecureResponse;
	/**
	 * Constructor
	 * @param PayPalTypeThreeDSecureRequestType ThreeDSecureRequest
	 * @param PayPalTypeThreeDSecureResponseType ThreeDSecureResponse
	 * @return PayPalTypeThreeDSecureInfoType
	 */
	public function __construct($_ThreeDSecureRequest = null,$_ThreeDSecureResponse = null)
	{
		parent::__construct(array('ThreeDSecureRequest'=>$_ThreeDSecureRequest,'ThreeDSecureResponse'=>$_ThreeDSecureResponse));
	}
	/**
	 * Set ThreeDSecureRequest
	 * @param ThreeDSecureRequestType ThreeDSecureRequest
	 * @return ThreeDSecureRequestType
	 */
	public function setThreeDSecureRequest($_ThreeDSecureRequest)
	{
		return ($this->ThreeDSecureRequest = $_ThreeDSecureRequest);
	}
	/**
	 * Get ThreeDSecureRequest
	 * @return PayPalTypeThreeDSecureRequestType
	 */
	public function getThreeDSecureRequest()
	{
		return $this->ThreeDSecureRequest;
	}
	/**
	 * Set ThreeDSecureResponse
	 * @param ThreeDSecureResponseType ThreeDSecureResponse
	 * @return ThreeDSecureResponseType
	 */
	public function setThreeDSecureResponse($_ThreeDSecureResponse)
	{
		return ($this->ThreeDSecureResponse = $_ThreeDSecureResponse);
	}
	/**
	 * Get ThreeDSecureResponse
	 * @return PayPalTypeThreeDSecureResponseType
	 */
	public function getThreeDSecureResponse()
	{
		return $this->ThreeDSecureResponse;
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