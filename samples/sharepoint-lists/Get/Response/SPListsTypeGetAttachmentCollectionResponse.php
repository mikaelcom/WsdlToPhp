<?php
/**
 * Class file for SPListsTypeGetAttachmentCollectionResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeGetAttachmentCollectionResponse
 * @date 07/07/2012
 */
class SPListsTypeGetAttachmentCollectionResponse extends SPListsWsdlClass
{
	/**
	 * The GetAttachmentCollectionResult
	 * @var SPListsTypeGetAttachmentCollectionResult
	 */
	public $GetAttachmentCollectionResult;
	/**
	 * Constructor
	 * @param SPListsTypeGetAttachmentCollectionResult GetAttachmentCollectionResult
	 * @return SPListsTypeGetAttachmentCollectionResponse
	 */
	public function __construct($_GetAttachmentCollectionResult = null)
	{
		parent::__construct(array('GetAttachmentCollectionResult'=>$_GetAttachmentCollectionResult));
	}
	/**
	 * Set GetAttachmentCollectionResult
	 * @param GetAttachmentCollectionResult GetAttachmentCollectionResult
	 * @return GetAttachmentCollectionResult
	 */
	public function setGetAttachmentCollectionResult($_GetAttachmentCollectionResult)
	{
		return ($this->GetAttachmentCollectionResult = $_GetAttachmentCollectionResult);
	}
	/**
	 * Get GetAttachmentCollectionResult
	 * @return SPListsTypeGetAttachmentCollectionResult
	 */
	public function getGetAttachmentCollectionResult()
	{
		return $this->GetAttachmentCollectionResult;
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