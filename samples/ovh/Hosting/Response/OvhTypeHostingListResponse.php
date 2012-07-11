<?php
/**
 * Class file for OvhTypeHostingListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeHostingListResponse
 * @date 02/07/2012
 */
class OvhTypeHostingListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfHostingListStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfHostingListStructType return
	 * @return OvhTypeHostingListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfHostingListStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfHostingListStructType return
	 * @return MyArrayOfHostingListStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfHostingListStructType
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