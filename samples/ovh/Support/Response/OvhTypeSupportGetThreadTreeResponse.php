<?php
/**
 * Class file for OvhTypeSupportGetThreadTreeResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSupportGetThreadTreeResponse
 * @date 02/07/2012
 */
class OvhTypeSupportGetThreadTreeResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeSupportThreadTreeReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeSupportThreadTreeReturn return
	 * @return OvhTypeSupportGetThreadTreeResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param supportThreadTreeReturn return
	 * @return supportThreadTreeReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypesupportThreadTreeReturn
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