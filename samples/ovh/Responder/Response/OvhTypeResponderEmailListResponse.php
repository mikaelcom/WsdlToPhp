<?php
/**
 * Class file for OvhTypeResponderEmailListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeResponderEmailListResponse
 * @date 02/07/2012
 */
class OvhTypeResponderEmailListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfResponderEmailStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfResponderEmailStructType return
	 * @return OvhTypeResponderEmailListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfResponderEmailStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfResponderEmailStructType return
	 * @return MyArrayOfResponderEmailStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfResponderEmailStructType
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