<?php
/**
 * Class file for OvhTypeTelephonyPhonebookAddResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPhonebookAddResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyPhonebookAddResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var int
	 */
	public $return;
	/**
	 * Constructor
	 * @param int return
	 * @return OvhTypeTelephonyPhonebookAddResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param int return
	 * @return int
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return int
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