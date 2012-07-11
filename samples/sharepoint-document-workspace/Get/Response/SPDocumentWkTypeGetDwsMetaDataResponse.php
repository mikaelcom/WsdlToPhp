<?php
/**
 * Class file for SPDocumentWkTypeGetDwsMetaDataResponse
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkTypeGetDwsMetaDataResponse
 * @date 06/07/2012
 */
class SPDocumentWkTypeGetDwsMetaDataResponse extends SPDocumentWkWsdlClass
{
	/**
	 * The GetDwsMetaDataResult
	 * @var string
	 */
	public $GetDwsMetaDataResult;
	/**
	 * Constructor
	 * @param string GetDwsMetaDataResult
	 * @return SPDocumentWkTypeGetDwsMetaDataResponse
	 */
	public function __construct($_GetDwsMetaDataResult = null)
	{
		parent::__construct(array('GetDwsMetaDataResult'=>$_GetDwsMetaDataResult));
	}
	/**
	 * Set GetDwsMetaDataResult
	 * @param string GetDwsMetaDataResult
	 * @return string
	 */
	public function setGetDwsMetaDataResult($_GetDwsMetaDataResult)
	{
		return ($this->GetDwsMetaDataResult = $_GetDwsMetaDataResult);
	}
	/**
	 * Get GetDwsMetaDataResult
	 * @return string
	 */
	public function getGetDwsMetaDataResult()
	{
		return $this->GetDwsMetaDataResult;
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