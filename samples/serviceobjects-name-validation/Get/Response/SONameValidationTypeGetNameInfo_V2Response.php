<?php
/**
 * Class file for SONameValidationTypeGetNameInfo_V2Response
 * @date 08/07/2012
 */
/**
 * Class SONameValidationTypeGetNameInfo_V2Response
 * @date 08/07/2012
 */
class SONameValidationTypeGetNameInfo_V2Response extends SONameValidationWsdlClass
{
	/**
	 * The GetNameInfo_V2Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SONameValidationTypeNameInfo_V2
	 */
	public $GetNameInfo_V2Result;
	/**
	 * Constructor
	 * @param SONameValidationTypeNameInfo_V2 GetNameInfo_V2Result
	 * @return SONameValidationTypeGetNameInfo_V2Response
	 */
	public function __construct($_GetNameInfo_V2Result = null)
	{
		parent::__construct(array('GetNameInfo_V2Result'=>$_GetNameInfo_V2Result));
	}
	/**
	 * Set GetNameInfo_V2Result
	 * @param NameInfo_V2 GetNameInfo_V2Result
	 * @return NameInfo_V2
	 */
	public function setGetNameInfo_V2Result($_GetNameInfo_V2Result)
	{
		return ($this->GetNameInfo_V2Result = $_GetNameInfo_V2Result);
	}
	/**
	 * Get GetNameInfo_V2Result
	 * @return SONameValidationTypeNameInfo_V2
	 */
	public function getGetNameInfo_V2Result()
	{
		return $this->GetNameInfo_V2Result;
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