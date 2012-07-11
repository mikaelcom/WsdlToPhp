<?php
/**
 * Class file for EbayFindTypeBaseServiceRequest
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeBaseServiceRequest
 * @date 04/07/2012
 */
class EbayFindTypeBaseServiceRequest extends EbayFindWsdlClass
{
	/**
	 * Constructor
	 * @return EbayFindTypeBaseServiceRequest
	 */
	public function __construct()
	{
		parent::__construct(array());
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