<?php
/**
 * Class file for OvhTypeEmailGetCapabilitiesResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeEmailGetCapabilitiesResponse
 * @date 02/07/2012
 */
class OvhTypeEmailGetCapabilitiesResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeEmailGetCapabilitiesReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeEmailGetCapabilitiesReturn return
	 * @return OvhTypeEmailGetCapabilitiesResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param emailGetCapabilitiesReturn return
	 * @return emailGetCapabilitiesReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeemailGetCapabilitiesReturn
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