<?php
/**
 * Class file for OvhTypeMultiDomainInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMultiDomainInfoResponse
 * @date 02/07/2012
 */
class OvhTypeMultiDomainInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMultiDomainStruct
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMultiDomainStruct return
	 * @return OvhTypeMultiDomainInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param multiDomainStruct return
	 * @return multiDomainStruct
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypemultiDomainStruct
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