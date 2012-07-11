<?php
/**
 * Class file for OvhTypeSupportSendMessageResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSupportSendMessageResponse
 * @date 02/07/2012
 */
class OvhTypeSupportSendMessageResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeSupportSendMessageReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeSupportSendMessageReturn return
	 * @return OvhTypeSupportSendMessageResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param supportSendMessageReturn return
	 * @return supportSendMessageReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypesupportSendMessageReturn
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