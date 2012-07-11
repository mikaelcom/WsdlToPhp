<?php
/**
 * Class file for SOBinValidationTypeValidateBINResponse
 * @date 08/07/2012
 */
/**
 * Class SOBinValidationTypeValidateBINResponse
 * @date 08/07/2012
 */
class SOBinValidationTypeValidateBINResponse extends SOBinValidationWsdlClass
{
	/**
	 * The ValidateBINResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOBinValidationTypeBinValidationResult
	 */
	public $ValidateBINResult;
	/**
	 * Constructor
	 * @param SOBinValidationTypeBinValidationResult ValidateBINResult
	 * @return SOBinValidationTypeValidateBINResponse
	 */
	public function __construct($_ValidateBINResult = null)
	{
		parent::__construct(array('ValidateBINResult'=>$_ValidateBINResult));
	}
	/**
	 * Set ValidateBINResult
	 * @param BinValidationResult ValidateBINResult
	 * @return BinValidationResult
	 */
	public function setValidateBINResult($_ValidateBINResult)
	{
		return ($this->ValidateBINResult = $_ValidateBINResult);
	}
	/**
	 * Get ValidateBINResult
	 * @return SOBinValidationTypeBinValidationResult
	 */
	public function getValidateBINResult()
	{
		return $this->ValidateBINResult;
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