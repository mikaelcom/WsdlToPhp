<?php
/**
 * Class file for OvhTypeResponderEmailInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeResponderEmailInfoResponse
 * @date 02/07/2012
 */
class OvhTypeResponderEmailInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeResponderEmailStruct
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeResponderEmailStruct return
	 * @return OvhTypeResponderEmailInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param responderEmailStruct return
	 * @return responderEmailStruct
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTyperesponderEmailStruct
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