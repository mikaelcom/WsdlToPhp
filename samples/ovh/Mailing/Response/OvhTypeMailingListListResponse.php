<?php
/**
 * Class file for OvhTypeMailingListListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMailingListListResponse
 * @date 02/07/2012
 */
class OvhTypeMailingListListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfMailingListStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfMailingListStructType return
	 * @return OvhTypeMailingListListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfMailingListStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfMailingListStructType return
	 * @return MyArrayOfMailingListStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfMailingListStructType
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