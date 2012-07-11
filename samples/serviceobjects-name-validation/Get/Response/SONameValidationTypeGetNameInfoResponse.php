<?php
/**
 * Class file for SONameValidationTypeGetNameInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SONameValidationTypeGetNameInfoResponse
 * @date 08/07/2012
 */
class SONameValidationTypeGetNameInfoResponse extends SONameValidationWsdlClass
{
	/**
	 * The GetNameInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SONameValidationTypeNameInfo
	 */
	public $GetNameInfoResult;
	/**
	 * Constructor
	 * @param SONameValidationTypeNameInfo GetNameInfoResult
	 * @return SONameValidationTypeGetNameInfoResponse
	 */
	public function __construct($_GetNameInfoResult = null)
	{
		parent::__construct(array('GetNameInfoResult'=>$_GetNameInfoResult));
	}
	/**
	 * Set GetNameInfoResult
	 * @param NameInfo GetNameInfoResult
	 * @return NameInfo
	 */
	public function setGetNameInfoResult($_GetNameInfoResult)
	{
		return ($this->GetNameInfoResult = $_GetNameInfoResult);
	}
	/**
	 * Get GetNameInfoResult
	 * @return SONameValidationTypeNameInfo
	 */
	public function getGetNameInfoResult()
	{
		return $this->GetNameInfoResult;
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