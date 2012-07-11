<?php
/**
 * Class file for SPWebPartPagesTypeGetBindingResourceDataResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetBindingResourceDataResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetBindingResourceDataResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The GetBindingResourceDataResult
	 * @var string
	 */
	public $GetBindingResourceDataResult;
	/**
	 * Constructor
	 * @param string GetBindingResourceDataResult
	 * @return SPWebPartPagesTypeGetBindingResourceDataResponse
	 */
	public function __construct($_GetBindingResourceDataResult = null)
	{
		parent::__construct(array('GetBindingResourceDataResult'=>$_GetBindingResourceDataResult));
	}
	/**
	 * Set GetBindingResourceDataResult
	 * @param string GetBindingResourceDataResult
	 * @return string
	 */
	public function setGetBindingResourceDataResult($_GetBindingResourceDataResult)
	{
		return ($this->GetBindingResourceDataResult = $_GetBindingResourceDataResult);
	}
	/**
	 * Get GetBindingResourceDataResult
	 * @return string
	 */
	public function getGetBindingResourceDataResult()
	{
		return $this->GetBindingResourceDataResult;
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