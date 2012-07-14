<?php
/**
 * Class file for PayPalTypeDoCancelRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoCancelRequestType
 * @date 14/07/2012
 */
class PayPalTypeDoCancelRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The CancelMsgSubID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Msg Sub Id that was used for the orginal operation.
	 * @var string
	 */
	public $CancelMsgSubID;
	/**
	 * The APIType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Original API's type
	 * @var PayPalTypeAPIType
	 */
	public $APIType;
	/**
	 * Constructor
	 * @param string CancelMsgSubID
	 * @param PayPalTypeAPIType APIType
	 * @return PayPalTypeDoCancelRequestType
	 */
	public function __construct($_CancelMsgSubID,$_APIType)
	{
		PayPalWsdlClass::__construct(array('CancelMsgSubID'=>$_CancelMsgSubID,'APIType'=>$_APIType));
	}
	/**
	 * Set CancelMsgSubID
	 * @param string CancelMsgSubID
	 * @return string
	 */
	public function setCancelMsgSubID($_CancelMsgSubID)
	{
		return ($this->CancelMsgSubID = $_CancelMsgSubID);
	}
	/**
	 * Get CancelMsgSubID
	 * @return string
	 */
	public function getCancelMsgSubID()
	{
		return $this->CancelMsgSubID;
	}
	/**
	 * Set APIType
	 * @param APIType APIType
	 * @return APIType
	 */
	public function setAPIType($_APIType)
	{
		return ($this->APIType = PayPalTypeAPIType::valueIsValid($_APIType)?$_APIType:null);
	}
	/**
	 * Get APIType
	 * @return PayPalTypeAPIType
	 */
	public function getAPIType()
	{
		return $this->APIType;
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