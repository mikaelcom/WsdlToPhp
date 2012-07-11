<?php
/**
 * Class file for SOFraudProtectionTypeReturnOutcomesResponse
 * @date 08/07/2012
 */
/**
 * Class SOFraudProtectionTypeReturnOutcomesResponse
 * @date 08/07/2012
 */
class SOFraudProtectionTypeReturnOutcomesResponse extends SOFraudProtectionWsdlClass
{
	/**
	 * The ReturnOutcomesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFraudProtectionTypeArrayOfValidation
	 */
	public $ReturnOutcomesResult;
	/**
	 * Constructor
	 * @param SOFraudProtectionTypeArrayOfValidation ReturnOutcomesResult
	 * @return SOFraudProtectionTypeReturnOutcomesResponse
	 */
	public function __construct($_ReturnOutcomesResult = null)
	{
		parent::__construct(array('ReturnOutcomesResult'=>new SOFraudProtectionTypeArrayOfValidation($_ReturnOutcomesResult)));
	}
	/**
	 * Set ReturnOutcomesResult
	 * @param ArrayOfValidation ReturnOutcomesResult
	 * @return ArrayOfValidation
	 */
	public function setReturnOutcomesResult($_ReturnOutcomesResult)
	{
		return ($this->ReturnOutcomesResult = $_ReturnOutcomesResult);
	}
	/**
	 * Get ReturnOutcomesResult
	 * @return SOFraudProtectionTypeArrayOfValidation
	 */
	public function getReturnOutcomesResult()
	{
		return $this->ReturnOutcomesResult;
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