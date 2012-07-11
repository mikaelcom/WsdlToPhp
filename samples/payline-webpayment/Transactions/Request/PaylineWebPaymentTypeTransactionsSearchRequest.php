<?php
/**
 * Class file for PaylineWebPaymentTypeTransactionsSearchRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeTransactionsSearchRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeTransactionsSearchRequest extends PaylineWebPaymentWsdlClass
{
	/**
	 * The transactionId
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $transactionId;
	/**
	 * The orderRef
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $orderRef;
	/**
	 * The startDate
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $startDate;
	/**
	 * The endDate
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $endDate;
	/**
	 * The contractNumber
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $contractNumber;
	/**
	 * The authorizationNumber
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $authorizationNumber;
	/**
	 * The returnCode
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $returnCode;
	/**
	 * The paymentMean
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $paymentMean;
	/**
	 * The transactionType
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $transactionType;
	/**
	 * The name
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $name;
	/**
	 * The firstName
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $firstName;
	/**
	 * The email
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $email;
	/**
	 * The cardNumber
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $cardNumber;
	/**
	 * The currency
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $currency;
	/**
	 * The minAmount
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $minAmount;
	/**
	 * The maxAmount
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $maxAmount;
	/**
	 * The walletId
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $walletId;
	/**
	 * The sequenceNumber
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $sequenceNumber;
	/**
	 * Constructor
	 * @param string transactionId
	 * @param string orderRef
	 * @param string startDate
	 * @param string endDate
	 * @param string contractNumber
	 * @param string authorizationNumber
	 * @param string returnCode
	 * @param string paymentMean
	 * @param string transactionType
	 * @param string name
	 * @param string firstName
	 * @param string email
	 * @param string cardNumber
	 * @param string currency
	 * @param string minAmount
	 * @param string maxAmount
	 * @param string walletId
	 * @param string sequenceNumber
	 * @return PaylineWebPaymentTypeTransactionsSearchRequest
	 */
	public function __construct($_transactionId = null,$_orderRef = null,$_startDate = null,$_endDate = null,$_contractNumber = null,$_authorizationNumber = null,$_returnCode = null,$_paymentMean = null,$_transactionType = null,$_name = null,$_firstName = null,$_email = null,$_cardNumber = null,$_currency = null,$_minAmount = null,$_maxAmount = null,$_walletId = null,$_sequenceNumber = null)
	{
		parent::__construct(array('transactionId'=>$_transactionId,'orderRef'=>$_orderRef,'startDate'=>$_startDate,'endDate'=>$_endDate,'contractNumber'=>$_contractNumber,'authorizationNumber'=>$_authorizationNumber,'returnCode'=>$_returnCode,'paymentMean'=>$_paymentMean,'transactionType'=>$_transactionType,'name'=>$_name,'firstName'=>$_firstName,'email'=>$_email,'cardNumber'=>$_cardNumber,'currency'=>$_currency,'minAmount'=>$_minAmount,'maxAmount'=>$_maxAmount,'walletId'=>$_walletId,'sequenceNumber'=>$_sequenceNumber));
	}
	/**
	 * Set transactionId
	 * @param string transactionId
	 * @return string
	 */
	public function setTransactionId($_transactionId)
	{
		return ($this->transactionId = $_transactionId);
	}
	/**
	 * Get transactionId
	 * @return string
	 */
	public function getTransactionId()
	{
		return $this->transactionId;
	}
	/**
	 * Set orderRef
	 * @param string orderRef
	 * @return string
	 */
	public function setOrderRef($_orderRef)
	{
		return ($this->orderRef = $_orderRef);
	}
	/**
	 * Get orderRef
	 * @return string
	 */
	public function getOrderRef()
	{
		return $this->orderRef;
	}
	/**
	 * Set startDate
	 * @param string startDate
	 * @return string
	 */
	public function setStartDate($_startDate)
	{
		return ($this->startDate = $_startDate);
	}
	/**
	 * Get startDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->startDate;
	}
	/**
	 * Set endDate
	 * @param string endDate
	 * @return string
	 */
	public function setEndDate($_endDate)
	{
		return ($this->endDate = $_endDate);
	}
	/**
	 * Get endDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->endDate;
	}
	/**
	 * Set contractNumber
	 * @param string contractNumber
	 * @return string
	 */
	public function setContractNumber($_contractNumber)
	{
		return ($this->contractNumber = $_contractNumber);
	}
	/**
	 * Get contractNumber
	 * @return string
	 */
	public function getContractNumber()
	{
		return $this->contractNumber;
	}
	/**
	 * Set authorizationNumber
	 * @param string authorizationNumber
	 * @return string
	 */
	public function setAuthorizationNumber($_authorizationNumber)
	{
		return ($this->authorizationNumber = $_authorizationNumber);
	}
	/**
	 * Get authorizationNumber
	 * @return string
	 */
	public function getAuthorizationNumber()
	{
		return $this->authorizationNumber;
	}
	/**
	 * Set returnCode
	 * @param string returnCode
	 * @return string
	 */
	public function setReturnCode($_returnCode)
	{
		return ($this->returnCode = $_returnCode);
	}
	/**
	 * Get returnCode
	 * @return string
	 */
	public function getReturnCode()
	{
		return $this->returnCode;
	}
	/**
	 * Set paymentMean
	 * @param string paymentMean
	 * @return string
	 */
	public function setPaymentMean($_paymentMean)
	{
		return ($this->paymentMean = $_paymentMean);
	}
	/**
	 * Get paymentMean
	 * @return string
	 */
	public function getPaymentMean()
	{
		return $this->paymentMean;
	}
	/**
	 * Set transactionType
	 * @param string transactionType
	 * @return string
	 */
	public function setTransactionType($_transactionType)
	{
		return ($this->transactionType = $_transactionType);
	}
	/**
	 * Get transactionType
	 * @return string
	 */
	public function getTransactionType()
	{
		return $this->transactionType;
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set firstName
	 * @param string firstName
	 * @return string
	 */
	public function setFirstName($_firstName)
	{
		return ($this->firstName = $_firstName);
	}
	/**
	 * Get firstName
	 * @return string
	 */
	public function getFirstName()
	{
		return $this->firstName;
	}
	/**
	 * Set email
	 * @param string email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set cardNumber
	 * @param string cardNumber
	 * @return string
	 */
	public function setCardNumber($_cardNumber)
	{
		return ($this->cardNumber = $_cardNumber);
	}
	/**
	 * Get cardNumber
	 * @return string
	 */
	public function getCardNumber()
	{
		return $this->cardNumber;
	}
	/**
	 * Set currency
	 * @param string currency
	 * @return string
	 */
	public function setCurrency($_currency)
	{
		return ($this->currency = $_currency);
	}
	/**
	 * Get currency
	 * @return string
	 */
	public function getCurrency()
	{
		return $this->currency;
	}
	/**
	 * Set minAmount
	 * @param string minAmount
	 * @return string
	 */
	public function setMinAmount($_minAmount)
	{
		return ($this->minAmount = $_minAmount);
	}
	/**
	 * Get minAmount
	 * @return string
	 */
	public function getMinAmount()
	{
		return $this->minAmount;
	}
	/**
	 * Set maxAmount
	 * @param string maxAmount
	 * @return string
	 */
	public function setMaxAmount($_maxAmount)
	{
		return ($this->maxAmount = $_maxAmount);
	}
	/**
	 * Get maxAmount
	 * @return string
	 */
	public function getMaxAmount()
	{
		return $this->maxAmount;
	}
	/**
	 * Set walletId
	 * @param string walletId
	 * @return string
	 */
	public function setWalletId($_walletId)
	{
		return ($this->walletId = $_walletId);
	}
	/**
	 * Get walletId
	 * @return string
	 */
	public function getWalletId()
	{
		return $this->walletId;
	}
	/**
	 * Set sequenceNumber
	 * @param string sequenceNumber
	 * @return string
	 */
	public function setSequenceNumber($_sequenceNumber)
	{
		return ($this->sequenceNumber = $_sequenceNumber);
	}
	/**
	 * Get sequenceNumber
	 * @return string
	 */
	public function getSequenceNumber()
	{
		return $this->sequenceNumber;
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