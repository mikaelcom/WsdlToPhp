<?php
/**
 * Class file for PayPalTypePaymentTransactionSearchResultType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePaymentTransactionSearchResultType
 * Documentation : PaymentTransactionSearchResultType Results from a PaymentTransaction search
 * @date 14/07/2012
 */
class PayPalTypePaymentTransactionSearchResultType extends PayPalWsdlClass
{
	/**
	 * The Timestamp
	 * Meta informations :
	 * 	- documentation : The date and time (in UTC/GMT format) the transaction occurred
	 * @var dateTime
	 */
	public $Timestamp;
	/**
	 * The Timezone
	 * Meta informations :
	 * 	- documentation : The time zone of the transaction
	 * @var string
	 */
	public $Timezone;
	/**
	 * The Type
	 * Meta informations :
	 * 	- documentation : The type of the transaction
	 * @var string
	 */
	public $Type;
	/**
	 * The Payer
	 * Meta informations :
	 * 	- documentation : The email address of the payer
	 * @var PayPalTypeEmailAddressType
	 */
	public $Payer;
	/**
	 * The PayerDisplayName
	 * Meta informations :
	 * 	- documentation : Display name of the payer
	 * @var string
	 */
	public $PayerDisplayName;
	/**
	 * The TransactionID
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The Status
	 * Meta informations :
	 * 	- documentation : The status of the transaction
	 * @var string
	 */
	public $Status;
	/**
	 * The GrossAmount
	 * Meta informations :
	 * 	- documentation : The total gross amount charged, including any profile shipping cost and taxes
	 * @var PayPalTypeBasicAmountType
	 */
	public $GrossAmount;
	/**
	 * The FeeAmount
	 * Meta informations :
	 * 	- documentation : The fee that PayPal charged for the transaction
	 * @var PayPalTypeBasicAmountType
	 */
	public $FeeAmount;
	/**
	 * The NetAmount
	 * Meta informations :
	 * 	- documentation : The net amount of the transaction
	 * @var PayPalTypeBasicAmountType
	 */
	public $NetAmount;
	/**
	 * Constructor
	 * @param dateTime Timestamp
	 * @param string Timezone
	 * @param string Type
	 * @param PayPalTypeEmailAddressType Payer
	 * @param string PayerDisplayName
	 * @param string TransactionID
	 * @param string Status
	 * @param PayPalTypeBasicAmountType GrossAmount
	 * @param PayPalTypeBasicAmountType FeeAmount
	 * @param PayPalTypeBasicAmountType NetAmount
	 * @return PayPalTypePaymentTransactionSearchResultType
	 */
	public function __construct($_Timestamp = null,$_Timezone = null,$_Type = null,$_Payer = null,$_PayerDisplayName = null,$_TransactionID = null,$_Status = null,$_GrossAmount = null,$_FeeAmount = null,$_NetAmount = null)
	{
		parent::__construct(array('Timestamp'=>$_Timestamp,'Timezone'=>$_Timezone,'Type'=>$_Type,'Payer'=>$_Payer,'PayerDisplayName'=>$_PayerDisplayName,'TransactionID'=>$_TransactionID,'Status'=>$_Status,'GrossAmount'=>$_GrossAmount,'FeeAmount'=>$_FeeAmount,'NetAmount'=>$_NetAmount));
	}
	/**
	 * Set Timestamp
	 * @param dateTime Timestamp
	 * @return dateTime
	 */
	public function setTimestamp($_Timestamp)
	{
		return ($this->Timestamp = $_Timestamp);
	}
	/**
	 * Get Timestamp
	 * @return dateTime
	 */
	public function getTimestamp()
	{
		return $this->Timestamp;
	}
	/**
	 * Set Timezone
	 * @param string Timezone
	 * @return string
	 */
	public function setTimezone($_Timezone)
	{
		return ($this->Timezone = $_Timezone);
	}
	/**
	 * Get Timezone
	 * @return string
	 */
	public function getTimezone()
	{
		return $this->Timezone;
	}
	/**
	 * Set Type
	 * @param string Type
	 * @return string
	 */
	public function setType($_Type)
	{
		return ($this->Type = $_Type);
	}
	/**
	 * Get Type
	 * @return string
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Payer
	 * @param EmailAddressType Payer
	 * @return EmailAddressType
	 */
	public function setPayer($_Payer)
	{
		return ($this->Payer = PayPalTypeEmailAddressType::valueIsValid($_Payer)?$_Payer:null);
	}
	/**
	 * Get Payer
	 * @return PayPalTypeEmailAddressType
	 */
	public function getPayer()
	{
		return $this->Payer;
	}
	/**
	 * Set PayerDisplayName
	 * @param string PayerDisplayName
	 * @return string
	 */
	public function setPayerDisplayName($_PayerDisplayName)
	{
		return ($this->PayerDisplayName = $_PayerDisplayName);
	}
	/**
	 * Get PayerDisplayName
	 * @return string
	 */
	public function getPayerDisplayName()
	{
		return $this->PayerDisplayName;
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
	 * Set Status
	 * @param string Status
	 * @return string
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = $_Status);
	}
	/**
	 * Get Status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set GrossAmount
	 * @param BasicAmountType GrossAmount
	 * @return BasicAmountType
	 */
	public function setGrossAmount($_GrossAmount)
	{
		return ($this->GrossAmount = $_GrossAmount);
	}
	/**
	 * Get GrossAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getGrossAmount()
	{
		return $this->GrossAmount;
	}
	/**
	 * Set FeeAmount
	 * @param BasicAmountType FeeAmount
	 * @return BasicAmountType
	 */
	public function setFeeAmount($_FeeAmount)
	{
		return ($this->FeeAmount = $_FeeAmount);
	}
	/**
	 * Get FeeAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getFeeAmount()
	{
		return $this->FeeAmount;
	}
	/**
	 * Set NetAmount
	 * @param BasicAmountType NetAmount
	 * @return BasicAmountType
	 */
	public function setNetAmount($_NetAmount)
	{
		return ($this->NetAmount = $_NetAmount);
	}
	/**
	 * Get NetAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getNetAmount()
	{
		return $this->NetAmount;
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