<?php
/**
 * Class file for PayPalTypeCreateRecurringPaymentsProfileResponseDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCreateRecurringPaymentsProfileResponseDetailsType
 * @date 14/07/2012
 */
class PayPalTypeCreateRecurringPaymentsProfileResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The ProfileID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Recurring Billing Profile ID
	 * @var string
	 */
	public $ProfileID;
	/**
	 * The ProfileStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Recurring Billing Profile Status
	 * @var PayPalTypeRecurringPaymentsProfileStatusType
	 */
	public $ProfileStatus;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Transaction id from DCC initial payment
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The DCCProcessorResponse
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Response from DCC initial payment
	 * @var string
	 */
	public $DCCProcessorResponse;
	/**
	 * The DCCReturnCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Return code if DCC initial payment fails
	 * @var string
	 */
	public $DCCReturnCode;
	/**
	 * Constructor
	 * @param string ProfileID
	 * @param PayPalTypeRecurringPaymentsProfileStatusType ProfileStatus
	 * @param string TransactionID
	 * @param string DCCProcessorResponse
	 * @param string DCCReturnCode
	 * @return PayPalTypeCreateRecurringPaymentsProfileResponseDetailsType
	 */
	public function __construct($_ProfileID,$_ProfileStatus = null,$_TransactionID = null,$_DCCProcessorResponse = null,$_DCCReturnCode = null)
	{
		parent::__construct(array('ProfileID'=>$_ProfileID,'ProfileStatus'=>$_ProfileStatus,'TransactionID'=>$_TransactionID,'DCCProcessorResponse'=>$_DCCProcessorResponse,'DCCReturnCode'=>$_DCCReturnCode));
	}
	/**
	 * Set ProfileID
	 * @param string ProfileID
	 * @return string
	 */
	public function setProfileID($_ProfileID)
	{
		return ($this->ProfileID = $_ProfileID);
	}
	/**
	 * Get ProfileID
	 * @return string
	 */
	public function getProfileID()
	{
		return $this->ProfileID;
	}
	/**
	 * Set ProfileStatus
	 * @param RecurringPaymentsProfileStatusType ProfileStatus
	 * @return RecurringPaymentsProfileStatusType
	 */
	public function setProfileStatus($_ProfileStatus)
	{
		return ($this->ProfileStatus = PayPalTypeRecurringPaymentsProfileStatusType::valueIsValid($_ProfileStatus)?$_ProfileStatus:null);
	}
	/**
	 * Get ProfileStatus
	 * @return PayPalTypeRecurringPaymentsProfileStatusType
	 */
	public function getProfileStatus()
	{
		return $this->ProfileStatus;
	}
	/**
	 * Set TransactionID
	 * @param string TransactionID
	 * @return string
	 */
	public function setTransactionID($_TransactionID)
	{
		return ($this->TransactionID = $_TransactionID);
	}
	/**
	 * Get TransactionID
	 * @return string
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * Set DCCProcessorResponse
	 * @param string DCCProcessorResponse
	 * @return string
	 */
	public function setDCCProcessorResponse($_DCCProcessorResponse)
	{
		return ($this->DCCProcessorResponse = $_DCCProcessorResponse);
	}
	/**
	 * Get DCCProcessorResponse
	 * @return string
	 */
	public function getDCCProcessorResponse()
	{
		return $this->DCCProcessorResponse;
	}
	/**
	 * Set DCCReturnCode
	 * @param string DCCReturnCode
	 * @return string
	 */
	public function setDCCReturnCode($_DCCReturnCode)
	{
		return ($this->DCCReturnCode = $_DCCReturnCode);
	}
	/**
	 * Get DCCReturnCode
	 * @return string
	 */
	public function getDCCReturnCode()
	{
		return $this->DCCReturnCode;
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