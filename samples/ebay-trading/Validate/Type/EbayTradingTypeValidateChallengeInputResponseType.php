<?php
/**
 * Class file for EbayTradingTypeValidateChallengeInputResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeValidateChallengeInputResponseType
 * Documentation : Validate the user response to botblock challenge.
 * @date 04/07/2012
 */
class EbayTradingTypeValidateChallengeInputResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The ValidToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the token is valid.
	 * @var boolean
	 */
	public $ValidToken;
	/**
	 * Constructor
	 * @param boolean ValidToken
	 * @return EbayTradingTypeValidateChallengeInputResponseType
	 */
	public function __construct($_ValidToken = null)
	{
		EbayTradingWsdlClass::__construct(array('ValidToken'=>$_ValidToken));
	}
	/**
	 * Set ValidToken
	 * @param boolean ValidToken
	 * @return boolean
	 */
	public function setValidToken($_ValidToken)
	{
		return ($this->ValidToken = $_ValidToken);
	}
	/**
	 * Get ValidToken
	 * @return boolean
	 */
	public function getValidToken()
	{
		return $this->ValidToken;
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