<?php
/**
 * Class file for OvhTypeTicketListContactResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTicketListContactResponse
 * @date 02/07/2012
 */
class OvhTypeTicketListContactResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTicketContactStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTicketContactStructType return
	 * @return OvhTypeTicketListContactResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTicketContactStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTicketContactStructType return
	 * @return MyArrayOfTicketContactStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTicketContactStructType
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