<?php
/**
 * Class file for SPCopyTypeCopyIntoItemsResponse
 * @date 07/07/2012
 */
/**
 * Class SPCopyTypeCopyIntoItemsResponse
 * @date 07/07/2012
 */
class SPCopyTypeCopyIntoItemsResponse extends SPCopyWsdlClass
{
	/**
	 * The CopyIntoItemsResult
	 * @var unsignedInt
	 */
	public $CopyIntoItemsResult;
	/**
	 * The Results
	 * @var SPCopyTypeCopyResultCollection
	 */
	public $Results;
	/**
	 * Constructor
	 * @param unsignedInt CopyIntoItemsResult
	 * @param SPCopyTypeCopyResultCollection Results
	 * @return SPCopyTypeCopyIntoItemsResponse
	 */
	public function __construct($_CopyIntoItemsResult = null,$_Results = null)
	{
		parent::__construct(array('CopyIntoItemsResult'=>$_CopyIntoItemsResult,'Results'=>$_Results));
	}
	/**
	 * Set CopyIntoItemsResult
	 * @param unsignedInt CopyIntoItemsResult
	 * @return unsignedInt
	 */
	public function setCopyIntoItemsResult($_CopyIntoItemsResult)
	{
		return ($this->CopyIntoItemsResult = $_CopyIntoItemsResult);
	}
	/**
	 * Get CopyIntoItemsResult
	 * @return unsignedInt
	 */
	public function getCopyIntoItemsResult()
	{
		return $this->CopyIntoItemsResult;
	}
	/**
	 * Set Results
	 * @param CopyResultCollection Results
	 * @return CopyResultCollection
	 */
	public function setResults($_Results)
	{
		return ($this->Results = $_Results);
	}
	/**
	 * Get Results
	 * @return SPCopyTypeCopyResultCollection
	 */
	public function getResults()
	{
		return $this->Results;
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