<?php
/**
 * Class file for AmazonFPSTypeGetPaymentInstructionResult
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetPaymentInstructionResult
 * @date 10/07/2012
 */
class AmazonFPSTypeGetPaymentInstructionResult extends AmazonFPSWsdlClass
{
	/**
	 * The Token
	 * @var AmazonFPSTypeToken
	 */
	public $Token;
	/**
	 * The PaymentInstruction
	 * @var string
	 */
	public $PaymentInstruction;
	/**
	 * The CallerReference
	 * @var string
	 */
	public $CallerReference;
	/**
	 * The TokenFriendlyName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $TokenFriendlyName;
	/**
	 * Constructor
	 * @param AmazonFPSTypeToken Token
	 * @param string PaymentInstruction
	 * @param string CallerReference
	 * @param string TokenFriendlyName
	 * @return AmazonFPSTypeGetPaymentInstructionResult
	 */
	public function __construct($_Token = null,$_PaymentInstruction = null,$_CallerReference = null,$_TokenFriendlyName = null)
	{
		parent::__construct(array('Token'=>$_Token,'PaymentInstruction'=>$_PaymentInstruction,'CallerReference'=>$_CallerReference,'TokenFriendlyName'=>$_TokenFriendlyName));
	}
	/**
	 * Set Token
	 * @param Token Token
	 * @return Token
	 */
	public function setToken($_Token)
	{
		return ($this->Token = $_Token);
	}
	/**
	 * Get Token
	 * @return AmazonFPSTypeToken
	 */
	public function getToken()
	{
		return $this->Token;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>