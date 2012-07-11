<?php
/**
 * Class file for SPCopyTypeCopyIntoItemsLocalResponse
 * @date 07/07/2012
 */
/**
 * Class SPCopyTypeCopyIntoItemsLocalResponse
 * @date 07/07/2012
 */
class SPCopyTypeCopyIntoItemsLocalResponse extends SPCopyWsdlClass
{
	/**
	 * The CopyIntoItemsLocalResult
	 * @var unsignedInt
	 */
	public $CopyIntoItemsLocalResult;
	/**
	 * The Results
	 * @var SPCopyTypeCopyResultCollection
	 */
	public $Results;
	/**
	 * Constructor
	 * @param unsignedInt CopyIntoItemsLocalResult
	 * @param SPCopyTypeCopyResultCollection Results
	 * @return SPCopyTypeCopyIntoItemsLocalResponse
	 */
	public function __construct($_CopyIntoItemsLocalResult = null,$_Results = null)
	{
		parent::__construct(array('CopyIntoItemsLocalResult'=>$_CopyIntoItemsLocalResult,'Results'=>$_Results));
	}
	/**
	 * Set CopyIntoItemsLocalResult
	 * @param unsignedInt CopyIntoItemsLocalResult
	 * @return unsignedInt
	 */
	public function setCopyIntoItemsLocalResult($_CopyIntoItemsLocalResult)
	{
		return ($this->CopyIntoItemsLocalResult = $_CopyIntoItemsLocalResult);
	}
	/**
	 * Get CopyIntoItemsLocalResult
	 * @return unsignedInt
	 */
	public function getCopyIntoItemsLocalResult()
	{
		return $this->CopyIntoItemsLocalResult;
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