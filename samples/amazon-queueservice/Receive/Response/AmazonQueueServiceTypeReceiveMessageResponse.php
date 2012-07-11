<?php
/**
 * Class file for AmazonQueueServiceTypeReceiveMessageResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeReceiveMessageResponse
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeReceiveMessageResponse extends AmazonQueueServiceWsdlClass
{
	/**
	 * The ReceiveMessageResult
	 * @var AmazonQueueServiceTypeReceiveMessageResult
	 */
	public $ReceiveMessageResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonQueueServiceTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonQueueServiceTypeReceiveMessageResult ReceiveMessageResult
	 * @param AmazonQueueServiceTypeResponseMetadata ResponseMetadata
	 * @return AmazonQueueServiceTypeReceiveMessageResponse
	 */
	public function __construct($_ReceiveMessageResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('ReceiveMessageResult'=>$_ReceiveMessageResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set ReceiveMessageResult
	 * @param ReceiveMessageResult ReceiveMessageResult
	 * @return ReceiveMessageResult
	 */
	public function setReceiveMessageResult($_ReceiveMessageResult)
	{
		return ($this->ReceiveMessageResult = $_ReceiveMessageResult);
	}
	/**
	 * Get ReceiveMessageResult
	 * @return AmazonQueueServiceTypeReceiveMessageResult
	 */
	public function getReceiveMessageResult()
	{
		return $this->ReceiveMessageResult;
	}
	/**
	 * Set ResponseMetadata
	 * @param ResponseMetadata ResponseMetadata
	 * @return ResponseMetadata
	 */
	public function setResponseMetadata($_ResponseMetadata)
	{
		return ($this->ResponseMetadata = $_ResponseMetadata);
	}
	/**
	 * Get ResponseMetadata
	 * @return AmazonQueueServiceTypeResponseMetadata
	 */
	public function getResponseMetadata()
	{
		return $this->ResponseMetadata;
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