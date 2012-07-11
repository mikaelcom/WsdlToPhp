<?php
/**
 * Class file for OvhTypeRipeQueryResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRipeQueryResponse
 * @date 02/07/2012
 */
class OvhTypeRipeQueryResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeRipeReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeRipeReturn return
	 * @return OvhTypeRipeQueryResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param ripeReturn return
	 * @return ripeReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTyperipeReturn
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