<?php
/**
 * Class file for SONameAppendTypeGetNameFromEmailResponse
 * @date 08/07/2012
 */
/**
 * Class SONameAppendTypeGetNameFromEmailResponse
 * @date 08/07/2012
 */
class SONameAppendTypeGetNameFromEmailResponse extends SONameAppendWsdlClass
{
	/**
	 * The GetNameFromEmailResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SONameAppendTypeArrayOfNameAppendResponse
	 */
	public $GetNameFromEmailResult;
	/**
	 * Constructor
	 * @param SONameAppendTypeArrayOfNameAppendResponse GetNameFromEmailResult
	 * @return SONameAppendTypeGetNameFromEmailResponse
	 */
	public function __construct($_GetNameFromEmailResult = null)
	{
		parent::__construct(array('GetNameFromEmailResult'=>new SONameAppendTypeArrayOfNameAppendResponse($_GetNameFromEmailResult)));
	}
	/**
	 * Set GetNameFromEmailResult
	 * @param ArrayOfNameAppendResponse GetNameFromEmailResult
	 * @return ArrayOfNameAppendResponse
	 */
	public function setGetNameFromEmailResult($_GetNameFromEmailResult)
	{
		return ($this->GetNameFromEmailResult = $_GetNameFromEmailResult);
	}
	/**
	 * Get GetNameFromEmailResult
	 * @return SONameAppendTypeArrayOfNameAppendResponse
	 */
	public function getGetNameFromEmailResult()
	{
		return $this->GetNameFromEmailResult;
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