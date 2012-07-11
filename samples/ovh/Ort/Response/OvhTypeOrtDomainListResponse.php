<?php
/**
 * Class file for OvhTypeOrtDomainListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeOrtDomainListResponse
 * @date 02/07/2012
 */
class OvhTypeOrtDomainListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfOrtStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfOrtStructType return
	 * @return OvhTypeOrtDomainListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfOrtStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfOrtStructType return
	 * @return MyArrayOfOrtStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfOrtStructType
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