<?php
/**
 * Class file for SPDocumentWkTypeUpdateDwsDataResponse
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkTypeUpdateDwsDataResponse
 * @date 06/07/2012
 */
class SPDocumentWkTypeUpdateDwsDataResponse extends SPDocumentWkWsdlClass
{
	/**
	 * The UpdateDwsDataResult
	 * @var string
	 */
	public $UpdateDwsDataResult;
	/**
	 * Constructor
	 * @param string UpdateDwsDataResult
	 * @return SPDocumentWkTypeUpdateDwsDataResponse
	 */
	public function __construct($_UpdateDwsDataResult = null)
	{
		parent::__construct(array('UpdateDwsDataResult'=>$_UpdateDwsDataResult));
	}
	/**
	 * Set UpdateDwsDataResult
	 * @param string UpdateDwsDataResult
	 * @return string
	 */
	public function setUpdateDwsDataResult($_UpdateDwsDataResult)
	{
		return ($this->UpdateDwsDataResult = $_UpdateDwsDataResult);
	}
	/**
	 * Get UpdateDwsDataResult
	 * @return string
	 */
	public function getUpdateDwsDataResult()
	{
		return $this->UpdateDwsDataResult;
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