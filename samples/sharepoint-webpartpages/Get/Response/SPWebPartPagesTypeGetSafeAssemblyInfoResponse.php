<?php
/**
 * Class file for SPWebPartPagesTypeGetSafeAssemblyInfoResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetSafeAssemblyInfoResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetSafeAssemblyInfoResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The GetSafeAssemblyInfoResult
	 * @var SPWebPartPagesTypeGetSafeAssemblyInfoResult
	 */
	public $GetSafeAssemblyInfoResult;
	/**
	 * Constructor
	 * @param SPWebPartPagesTypeGetSafeAssemblyInfoResult GetSafeAssemblyInfoResult
	 * @return SPWebPartPagesTypeGetSafeAssemblyInfoResponse
	 */
	public function __construct($_GetSafeAssemblyInfoResult = null)
	{
		parent::__construct(array('GetSafeAssemblyInfoResult'=>$_GetSafeAssemblyInfoResult));
	}
	/**
	 * Set GetSafeAssemblyInfoResult
	 * @param GetSafeAssemblyInfoResult GetSafeAssemblyInfoResult
	 * @return GetSafeAssemblyInfoResult
	 */
	public function setGetSafeAssemblyInfoResult($_GetSafeAssemblyInfoResult)
	{
		return ($this->GetSafeAssemblyInfoResult = $_GetSafeAssemblyInfoResult);
	}
	/**
	 * Get GetSafeAssemblyInfoResult
	 * @return SPWebPartPagesTypeGetSafeAssemblyInfoResult
	 */
	public function getGetSafeAssemblyInfoResult()
	{
		return $this->GetSafeAssemblyInfoResult;
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