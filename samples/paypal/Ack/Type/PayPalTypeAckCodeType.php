<?php
/**
 * Class file for PayPalTypeAckCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAckCodeType
 * @date 14/07/2012
 */
class PayPalTypeAckCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Success'
	 * Meta informations :
	 * 	- documentation : Request processing succeeded.
	 * @return string 'Success'
	 */
	const VALUE_SUCCESS = 'Success';
	/**
	 * Constant for value 'Failure'
	 * Meta informations :
	 * 	- documentation : Request processing failed.
	 * @return string 'Failure'
	 */
	const VALUE_FAILURE = 'Failure';
	/**
	 * Constant for value 'Warning'
	 * Meta informations :
	 * 	- documentation : Request processing completed with warning information being included in the response message.
	 * @return string 'Warning'
	 */
	const VALUE_WARNING = 'Warning';
	/**
	 * Constant for value 'SuccessWithWarning'
	 * Meta informations :
	 * 	- documentation : Request processing completed successful with some with some warning information that could be useful for the requesting application to process and/or record.
	 * @return string 'SuccessWithWarning'
	 */
	const VALUE_SUCCESSWITHWARNING = 'SuccessWithWarning';
	/**
	 * Constant for value 'FailureWithWarning'
	 * Meta informations :
	 * 	- documentation : Request processing failed with some error and warnining information that requesting application should process to determine cause(s) of failure.
	 * @return string 'FailureWithWarning'
	 */
	const VALUE_FAILUREWITHWARNING = 'FailureWithWarning';
	/**
	 * Constant for value 'PartialSuccess'
	 * Meta informations :
	 * 	- documentation : Request processing completed with Partial Success.
	 * @return string 'PartialSuccess'
	 */
	const VALUE_PARTIALSUCCESS = 'PartialSuccess';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeAckCodeType
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
		return in_array($_value,array(self::VALUE_SUCCESS,self::VALUE_FAILURE,self::VALUE_WARNING,self::VALUE_SUCCESSWITHWARNING,self::VALUE_FAILUREWITHWARNING,self::VALUE_PARTIALSUCCESS,self::VALUE_CUSTOMCODE));
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