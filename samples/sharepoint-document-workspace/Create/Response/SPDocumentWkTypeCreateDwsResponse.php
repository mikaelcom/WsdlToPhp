<?php
/**
 * Class file for SPDocumentWkTypeCreateDwsResponse
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkTypeCreateDwsResponse
 * @date 06/07/2012
 */
class SPDocumentWkTypeCreateDwsResponse extends SPDocumentWkWsdlClass
{
	/**
	 * The CreateDwsResult
	 * @var string
	 */
	public $CreateDwsResult;
	/**
	 * Constructor
	 * @param string CreateDwsResult
	 * @return SPDocumentWkTypeCreateDwsResponse
	 */
	public function __construct($_CreateDwsResult = null)
	{
		parent::__construct(array('CreateDwsResult'=>$_CreateDwsResult));
	}
	/**
	 * Set CreateDwsResult
	 * @param string CreateDwsResult
	 * @return string
	 */
	public function setCreateDwsResult($_CreateDwsResult)
	{
		return ($this->CreateDwsResult = $_CreateDwsResult);
	}
	/**
	 * Get CreateDwsResult
	 * @return string
	 */
	public function getCreateDwsResult()
	{
		return $this->CreateDwsResult;
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