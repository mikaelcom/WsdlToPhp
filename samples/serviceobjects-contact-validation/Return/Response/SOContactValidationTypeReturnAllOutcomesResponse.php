<?php
/**
 * Class file for SOContactValidationTypeReturnAllOutcomesResponse
 * @date 08/07/2012
 */
/**
 * Class SOContactValidationTypeReturnAllOutcomesResponse
 * @date 08/07/2012
 */
class SOContactValidationTypeReturnAllOutcomesResponse extends SOContactValidationWsdlClass
{
	/**
	 * The ReturnAllOutcomesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOContactValidationTypeArrayOfContact
	 */
	public $ReturnAllOutcomesResult;
	/**
	 * Constructor
	 * @param SOContactValidationTypeArrayOfContact ReturnAllOutcomesResult
	 * @return SOContactValidationTypeReturnAllOutcomesResponse
	 */
	public function __construct($_ReturnAllOutcomesResult = null)
	{
		parent::__construct(array('ReturnAllOutcomesResult'=>new SOContactValidationTypeArrayOfContact($_ReturnAllOutcomesResult)));
	}
	/**
	 * Set ReturnAllOutcomesResult
	 * @param ArrayOfContact ReturnAllOutcomesResult
	 * @return ArrayOfContact
	 */
	public function setReturnAllOutcomesResult($_ReturnAllOutcomesResult)
	{
		return ($this->ReturnAllOutcomesResult = $_ReturnAllOutcomesResult);
	}
	/**
	 * Get ReturnAllOutcomesResult
	 * @return SOContactValidationTypeArrayOfContact
	 */
	public function getReturnAllOutcomesResult()
	{
		return $this->ReturnAllOutcomesResult;
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