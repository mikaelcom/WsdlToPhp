<?php
/**
 * Class file for AmazonFPSTypeVerifySignatureResult
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeVerifySignatureResult
 * @date 10/07/2012
 */
class AmazonFPSTypeVerifySignatureResult extends AmazonFPSWsdlClass
{
	/**
	 * The VerificationStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeVerificationStatus
	 */
	public $VerificationStatus;
	/**
	 * Constructor
	 * @param AmazonFPSTypeVerificationStatus VerificationStatus
	 * @return AmazonFPSTypeVerifySignatureResult
	 */
	public function __construct($_VerificationStatus = null)
	{
		parent::__construct(array('VerificationStatus'=>$_VerificationStatus));
	}
	/**
	 * Set VerificationStatus
	 * @param VerificationStatus VerificationStatus
	 * @return VerificationStatus
	 */
	public function setVerificationStatus($_VerificationStatus)
	{
		return ($this->VerificationStatus = AmazonFPSTypeVerificationStatus::valueIsValid($_VerificationStatus)?$_VerificationStatus:null);
	}
	/**
	 * Get VerificationStatus
	 * @return AmazonFPSTypeVerificationStatus
	 */
	public function getVerificationStatus()
	{
		return $this->VerificationStatus;
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