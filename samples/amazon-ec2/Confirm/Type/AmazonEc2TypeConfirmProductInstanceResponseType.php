<?php
/**
 * Class file for AmazonEc2TypeConfirmProductInstanceResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeConfirmProductInstanceResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeConfirmProductInstanceResponseType extends AmazonEc2WsdlClass
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
	 * The ownerId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ownerId;
	/**
	 * Constructor
	 * @param string requestId
	 * @param boolean return
	 * @param string ownerId
	 * @return AmazonEc2TypeConfirmProductInstanceResponseType
	 */
	public function __construct($_requestId = null,$_return = null,$_ownerId = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'return'=>$_return,'ownerId'=>$_ownerId));
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
	 * Set ownerId
	 * @param string ownerId
	 * @return string
	 */
	public function setOwnerId($_ownerId)
	{
		return ($this->ownerId = $_ownerId);
	}
	/**
	 * Get ownerId
	 * @return string
	 */
	public function getOwnerId()
	{
		return $this->ownerId;
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