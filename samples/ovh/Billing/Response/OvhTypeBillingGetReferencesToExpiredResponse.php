<?php
/**
 * Class file for OvhTypeBillingGetReferencesToExpiredResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeBillingGetReferencesToExpiredResponse
 * @date 02/07/2012
 */
class OvhTypeBillingGetReferencesToExpiredResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfBillingGetReferencesToExpiredStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfBillingGetReferencesToExpiredStructType return
	 * @return OvhTypeBillingGetReferencesToExpiredResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfBillingGetReferencesToExpiredStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfBillingGetReferencesToExpiredStructType return
	 * @return MyArrayOfBillingGetReferencesToExpiredStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfBillingGetReferencesToExpiredStructType
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