<?php
/**
 * Class file for SPWebPartPagesTypeGetDataFromDataSourceControlResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetDataFromDataSourceControlResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetDataFromDataSourceControlResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The GetDataFromDataSourceControlResult
	 * @var string
	 */
	public $GetDataFromDataSourceControlResult;
	/**
	 * Constructor
	 * @param string GetDataFromDataSourceControlResult
	 * @return SPWebPartPagesTypeGetDataFromDataSourceControlResponse
	 */
	public function __construct($_GetDataFromDataSourceControlResult = null)
	{
		parent::__construct(array('GetDataFromDataSourceControlResult'=>$_GetDataFromDataSourceControlResult));
	}
	/**
	 * Set GetDataFromDataSourceControlResult
	 * @param string GetDataFromDataSourceControlResult
	 * @return string
	 */
	public function setGetDataFromDataSourceControlResult($_GetDataFromDataSourceControlResult)
	{
		return ($this->GetDataFromDataSourceControlResult = $_GetDataFromDataSourceControlResult);
	}
	/**
	 * Get GetDataFromDataSourceControlResult
	 * @return string
	 */
	public function getGetDataFromDataSourceControlResult()
	{
		return $this->GetDataFromDataSourceControlResult;
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