<?php
/**
 * Class file for OvhTypeSupportGetFullMessageResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSupportGetFullMessageResponse
 * @date 02/07/2012
 */
class OvhTypeSupportGetFullMessageResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeSupportMessageDetailReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeSupportMessageDetailReturn return
	 * @return OvhTypeSupportGetFullMessageResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param supportMessageDetailReturn return
	 * @return supportMessageDetailReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypesupportMessageDetailReturn
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