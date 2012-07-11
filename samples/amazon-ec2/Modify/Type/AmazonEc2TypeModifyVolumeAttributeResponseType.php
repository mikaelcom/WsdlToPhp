<?php
/**
 * Class file for AmazonEc2TypeModifyVolumeAttributeResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeModifyVolumeAttributeResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeModifyVolumeAttributeResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The return
	 * @var boolean
	 */
	public $return;
	/**
	 * Constructor
	 * @param string requestId
	 * @param boolean return
	 * @return AmazonEc2TypeModifyVolumeAttributeResponseType
	 */
	public function __construct($_requestId = null,$_return = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'return'=>$_return));
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
	 * Set return
	 * @param boolean return
	 * @return boolean
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return boolean
	 */
	public function getReturn()
	{
		return $this->return;
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