<?php
/**
 * Class file for SPWebPartPagesTypeGetAssemblyMetaDataResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetAssemblyMetaDataResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetAssemblyMetaDataResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The GetAssemblyMetaDataResult
	 * @var string
	 */
	public $GetAssemblyMetaDataResult;
	/**
	 * Constructor
	 * @param string GetAssemblyMetaDataResult
	 * @return SPWebPartPagesTypeGetAssemblyMetaDataResponse
	 */
	public function __construct($_GetAssemblyMetaDataResult = null)
	{
		parent::__construct(array('GetAssemblyMetaDataResult'=>$_GetAssemblyMetaDataResult));
	}
	/**
	 * Set GetAssemblyMetaDataResult
	 * @param string GetAssemblyMetaDataResult
	 * @return string
	 */
	public function setGetAssemblyMetaDataResult($_GetAssemblyMetaDataResult)
	{
		return ($this->GetAssemblyMetaDataResult = $_GetAssemblyMetaDataResult);
	}
	/**
	 * Get GetAssemblyMetaDataResult
	 * @return string
	 */
	public function getGetAssemblyMetaDataResult()
	{
		return $this->GetAssemblyMetaDataResult;
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