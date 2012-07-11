<?php
/**
 * Class file for SPListsTypeAddAttachmentResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeAddAttachmentResponse
 * @date 07/07/2012
 */
class SPListsTypeAddAttachmentResponse extends SPListsWsdlClass
{
	/**
	 * The AddAttachmentResult
	 * @var string
	 */
	public $AddAttachmentResult;
	/**
	 * Constructor
	 * @param string AddAttachmentResult
	 * @return SPListsTypeAddAttachmentResponse
	 */
	public function __construct($_AddAttachmentResult = null)
	{
		parent::__construct(array('AddAttachmentResult'=>$_AddAttachmentResult));
	}
	/**
	 * Set AddAttachmentResult
	 * @param string AddAttachmentResult
	 * @return string
	 */
	public function setAddAttachmentResult($_AddAttachmentResult)
	{
		return ($this->AddAttachmentResult = $_AddAttachmentResult);
	}
	/**
	 * Get AddAttachmentResult
	 * @return string
	 */
	public function getAddAttachmentResult()
	{
		return $this->AddAttachmentResult;
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