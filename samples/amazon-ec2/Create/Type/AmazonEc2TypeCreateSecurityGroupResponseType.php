<?php
/**
 * Class file for AmazonEc2TypeCreateSecurityGroupResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateSecurityGroupResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateSecurityGroupResponseType extends AmazonEc2WsdlClass
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
	 * The groupId
	 * @var string
	 */
	public $groupId;
	/**
	 * Constructor
	 * @param string requestId
	 * @param boolean return
	 * @param string groupId
	 * @return AmazonEc2TypeCreateSecurityGroupResponseType
	 */
	public function __construct($_requestId = null,$_return = null,$_groupId = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'return'=>$_return,'groupId'=>$_groupId));
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
	 * Set groupId
	 * @param string groupId
	 * @return string
	 */
	public function setGroupId($_groupId)
	{
		return ($this->groupId = $_groupId);
	}
	/**
	 * Get groupId
	 * @return string
	 */
	public function getGroupId()
	{
		return $this->groupId;
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