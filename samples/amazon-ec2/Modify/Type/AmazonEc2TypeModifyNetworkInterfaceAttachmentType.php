<?php
/**
 * Class file for AmazonEc2TypeModifyNetworkInterfaceAttachmentType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeModifyNetworkInterfaceAttachmentType
 * @date 10/07/2012
 */
class AmazonEc2TypeModifyNetworkInterfaceAttachmentType extends AmazonEc2WsdlClass
{
	/**
	 * The attachmentId
	 * @var string
	 */
	public $attachmentId;
	/**
	 * The deleteOnTermination
	 * @var boolean
	 */
	public $deleteOnTermination;
	/**
	 * Constructor
	 * @param string attachmentId
	 * @param boolean deleteOnTermination
	 * @return AmazonEc2TypeModifyNetworkInterfaceAttachmentType
	 */
	public function __construct($_attachmentId = null,$_deleteOnTermination = null)
	{
		parent::__construct(array('attachmentId'=>$_attachmentId,'deleteOnTermination'=>$_deleteOnTermination));
	}
	/**
	 * Set attachmentId
	 * @param string attachmentId
	 * @return string
	 */
	public function setAttachmentId($_attachmentId)
	{
		return ($this->attachmentId = $_attachmentId);
	}
	/**
	 * Get attachmentId
	 * @return string
	 */
	public function getAttachmentId()
	{
		return $this->attachmentId;
	}
	/**
	 * Set deleteOnTermination
	 * @param boolean deleteOnTermination
	 * @return boolean
	 */
	public function setDeleteOnTermination($_deleteOnTermination)
	{
		return ($this->deleteOnTermination = $_deleteOnTermination);
	}
	/**
	 * Get deleteOnTermination
	 * @return boolean
	 */
	public function getDeleteOnTermination()
	{
		return $this->deleteOnTermination;
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