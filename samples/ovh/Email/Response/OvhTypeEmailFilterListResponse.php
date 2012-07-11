<?php
/**
 * Class file for OvhTypeEmailFilterListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeEmailFilterListResponse
 * @date 02/07/2012
 */
class OvhTypeEmailFilterListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfEmailFilterStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfEmailFilterStructType return
	 * @return OvhTypeEmailFilterListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfEmailFilterStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfEmailFilterStructType return
	 * @return MyArrayOfEmailFilterStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfEmailFilterStructType
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