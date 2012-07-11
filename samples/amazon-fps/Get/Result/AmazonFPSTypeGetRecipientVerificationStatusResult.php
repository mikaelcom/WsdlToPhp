<?php
/**
 * Class file for AmazonFPSTypeGetRecipientVerificationStatusResult
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetRecipientVerificationStatusResult
 * @date 10/07/2012
 */
class AmazonFPSTypeGetRecipientVerificationStatusResult extends AmazonFPSWsdlClass
{
	/**
	 * The RecipientVerificationStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeRecipientVerificationStatus
	 */
	public $RecipientVerificationStatus;
	/**
	 * Constructor
	 * @param AmazonFPSTypeRecipientVerificationStatus RecipientVerificationStatus
	 * @return AmazonFPSTypeGetRecipientVerificationStatusResult
	 */
	public function __construct($_RecipientVerificationStatus = null)
	{
		parent::__construct(array('RecipientVerificationStatus'=>$_RecipientVerificationStatus));
	}
	/**
	 * Set RecipientVerificationStatus
	 * @param RecipientVerificationStatus RecipientVerificationStatus
	 * @return RecipientVerificationStatus
	 */
	public function setRecipientVerificationStatus($_RecipientVerificationStatus)
	{
		return ($this->RecipientVerificationStatus = AmazonFPSTypeRecipientVerificationStatus::valueIsValid($_RecipientVerificationStatus)?$_RecipientVerificationStatus:null);
	}
	/**
	 * Get RecipientVerificationStatus
	 * @return AmazonFPSTypeRecipientVerificationStatus
	 */
	public function getRecipientVerificationStatus()
	{
		return $this->RecipientVerificationStatus;
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