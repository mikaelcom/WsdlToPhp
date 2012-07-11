<?php
/**
 * Class file for AmazonFPSTypeGetTokens
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetTokens
 * @date 10/07/2012
 */
class AmazonFPSTypeGetTokens extends AmazonFPSWsdlClass
{
	/**
	 * The TokenStatus
	 * Meta informations :
	 * 	- default : Active
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeTokenStatus
	 */
	public $TokenStatus;
	/**
	 * The TokenType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeTokenType
	 */
	public $TokenType;
	/**
	 * The CallerReference
	 * Meta informations :
	 * 	- minOccurs : 0
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
	 * @param AmazonFPSTypeTokenStatus TokenStatus
	 * @param AmazonFPSTypeTokenType TokenType
	 * @param string CallerReference
	 * @param string TokenFriendlyName
	 * @return AmazonFPSTypeGetTokens
	 */
	public function __construct($_TokenStatus = 'Active',$_TokenType = null,$_CallerReference = null,$_TokenFriendlyName = null)
	{
		parent::__construct(array('TokenStatus'=>$_TokenStatus,'TokenType'=>$_TokenType,'CallerReference'=>$_CallerReference,'TokenFriendlyName'=>$_TokenFriendlyName));
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