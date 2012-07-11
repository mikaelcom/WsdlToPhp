<?php
/**
 * Class file for OvhTypeAutomatedMailGetStateResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeAutomatedMailGetStateResponse
 * @date 02/07/2012
 */
class OvhTypeAutomatedMailGetStateResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeAutomatedMailGetStateReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeAutomatedMailGetStateReturn return
	 * @return OvhTypeAutomatedMailGetStateResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param automatedMailGetStateReturn return
	 * @return automatedMailGetStateReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeautomatedMailGetStateReturn
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