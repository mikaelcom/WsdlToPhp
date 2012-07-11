<?php
/**
 * Class file for OvhTypeRedirectedEmailListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRedirectedEmailListResponse
 * @date 02/07/2012
 */
class OvhTypeRedirectedEmailListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfEmailRedirectionStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfEmailRedirectionStructType return
	 * @return OvhTypeRedirectedEmailListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfEmailRedirectionStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfEmailRedirectionStructType return
	 * @return MyArrayOfEmailRedirectionStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfEmailRedirectionStructType
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