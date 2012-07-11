<?php
/**
 * Class file for OvhTypeTicketListIncidentsByDomainResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTicketListIncidentsByDomainResponse
 * @date 02/07/2012
 */
class OvhTypeTicketListIncidentsByDomainResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTicketStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTicketStructType return
	 * @return OvhTypeTicketListIncidentsByDomainResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTicketStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTicketStructType return
	 * @return MyArrayOfTicketStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTicketStructType
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