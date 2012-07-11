<?php
/**
 * Class file for SPDocumentWkTypeRenameDwsResponse
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkTypeRenameDwsResponse
 * @date 06/07/2012
 */
class SPDocumentWkTypeRenameDwsResponse extends SPDocumentWkWsdlClass
{
	/**
	 * The RenameDwsResult
	 * @var string
	 */
	public $RenameDwsResult;
	/**
	 * Constructor
	 * @param string RenameDwsResult
	 * @return SPDocumentWkTypeRenameDwsResponse
	 */
	public function __construct($_RenameDwsResult = null)
	{
		parent::__construct(array('RenameDwsResult'=>$_RenameDwsResult));
	}
	/**
	 * Set RenameDwsResult
	 * @param string RenameDwsResult
	 * @return string
	 */
	public function setRenameDwsResult($_RenameDwsResult)
	{
		return ($this->RenameDwsResult = $_RenameDwsResult);
	}
	/**
	 * Get RenameDwsResult
	 * @return string
	 */
	public function getRenameDwsResult()
	{
		return $this->RenameDwsResult;
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