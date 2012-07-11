<?php
/**
 * Class file for OvhTypePopInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypePopInfoResponse
 * @date 02/07/2012
 */
class OvhTypePopInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypePopStruct
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypePopStruct return
	 * @return OvhTypePopInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param popStruct return
	 * @return popStruct
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypepopStruct
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