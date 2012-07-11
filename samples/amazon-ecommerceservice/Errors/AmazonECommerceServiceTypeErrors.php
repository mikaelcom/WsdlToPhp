<?php
/**
 * Class file for AmazonECommerceServiceTypeErrors
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeErrors
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeErrors extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Error
	 * @var AmazonECommerceServiceTypeError
	 */
	public $Error;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeError Error
	 * @return AmazonECommerceServiceTypeErrors
	 */
	public function __construct($_Error = null)
	{
		parent::__construct(array('Error'=>$_Error));
	}
	/**
	 * Set Error
	 * @param Error Error
	 * @return Error
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return AmazonECommerceServiceTypeError
	 */
	public function getError()
	{
		return $this->Error;
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