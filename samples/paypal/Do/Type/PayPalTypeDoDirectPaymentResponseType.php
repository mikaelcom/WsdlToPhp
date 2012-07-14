<?php
/**
 * Class file for PayPalTypeDoDirectPaymentResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoDirectPaymentResponseType
 * @date 14/07/2012
 */
class PayPalTypeDoDirectPaymentResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : The amount of the payment as specified by you on DoDirectPaymentRequest.
	 * @var PayPalTypeBasicAmountType
	 */
	public $Amount;
	/**
	 * The AVSCode
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Address Verification System response code. Character limit: One single-byte alphanumeric character AVS CodeMeaningMatched Details A AddressAddress only (no ZIP) B International “A”Address only (no ZIP) CInternational “N” None DInternational “X” Address and Postal Code E Not allowed for MOTO (Internet/Phone) transactions Not applicable F UK-specific “X”Address and Postal Code G Global Unavailable Not applicable I International UnavailableNot applicable N NoNone PPostal (International “Z”)Postal Code only (no Address) RRetryNot applicable S Service not Supported Not applicable U UnavailableNot applicable W Whole ZIPNine-digit ZIP code (no Address) X Exact match Address and nine-digit ZIP code Y YesAddress and five-digit ZIP Z ZIP Five-digit ZIP code (no Address) All others Error Not applicable
	 * @var string
	 */
	public $AVSCode;
	/**
	 * The CVV2Code
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Result of the CVV2 check by PayPal. CVV2 CodeMeaningMatched Details M MatchCVV2 N No match None P Not ProcessedNot applicable SService not SupportedNot applicable U UnavailableNot applicable XNo response Not applicable All others ErrorNot applicable
	 * @var string
	 */
	public $CVV2Code;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Transaction identification number. Character length and limitations: 19 characters maximum.
	 * @var PayPalTypeTransactionId
	 */
	public $TransactionID;
	/**
	 * The PendingReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The reason why a particular transaction went in pending.
	 * @var PayPalTypePendingStatusCodeType
	 */
	public $PendingReason;
	/**
	 * The PaymentStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This will identify the actual transaction status.
	 * @var PayPalTypePaymentStatusCodeType
	 */
	public $PaymentStatus;
	/**
	 * The FMFDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var PayPalTypeFMFDetailsType
	 */
	public $FMFDetails;
	/**
	 * The ThreeDSecureResponse
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var PayPalTypeThreeDSecureResponseType
	 */
	public $ThreeDSecureResponse;
	/**
	 * The PaymentAdviceCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Response code from the processor when a recurring transaction is declined.
	 * @var string
	 */
	public $PaymentAdviceCode;
	/**
	 * Constructor
	 * @param PayPalTypeBasicAmountType Amount
	 * @param string AVSCode
	 * @param string CVV2Code
	 * @param PayPalTypeTransactionId TransactionID
	 * @param PayPalTypePendingStatusCodeType PendingReason
	 * @param PayPalTypePaymentStatusCodeType PaymentStatus
	 * @param PayPalTypeFMFDetailsType FMFDetails
	 * @param PayPalTypeThreeDSecureResponseType ThreeDSecureResponse
	 * @param string PaymentAdviceCode
	 * @return PayPalTypeDoDirectPaymentResponseType
	 */
	public function __construct($_Amount,$_AVSCode,$_CVV2Code,$_TransactionID,$_PendingReason = null,$_PaymentStatus = null,$_FMFDetails = null,$_ThreeDSecureResponse = null,$_PaymentAdviceCode = null)
	{
		PayPalWsdlClass::__construct(array('Amount'=>$_Amount,'AVSCode'=>$_AVSCode,'CVV2Code'=>$_CVV2Code,'TransactionID'=>$_TransactionID,'PendingReason'=>$_PendingReason,'PaymentStatus'=>$_PaymentStatus,'FMFDetails'=>$_FMFDetails,'ThreeDSecureResponse'=>$_ThreeDSecureResponse,'PaymentAdviceCode'=>$_PaymentAdviceCode));
	}
	/**
	 * Set Amount
	 * @param BasicAmountType Amount
	 * @return BasicAmountType
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set AVSCode
	 * @param string AVSCode
	 * @return string
	 */
	public function setAVSCode($_AVSCode)
	{
		return ($this->AVSCode = $_AVSCode);
	}
	/**
	 * Get AVSCode
	 * @return string
	 */
	public function getAVSCode()
	{
		return $this->AVSCode;
	}
	/**
	 * Set CVV2Code
	 * @param string CVV2Code
	 * @return string
	 */
	public function setCVV2Code($_CVV2Code)
	{
		return ($this->CVV2Code = $_CVV2Code);
	}
	/**
	 * Get CVV2Code
	 * @return string
	 */
	public function getCVV2Code()
	{
		return $this->CVV2Code;
	}
	/**
	 * Set TransactionID
	 * @param TransactionId TransactionID
	 * @return TransactionId
	 */
	public function setTransactionID($_TransactionID)
	{
		return ($this->TransactionID = PayPalTypeTransactionId::valueIsValid($_TransactionID)?$_TransactionID:null);
	}
	/**
	 * Get TransactionID
	 * @return PayPalTypeTransactionId
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * Set PendingReason
	 * @param PendingStatusCodeType PendingReason
	 * @return PendingStatusCodeType
	 */
	public function setPendingReason($_PendingReason)
	{
		return ($this->PendingReason = PayPalTypePendingStatusCodeType::valueIsValid($_PendingReason)?$_PendingReason:null);
	}
	/**
	 * Get PendingReason
	 * @return PayPalTypePendingStatusCodeType
	 */
	public function getPendingReason()
	{
		return $this->PendingReason;
	}
	/**
	 * Set PaymentStatus
	 * @param PaymentStatusCodeType PaymentStatus
	 * @return PaymentStatusCodeType
	 */
	public function setPaymentStatus($_PaymentStatus)
	{
		return ($this->PaymentStatus = PayPalTypePaymentStatusCodeType::valueIsValid($_PaymentStatus)?$_PaymentStatus:null);
	}
	/**
	 * Get PaymentStatus
	 * @return PayPalTypePaymentStatusCodeType
	 */
	public function getPaymentStatus()
	{
		return $this->PaymentStatus;
	}
	/**
	 * Set FMFDetails
	 * @param FMFDetailsType FMFDetails
	 * @return FMFDetailsType
	 */
	public function setFMFDetails($_FMFDetails)
	{
		return ($this->FMFDetails = $_FMFDetails);
	}
	/**
	 * Get FMFDetails
	 * @return PayPalTypeFMFDetailsType
	 */
	public function getFMFDetails()
	{
		return $this->FMFDetails;
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
	 * Set PaymentAdviceCode
	 * @param string PaymentAdviceCode
	 * @return string
	 */
	public function setPaymentAdviceCode($_PaymentAdviceCode)
	{
		return ($this->PaymentAdviceCode = $_PaymentAdviceCode);
	}
	/**
	 * Get PaymentAdviceCode
	 * @return string
	 */
	public function getPaymentAdviceCode()
	{
		return $this->PaymentAdviceCode;
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