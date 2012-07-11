<?php
/**
 * Class file for AmazonEc2TypeAttachNetworkInterfaceResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAttachNetworkInterfaceResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeAttachNetworkInterfaceResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The attachmentId
	 * @var string
	 */
	public $attachmentId;
	/**
	 * Constructor
	 * @param string requestId
	 * @param string attachmentId
	 * @return AmazonEc2TypeAttachNetworkInterfaceResponseType
	 */
	public function __construct($_requestId = null,$_attachmentId = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'attachmentId'=>$_attachmentId));
	}
	/**
	 * Set requestId
	 * @param string requestId
	 * @return string
	 */
	public function setRequestId($_requestId)
	{
		return ($this->requestId = $_requestId);
	}
	/**
	 * Get requestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->requestId;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>