<?php
/**
 * Class file for EbayTradingTypeValidateChallengeInputRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeValidateChallengeInputRequestType
 * Documentation : Validates the user response to a <b class="con">GetChallengeToken</b> botblock challenge.
 * @date 04/07/2012
 */
class EbayTradingTypeValidateChallengeInputRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ChallengeToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Botblock token that was returned by GetChallengeToken.
	 * @var string
	 */
	public $ChallengeToken;
	/**
	 * The UserInput
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : User response to a botblock challenge.
	 * @var string
	 */
	public $UserInput;
	/**
	 * The KeepTokenValid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether the challenge token should remain valid for up to two minutes.
	 * @var boolean
	 */
	public $KeepTokenValid;
	/**
	 * Constructor
	 * @param string ChallengeToken
	 * @param string UserInput
	 * @param boolean KeepTokenValid
	 * @return EbayTradingTypeValidateChallengeInputRequestType
	 */
	public function __construct($_ChallengeToken = null,$_UserInput = null,$_KeepTokenValid = null)
	{
		EbayTradingWsdlClass::__construct(array('ChallengeToken'=>$_ChallengeToken,'UserInput'=>$_UserInput,'KeepTokenValid'=>$_KeepTokenValid));
	}
	/**
	 * Set ChallengeToken
	 * @param string ChallengeToken
	 * @return string
	 */
	public function setChallengeToken($_ChallengeToken)
	{
		return ($this->ChallengeToken = $_ChallengeToken);
	}
	/**
	 * Get ChallengeToken
	 * @return string
	 */
	public function getChallengeToken()
	{
		return $this->ChallengeToken;
	}
	/**
	 * Set UserInput
	 * @param string UserInput
	 * @return string
	 */
	public function setUserInput($_UserInput)
	{
		return ($this->UserInput = $_UserInput);
	}
	/**
	 * Get UserInput
	 * @return string
	 */
	public function getUserInput()
	{
		return $this->UserInput;
	}
	/**
	 * Set KeepTokenValid
	 * @param boolean KeepTokenValid
	 * @return boolean
	 */
	public function setKeepTokenValid($_KeepTokenValid)
	{
		return ($this->KeepTokenValid = $_KeepTokenValid);
	}
	/**
	 * Get KeepTokenValid
	 * @return boolean
	 */
	public function getKeepTokenValid()
	{
		return $this->KeepTokenValid;
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