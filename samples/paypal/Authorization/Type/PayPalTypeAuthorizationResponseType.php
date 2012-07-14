<?php
/**
 * Class file for PayPalTypeAuthorizationResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAuthorizationResponseType
 * @date 14/07/2012
 */
class PayPalTypeAuthorizationResponseType extends PayPalWsdlClass
{
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- documentation : Status will denote whether Auto authorization was successful or not.
	 * @var PayPalTypeAckCodeType
	 */
	public $Status;
	/**
	 * The AuthorizationError
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var PayPalTypeErrorType
	 */
	public $AuthorizationError;
	/**
	 * Constructor
	 * @param PayPalTypeAckCodeType Status
	 * @param PayPalTypeErrorType AuthorizationError
	 * @return PayPalTypeAuthorizationResponseType
	 */
	public function __construct($_Status,$_AuthorizationError = null)
	{
		parent::__construct(array('Status'=>$_Status,'AuthorizationError'=>$_AuthorizationError));
	}
	/**
	 * Set Status
	 * @param AckCodeType Status
	 * @return AckCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = PayPalTypeAckCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return PayPalTypeAckCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set AuthorizationError
	 * @param ErrorType AuthorizationError
	 * @return ErrorType
	 */
	public function setAuthorizationError($_AuthorizationError)
	{
		return ($this->AuthorizationError = $_AuthorizationError);
	}
	/**
	 * Get AuthorizationError
	 * @return PayPalTypeErrorType
	 */
	public function getAuthorizationError()
	{
		return $this->AuthorizationError;
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