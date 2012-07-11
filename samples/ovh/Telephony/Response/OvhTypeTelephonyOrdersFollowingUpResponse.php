<?php
/**
 * Class file for OvhTypeTelephonyOrdersFollowingUpResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyOrdersFollowingUpResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyOrdersFollowingUpResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfOrderFollowingUpStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfOrderFollowingUpStructType return
	 * @return OvhTypeTelephonyOrdersFollowingUpResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfOrderFollowingUpStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfOrderFollowingUpStructType return
	 * @return MyArrayOfOrderFollowingUpStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfOrderFollowingUpStructType
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