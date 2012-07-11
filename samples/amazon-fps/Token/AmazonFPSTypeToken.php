<?php
/**
 * Class file for AmazonFPSTypeToken
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeToken
 * @date 10/07/2012
 */
class AmazonFPSTypeToken extends AmazonFPSWsdlClass
{
	/**
	 * The TokenId
	 * @var string
	 */
	public $TokenId;
	/**
	 * The FriendlyName
	 * @var string
	 */
	public $FriendlyName;
	/**
	 * The TokenStatus
	 * @var AmazonFPSTypeTokenStatus
	 */
	public $TokenStatus;
	/**
	 * The DateInstalled
	 * @var dateTime
	 */
	public $DateInstalled;
	/**
	 * The CallerReference
	 * @var string
	 */
	public $CallerReference;
	/**
	 * The TokenType
	 * @var AmazonFPSTypeTokenType
	 */
	public $TokenType;
	/**
	 * The OldTokenId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $OldTokenId;
	/**
	 * The PaymentReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $PaymentReason;
	/**
	 * Constructor
	 * @param string TokenId
	 * @param string FriendlyName
	 * @param AmazonFPSTypeTokenStatus TokenStatus
	 * @param dateTime DateInstalled
	 * @param string CallerReference
	 * @param AmazonFPSTypeTokenType TokenType
	 * @param string OldTokenId
	 * @param string PaymentReason
	 * @return AmazonFPSTypeToken
	 */
	public function __construct($_TokenId = null,$_FriendlyName = null,$_TokenStatus = null,$_DateInstalled = null,$_CallerReference = null,$_TokenType = null,$_OldTokenId = null,$_PaymentReason = null)
	{
		parent::__construct(array('TokenId'=>$_TokenId,'FriendlyName'=>$_FriendlyName,'TokenStatus'=>$_TokenStatus,'DateInstalled'=>$_DateInstalled,'CallerReference'=>$_CallerReference,'TokenType'=>$_TokenType,'OldTokenId'=>$_OldTokenId,'PaymentReason'=>$_PaymentReason));
	}
	/**
	 * Set TokenId
	 * @param string TokenId
	 * @return string
	 */
	public function setTokenId($_TokenId)
	{
		return ($this->TokenId = $_TokenId);
	}
	/**
	 * Get TokenId
	 * @return string
	 */
	public function getTokenId()
	{
		return $this->TokenId;
	}
	/**
	 * Set FriendlyName
	 * @param string FriendlyName
	 * @return string
	 */
	public function setFriendlyName($_FriendlyName)
	{
		return ($this->FriendlyName = $_FriendlyName);
	}
	/**
	 * Get FriendlyName
	 * @return string
	 */
	public function getFriendlyName()
	{
		return $this->FriendlyName;
	}
	/**
	 * Set TokenStatus
	 * @param TokenStatus TokenStatus
	 * @return TokenStatus
	 */
	public function setTokenStatus($_TokenStatus)
	{
		return ($this->TokenStatus = AmazonFPSTypeTokenStatus::valueIsValid($_TokenStatus)?$_TokenStatus:null);
	}
	/**
	 * Get TokenStatus
	 * @return AmazonFPSTypeTokenStatus
	 */
	public function getTokenStatus()
	{
		return $this->TokenStatus;
	}
	/**
	 * Set DateInstalled
	 * @param dateTime DateInstalled
	 * @return dateTime
	 */
	public function setDateInstalled($_DateInstalled)
	{
		return ($this->DateInstalled = $_DateInstalled);
	}
	/**
	 * Get DateInstalled
	 * @return dateTime
	 */
	public function getDateInstalled()
	{
		return $this->DateInstalled;
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
	 * Set OldTokenId
	 * @param string OldTokenId
	 * @return string
	 */
	public function setOldTokenId($_OldTokenId)
	{
		return ($this->OldTokenId = $_OldTokenId);
	}
	/**
	 * Get OldTokenId
	 * @return string
	 */
	public function getOldTokenId()
	{
		return $this->OldTokenId;
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