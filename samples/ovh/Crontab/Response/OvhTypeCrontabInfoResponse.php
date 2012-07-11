<?php
/**
 * Class file for OvhTypeCrontabInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeCrontabInfoResponse
 * @date 02/07/2012
 */
class OvhTypeCrontabInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeCrontabInfoReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeCrontabInfoReturn return
	 * @return OvhTypeCrontabInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param crontabInfoReturn return
	 * @return crontabInfoReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypecrontabInfoReturn
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