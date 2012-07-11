<?php
/**
 * Class file for SPCopyTypeCopyResultCollection
 * @date 07/07/2012
 */
/**
 * Class SPCopyTypeCopyResultCollection
 * @date 07/07/2012
 */
class SPCopyTypeCopyResultCollection extends SPCopyWsdlClass
{
	/**
	 * The CopyResult
	 * @var SPCopyTypeCopyResult
	 */
	public $CopyResult;
	/**
	 * Constructor
	 * @param SPCopyTypeCopyResult CopyResult
	 * @return SPCopyTypeCopyResultCollection
	 */
	public function __construct($_CopyResult = null)
	{
		parent::__construct(array('CopyResult'=>$_CopyResult));
	}
	/**
	 * Set CopyResult
	 * @param CopyResult CopyResult
	 * @return CopyResult
	 */
	public function setCopyResult($_CopyResult)
	{
		return ($this->CopyResult = $_CopyResult);
	}
	/**
	 * Get CopyResult
	 * @return SPCopyTypeCopyResult
	 */
	public function getCopyResult()
	{
		return $this->CopyResult;
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