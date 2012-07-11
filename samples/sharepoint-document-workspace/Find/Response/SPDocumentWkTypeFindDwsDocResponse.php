<?php
/**
 * Class file for SPDocumentWkTypeFindDwsDocResponse
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkTypeFindDwsDocResponse
 * @date 06/07/2012
 */
class SPDocumentWkTypeFindDwsDocResponse extends SPDocumentWkWsdlClass
{
	/**
	 * The FindDwsDocResult
	 * @var string
	 */
	public $FindDwsDocResult;
	/**
	 * Constructor
	 * @param string FindDwsDocResult
	 * @return SPDocumentWkTypeFindDwsDocResponse
	 */
	public function __construct($_FindDwsDocResult = null)
	{
		parent::__construct(array('FindDwsDocResult'=>$_FindDwsDocResult));
	}
	/**
	 * Set FindDwsDocResult
	 * @param string FindDwsDocResult
	 * @return string
	 */
	public function setFindDwsDocResult($_FindDwsDocResult)
	{
		return ($this->FindDwsDocResult = $_FindDwsDocResult);
	}
	/**
	 * Get FindDwsDocResult
	 * @return string
	 */
	public function getFindDwsDocResult()
	{
		return $this->FindDwsDocResult;
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