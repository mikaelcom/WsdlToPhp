<?php
/**
 * Class file for PayPalTypeCreditCardDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCreditCardDetailsType
 * Documentation : CreditCardDetailsType Information about a Credit Card.
 * @date 14/07/2012
 */
class PayPalTypeCreditCardDetailsType extends PayPalWsdlClass
{
	/**
	 * The CreditCardType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeCreditCardTypeType
	 */
	public $CreditCardType;
	/**
	 * The CreditCardNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CreditCardNumber;
	/**
	 * The ExpMonth
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $ExpMonth;
	/**
	 * The ExpYear
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $ExpYear;
	/**
	 * The CardOwner
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypePayerInfoType
	 */
	public $CardOwner;
	/**
	 * The CVV2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CVV2;
	/**
	 * The StartMonth
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $StartMonth;
	/**
	 * The StartYear
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $StartYear;
	/**
	 * The IssueNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $IssueNumber;
	/**
	 * The ThreeDSecureRequest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeThreeDSecureRequestType
	 */
	public $ThreeDSecureRequest;
	/**
	 * Constructor
	 * @param PayPalTypeCreditCardTypeType CreditCardType
	 * @param string CreditCardNumber
	 * @param int ExpMonth
	 * @param int ExpYear
	 * @param PayPalTypePayerInfoType CardOwner
	 * @param string CVV2
	 * @param int StartMonth
	 * @param int StartYear
	 * @param string IssueNumber
	 * @param PayPalTypeThreeDSecureRequestType ThreeDSecureRequest
	 * @return PayPalTypeCreditCardDetailsType
	 */
	public function __construct($_CreditCardType = null,$_CreditCardNumber = null,$_ExpMonth = null,$_ExpYear = null,$_CardOwner = null,$_CVV2 = null,$_StartMonth = null,$_StartYear = null,$_IssueNumber = null,$_ThreeDSecureRequest = null)
	{
		parent::__construct(array('CreditCardType'=>$_CreditCardType,'CreditCardNumber'=>$_CreditCardNumber,'ExpMonth'=>$_ExpMonth,'ExpYear'=>$_ExpYear,'CardOwner'=>$_CardOwner,'CVV2'=>$_CVV2,'StartMonth'=>$_StartMonth,'StartYear'=>$_StartYear,'IssueNumber'=>$_IssueNumber,'ThreeDSecureRequest'=>$_ThreeDSecureRequest));
	}
	/**
	 * Set CreditCardType
	 * @param CreditCardTypeType CreditCardType
	 * @return CreditCardTypeType
	 */
	public function setCreditCardType($_CreditCardType)
	{
		return ($this->CreditCardType = PayPalTypeCreditCardTypeType::valueIsValid($_CreditCardType)?$_CreditCardType:null);
	}
	/**
	 * Get CreditCardType
	 * @return PayPalTypeCreditCardTypeType
	 */
	public function getCreditCardType()
	{
		return $this->CreditCardType;
	}
	/**
	 * Set CreditCardNumber
	 * @param string CreditCardNumber
	 * @return string
	 */
	public function setCreditCardNumber($_CreditCardNumber)
	{
		return ($this->CreditCardNumber = $_CreditCardNumber);
	}
	/**
	 * Get CreditCardNumber
	 * @return string
	 */
	public function getCreditCardNumber()
	{
		return $this->CreditCardNumber;
	}
	/**
	 * Set ExpMonth
	 * @param int ExpMonth
	 * @return int
	 */
	public function setExpMonth($_ExpMonth)
	{
		return ($this->ExpMonth = $_ExpMonth);
	}
	/**
	 * Get ExpMonth
	 * @return int
	 */
	public function getExpMonth()
	{
		return $this->ExpMonth;
	}
	/**
	 * Set ExpYear
	 * @param int ExpYear
	 * @return int
	 */
	public function setExpYear($_ExpYear)
	{
		return ($this->ExpYear = $_ExpYear);
	}
	/**
	 * Get ExpYear
	 * @return int
	 */
	public function getExpYear()
	{
		return $this->ExpYear;
	}
	/**
	 * Set CardOwner
	 * @param PayerInfoType CardOwner
	 * @return PayerInfoType
	 */
	public function setCardOwner($_CardOwner)
	{
		return ($this->CardOwner = $_CardOwner);
	}
	/**
	 * Get CardOwner
	 * @return PayPalTypePayerInfoType
	 */
	public function getCardOwner()
	{
		return $this->CardOwner;
	}
	/**
	 * Set CVV2
	 * @param string CVV2
	 * @return string
	 */
	public function setCVV2($_CVV2)
	{
		return ($this->CVV2 = $_CVV2);
	}
	/**
	 * Get CVV2
	 * @return string
	 */
	public function getCVV2()
	{
		return $this->CVV2;
	}
	/**
	 * Set StartMonth
	 * @param int StartMonth
	 * @return int
	 */
	public function setStartMonth($_StartMonth)
	{
		return ($this->StartMonth = $_StartMonth);
	}
	/**
	 * Get StartMonth
	 * @return int
	 */
	public function getStartMonth()
	{
		return $this->StartMonth;
	}
	/**
	 * Set StartYear
	 * @param int StartYear
	 * @return int
	 */
	public function setStartYear($_StartYear)
	{
		return ($this->StartYear = $_StartYear);
	}
	/**
	 * Get StartYear
	 * @return int
	 */
	public function getStartYear()
	{
		return $this->StartYear;
	}
	/**
	 * Set IssueNumber
	 * @param string IssueNumber
	 * @return string
	 */
	public function setIssueNumber($_IssueNumber)
	{
		return ($this->IssueNumber = $_IssueNumber);
	}
	/**
	 * Get IssueNumber
	 * @return string
	 */
	public function getIssueNumber()
	{
		return $this->IssueNumber;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>