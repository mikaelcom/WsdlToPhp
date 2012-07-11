<?php
/**
 * Class file for OvhTypeDedicatedFilterIrcClientRuleListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedFilterIrcClientRuleListResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedFilterIrcClientRuleListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfDedicatedFilterIrcRuleStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedFilterIrcRuleStructType return
	 * @return OvhTypeDedicatedFilterIrcClientRuleListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfDedicatedFilterIrcRuleStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfDedicatedFilterIrcRuleStructType return
	 * @return MyArrayOfDedicatedFilterIrcRuleStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfDedicatedFilterIrcRuleStructType
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