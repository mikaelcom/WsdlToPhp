<?php
/**
 * Class file for OvhTypeHostingChangeMainDomainResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeHostingChangeMainDomainResponse
 * @date 02/07/2012
 */
class OvhTypeHostingChangeMainDomainResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeHostingChangeMainDomainReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeHostingChangeMainDomainReturn return
	 * @return OvhTypeHostingChangeMainDomainResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param hostingChangeMainDomainReturn return
	 * @return hostingChangeMainDomainReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypehostingChangeMainDomainReturn
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