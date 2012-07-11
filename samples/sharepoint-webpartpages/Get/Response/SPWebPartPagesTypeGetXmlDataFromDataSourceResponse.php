<?php
/**
 * Class file for SPWebPartPagesTypeGetXmlDataFromDataSourceResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetXmlDataFromDataSourceResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetXmlDataFromDataSourceResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The GetXmlDataFromDataSourceResult
	 * @var string
	 */
	public $GetXmlDataFromDataSourceResult;
	/**
	 * Constructor
	 * @param string GetXmlDataFromDataSourceResult
	 * @return SPWebPartPagesTypeGetXmlDataFromDataSourceResponse
	 */
	public function __construct($_GetXmlDataFromDataSourceResult = null)
	{
		parent::__construct(array('GetXmlDataFromDataSourceResult'=>$_GetXmlDataFromDataSourceResult));
	}
	/**
	 * Set GetXmlDataFromDataSourceResult
	 * @param string GetXmlDataFromDataSourceResult
	 * @return string
	 */
	public function setGetXmlDataFromDataSourceResult($_GetXmlDataFromDataSourceResult)
	{
		return ($this->GetXmlDataFromDataSourceResult = $_GetXmlDataFromDataSourceResult);
	}
	/**
	 * Get GetXmlDataFromDataSourceResult
	 * @return string
	 */
	public function getGetXmlDataFromDataSourceResult()
	{
		return $this->GetXmlDataFromDataSourceResult;
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