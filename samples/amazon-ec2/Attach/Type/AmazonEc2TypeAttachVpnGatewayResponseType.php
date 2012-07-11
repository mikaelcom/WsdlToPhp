<?php
/**
 * Class file for AmazonEc2TypeAttachVpnGatewayResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAttachVpnGatewayResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeAttachVpnGatewayResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The attachment
	 * @var AmazonEc2TypeAttachmentType
	 */
	public $attachment;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeAttachmentType attachment
	 * @return AmazonEc2TypeAttachVpnGatewayResponseType
	 */
	public function __construct($_requestId = null,$_attachment = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'attachment'=>$_attachment));
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
	 * Set attachment
	 * @param AttachmentType attachment
	 * @return AttachmentType
	 */
	public function setAttachment($_attachment)
	{
		return ($this->attachment = $_attachment);
	}
	/**
	 * Get attachment
	 * @return AmazonEc2TypeAttachmentType
	 */
	public function getAttachment()
	{
		return $this->attachment;
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