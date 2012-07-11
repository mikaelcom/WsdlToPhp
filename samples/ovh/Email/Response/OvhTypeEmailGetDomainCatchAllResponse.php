<?php
/**
 * Class file for OvhTypeEmailGetDomainCatchAllResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeEmailGetDomainCatchAllResponse
 * @date 02/07/2012
 */
class OvhTypeEmailGetDomainCatchAllResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeCatchAllGetReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeCatchAllGetReturn return
	 * @return OvhTypeEmailGetDomainCatchAllResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param catchAllGetReturn return
	 * @return catchAllGetReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypecatchAllGetReturn
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