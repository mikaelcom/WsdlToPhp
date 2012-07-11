<?php
/**
 * Class file for SPWebPartPagesTypeGetCustomControlListResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetCustomControlListResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetCustomControlListResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The GetCustomControlListResult
	 * @var SPWebPartPagesTypeGetCustomControlListResult
	 */
	public $GetCustomControlListResult;
	/**
	 * Constructor
	 * @param SPWebPartPagesTypeGetCustomControlListResult GetCustomControlListResult
	 * @return SPWebPartPagesTypeGetCustomControlListResponse
	 */
	public function __construct($_GetCustomControlListResult = null)
	{
		parent::__construct(array('GetCustomControlListResult'=>$_GetCustomControlListResult));
	}
	/**
	 * Set GetCustomControlListResult
	 * @param GetCustomControlListResult GetCustomControlListResult
	 * @return GetCustomControlListResult
	 */
	public function setGetCustomControlListResult($_GetCustomControlListResult)
	{
		return ($this->GetCustomControlListResult = $_GetCustomControlListResult);
	}
	/**
	 * Get GetCustomControlListResult
	 * @return SPWebPartPagesTypeGetCustomControlListResult
	 */
	public function getGetCustomControlListResult()
	{
		return $this->GetCustomControlListResult;
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