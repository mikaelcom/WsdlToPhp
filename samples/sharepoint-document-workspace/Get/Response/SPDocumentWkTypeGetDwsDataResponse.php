<?php
/**
 * Class file for SPDocumentWkTypeGetDwsDataResponse
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkTypeGetDwsDataResponse
 * @date 06/07/2012
 */
class SPDocumentWkTypeGetDwsDataResponse extends SPDocumentWkWsdlClass
{
	/**
	 * The GetDwsDataResult
	 * @var string
	 */
	public $GetDwsDataResult;
	/**
	 * Constructor
	 * @param string GetDwsDataResult
	 * @return SPDocumentWkTypeGetDwsDataResponse
	 */
	public function __construct($_GetDwsDataResult = null)
	{
		parent::__construct(array('GetDwsDataResult'=>$_GetDwsDataResult));
	}
	/**
	 * Set GetDwsDataResult
	 * @param string GetDwsDataResult
	 * @return string
	 */
	public function setGetDwsDataResult($_GetDwsDataResult)
	{
		return ($this->GetDwsDataResult = $_GetDwsDataResult);
	}
	/**
	 * Get GetDwsDataResult
	 * @return string
	 */
	public function getGetDwsDataResult()
	{
		return $this->GetDwsDataResult;
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