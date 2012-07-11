<?php
/**
 * Class file for SONameValidationTypeGetOrderedNameResponse
 * @date 08/07/2012
 */
/**
 * Class SONameValidationTypeGetOrderedNameResponse
 * @date 08/07/2012
 */
class SONameValidationTypeGetOrderedNameResponse extends SONameValidationWsdlClass
{
	/**
	 * The GetOrderedNameResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SONameValidationTypeOrderedName
	 */
	public $GetOrderedNameResult;
	/**
	 * Constructor
	 * @param SONameValidationTypeOrderedName GetOrderedNameResult
	 * @return SONameValidationTypeGetOrderedNameResponse
	 */
	public function __construct($_GetOrderedNameResult = null)
	{
		parent::__construct(array('GetOrderedNameResult'=>$_GetOrderedNameResult));
	}
	/**
	 * Set GetOrderedNameResult
	 * @param OrderedName GetOrderedNameResult
	 * @return OrderedName
	 */
	public function setGetOrderedNameResult($_GetOrderedNameResult)
	{
		return ($this->GetOrderedNameResult = $_GetOrderedNameResult);
	}
	/**
	 * Get GetOrderedNameResult
	 * @return SONameValidationTypeOrderedName
	 */
	public function getGetOrderedNameResult()
	{
		return $this->GetOrderedNameResult;
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