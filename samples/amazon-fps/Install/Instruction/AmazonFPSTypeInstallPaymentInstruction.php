<?php
/**
 * Class file for AmazonFPSTypeInstallPaymentInstruction
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeInstallPaymentInstruction
 * @date 10/07/2012
 */
class AmazonFPSTypeInstallPaymentInstruction extends AmazonFPSWsdlClass
{
	/**
	 * The PaymentInstruction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $PaymentInstruction;
	/**
	 * The TokenFriendlyName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $TokenFriendlyName;
	/**
	 * The CallerReference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CallerReference;
	/**
	 * The TokenType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeTokenType
	 */
	public $TokenType;
	/**
	 * The PaymentReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $PaymentReason;
	/**
	 * Constructor
	 * @param string PaymentInstruction
	 * @param string TokenFriendlyName
	 * @param string CallerReference
	 * @param AmazonFPSTypeTokenType TokenType
	 * @param string PaymentReason
	 * @return AmazonFPSTypeInstallPaymentInstruction
	 */
	public function __construct($_PaymentInstruction = null,$_TokenFriendlyName = null,$_CallerReference = null,$_TokenType = null,$_PaymentReason = null)
	{
		parent::__construct(array('PaymentInstruction'=>$_PaymentInstruction,'TokenFriendlyName'=>$_TokenFriendlyName,'CallerReference'=>$_CallerReference,'TokenType'=>$_TokenType,'PaymentReason'=>$_PaymentReason));
	}
	/**
	 * Set PaymentInstruction
	 * @param string PaymentInstruction
	 * @return string
	 */
	public function setPaymentInstruction($_PaymentInstruction)
	{
		return ($this->PaymentInstruction = $_PaymentInstruction);
	}
	/**
	 * Get PaymentInstruction
	 * @return string
	 */
	public function getPaymentInstruction()
	{
		return $this->PaymentInstruction;
	}
	/**
	 * Set TokenFriendlyName
	 * @param string TokenFriendlyName
	 * @return string
	 */
	public function setTokenFriendlyName($_TokenFriendlyName)
	{
		return ($this->TokenFriendlyName = $_TokenFriendlyName);
	}
	/**
	 * Get TokenFriendlyName
	 * @return string
	 */
	public function getTokenFriendlyName()
	{
		return $this->TokenFriendlyName;
	}
	/**
	 * Set CallerReference
	 * @param string CallerReference
	 * @return string
	 */
	public function setCallerReference($_CallerReference)
	{
		return ($this->CallerReference = $_CallerReference);
	}
	/**
	 * Get CallerReference
	 * @return string
	 */
	public function getCallerReference()
	{
		return $this->CallerReference;
	}
	/**
	 * Set TokenType
	 * @param TokenType TokenType
	 * @return TokenType
	 */
	public function setTokenType($_TokenType)
	{
		return ($this->TokenType = AmazonFPSTypeTokenType::valueIsValid($_TokenType)?$_TokenType:null);
	}
	/**
	 * Get TokenType
	 * @return AmazonFPSTypeTokenType
	 */
	public function getTokenType()
	{
		return $this->TokenType;
	}
	/**
	 * Set PaymentReason
	 * @param string PaymentReason
	 * @return string
	 */
	public function setPaymentReason($_PaymentReason)
	{
		return ($this->PaymentReason = $_PaymentReason);
	}
	/**
	 * Get PaymentReason
	 * @return string
	 */
	public function getPaymentReason()
	{
		return $this->PaymentReason;
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