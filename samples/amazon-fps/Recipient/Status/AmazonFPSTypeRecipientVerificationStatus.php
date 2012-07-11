<?php
/**
 * Class file for AmazonFPSTypeRecipientVerificationStatus
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeRecipientVerificationStatus
 * @date 10/07/2012
 */
class AmazonFPSTypeRecipientVerificationStatus extends AmazonFPSWsdlClass
{
	/**
	 * Constant for value 'VerificationComplete'
	 * @return string 'VerificationComplete'
	 */
	const VALUE_VERIFICATIONCOMPLETE = 'VerificationComplete';
	/**
	 * Constant for value 'VerificationPending'
	 * @return string 'VerificationPending'
	 */
	const VALUE_VERIFICATIONPENDING = 'VerificationPending';
	/**
	 * Constant for value 'VerificationCompleteNoLimits'
	 * @return string 'VerificationCompleteNoLimits'
	 */
	const VALUE_VERIFICATIONCOMPLETENOLIMITS = 'VerificationCompleteNoLimits';
	/**
	 * Constructor
	 * @return AmazonFPSTypeRecipientVerificationStatus
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_VERIFICATIONCOMPLETE,self::VALUE_VERIFICATIONPENDING,self::VALUE_VERIFICATIONCOMPLETENOLIMITS));
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