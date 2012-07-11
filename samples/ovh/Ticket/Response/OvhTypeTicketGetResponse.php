<?php
/**
 * Class file for OvhTypeTicketGetResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTicketGetResponse
 * @date 02/07/2012
 */
class OvhTypeTicketGetResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeFullTicketReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeFullTicketReturn return
	 * @return OvhTypeTicketGetResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param fullTicketReturn return
	 * @return fullTicketReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypefullTicketReturn
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