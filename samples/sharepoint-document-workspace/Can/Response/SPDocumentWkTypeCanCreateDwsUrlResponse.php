<?php
/**
 * Class file for SPDocumentWkTypeCanCreateDwsUrlResponse
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkTypeCanCreateDwsUrlResponse
 * @date 06/07/2012
 */
class SPDocumentWkTypeCanCreateDwsUrlResponse extends SPDocumentWkWsdlClass
{
	/**
	 * The CanCreateDwsUrlResult
	 * @var string
	 */
	public $CanCreateDwsUrlResult;
	/**
	 * Constructor
	 * @param string CanCreateDwsUrlResult
	 * @return SPDocumentWkTypeCanCreateDwsUrlResponse
	 */
	public function __construct($_CanCreateDwsUrlResult = null)
	{
		parent::__construct(array('CanCreateDwsUrlResult'=>$_CanCreateDwsUrlResult));
	}
	/**
	 * Set CanCreateDwsUrlResult
	 * @param string CanCreateDwsUrlResult
	 * @return string
	 */
	public function setCanCreateDwsUrlResult($_CanCreateDwsUrlResult)
	{
		return ($this->CanCreateDwsUrlResult = $_CanCreateDwsUrlResult);
	}
	/**
	 * Get CanCreateDwsUrlResult
	 * @return string
	 */
	public function getCanCreateDwsUrlResult()
	{
		return $this->CanCreateDwsUrlResult;
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