<?php
/**
 * Class file for OvhTypeHostingGetCapabilitiesResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeHostingGetCapabilitiesResponse
 * @date 02/07/2012
 */
class OvhTypeHostingGetCapabilitiesResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeHostingGetCapabilitiesReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeHostingGetCapabilitiesReturn return
	 * @return OvhTypeHostingGetCapabilitiesResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param hostingGetCapabilitiesReturn return
	 * @return hostingGetCapabilitiesReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypehostingGetCapabilitiesReturn
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