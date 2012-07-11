<?php
/**
 * Class file for SPSitedataTypeGetAttachmentsResponse
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeGetAttachmentsResponse
 * @date 06/07/2012
 */
class SPSitedataTypeGetAttachmentsResponse extends SPSitedataWsdlClass
{
	/**
	 * The GetAttachmentsResult
	 * @var unsignedInt
	 */
	public $GetAttachmentsResult;
	/**
	 * The vAttachments
	 * @var SPSitedataTypeArrayOfString
	 */
	public $vAttachments;
	/**
	 * Constructor
	 * @param unsignedInt GetAttachmentsResult
	 * @param SPSitedataTypeArrayOfString vAttachments
	 * @return SPSitedataTypeGetAttachmentsResponse
	 */
	public function __construct($_GetAttachmentsResult = null,$_vAttachments = null)
	{
		parent::__construct(array('GetAttachmentsResult'=>$_GetAttachmentsResult,'vAttachments'=>new SPSitedataTypeArrayOfString($_vAttachments)));
	}
	/**
	 * Set GetAttachmentsResult
	 * @param unsignedInt GetAttachmentsResult
	 * @return unsignedInt
	 */
	public function setGetAttachmentsResult($_GetAttachmentsResult)
	{
		return ($this->GetAttachmentsResult = $_GetAttachmentsResult);
	}
	/**
	 * Get GetAttachmentsResult
	 * @return unsignedInt
	 */
	public function getGetAttachmentsResult()
	{
		return $this->GetAttachmentsResult;
	}
	/**
	 * Set vAttachments
	 * @param ArrayOfString vAttachments
	 * @return ArrayOfString
	 */
	public function setVAttachments($_vAttachments)
	{
		return ($this->vAttachments = $_vAttachments);
	}
	/**
	 * Get vAttachments
	 * @return SPSitedataTypeArrayOfString
	 */
	public function getVAttachments()
	{
		return $this->vAttachments;
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