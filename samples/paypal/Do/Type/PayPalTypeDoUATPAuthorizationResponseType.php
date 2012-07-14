<?php
/**
 * Class file for PayPalTypeDoUATPAuthorizationResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoUATPAuthorizationResponseType
 * @date 14/07/2012
 */
class PayPalTypeDoUATPAuthorizationResponseType extends PayPalTypeDoAuthorizationResponseType
{
	/**
	 * The UATPDetails
	 * @var PayPalTypeUATPDetailsType
	 */
	public $UATPDetails;
	/**
	 * The AuthorizationCode
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Auth Authorization Code.
	 * @var string
	 */
	public $AuthorizationCode;
	/**
	 * The InvoiceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Invoice ID. A pass through.
	 * @var string
	 */
	public $InvoiceID;
	/**
	 * The MsgSubID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Unique id for each API request to prevent duplicate payments. Optional Character length and limits: 38 single-byte characters maximum.
	 * @var string
	 */
	public $MsgSubID;
	/**
	 * Constructor
	 * @param PayPalTypeUATPDetailsType UATPDetails
	 * @param string AuthorizationCode
	 * @param string InvoiceID
	 * @param string MsgSubID
	 * @return PayPalTypeDoUATPAuthorizationResponseType
	 */
	public function __construct($_UATPDetails = null,$_AuthorizationCode,$_InvoiceID = null,$_MsgSubID = null)
	{
		PayPalWsdlClass::__construct(array('UATPDetails'=>$_UATPDetails,'AuthorizationCode'=>$_AuthorizationCode,'InvoiceID'=>$_InvoiceID,'MsgSubID'=>$_MsgSubID));
	}
	/**
	 * Set UATPDetails
	 * @param UATPDetailsType UATPDetails
	 * @return UATPDetailsType
	 */
	public function setUATPDetails($_UATPDetails)
	{
		return ($this->UATPDetails = $_UATPDetails);
	}
	/**
	 * Get UATPDetails
	 * @return PayPalTypeUATPDetailsType
	 */
	public function getUATPDetails()
	{
		return $this->UATPDetails;
	}
	/**
	 * Set AuthorizationCode
	 * @param string AuthorizationCode
	 * @return string
	 */
	public function setAuthorizationCode($_AuthorizationCode)
	{
		return ($this->AuthorizationCode = $_AuthorizationCode);
	}
	/**
	 * Get AuthorizationCode
	 * @return string
	 */
	public function getAuthorizationCode()
	{
		return $this->AuthorizationCode;
	}
	/**
	 * Set InvoiceID
	 * @param string InvoiceID
	 * @return string
	 */
	public function setInvoiceID($_InvoiceID)
	{
		return ($this->InvoiceID = $_InvoiceID);
	}
	/**
	 * Get InvoiceID
	 * @return string
	 */
	public function getInvoiceID()
	{
		return $this->InvoiceID;
	}
	/**
	 * Set MsgSubID
	 * @param string MsgSubID
	 * @return string
	 */
	public function setMsgSubID($_MsgSubID)
	{
		return ($this->MsgSubID = $_MsgSubID);
	}
	/**
	 * Get MsgSubID
	 * @return string
	 */
	public function getMsgSubID()
	{
		return $this->MsgSubID;
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