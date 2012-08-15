<?php
/**
 * Class file for RFAustraliaPostalCodeTypeGetPostCodeDetailsByPlaceName
 * @date 15/08/2012
 */
/**
 * Class RFAustraliaPostalCodeTypeGetPostCodeDetailsByPlaceName
 * @date 15/08/2012
 */
class RFAustraliaPostalCodeTypeGetPostCodeDetailsByPlaceName extends RFAustraliaPostalCodeWsdlClass
{
	/**
	 * The request
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $request;
	/**
	 * Constructor
	 * @param string request
	 * @return RFAustraliaPostalCodeTypeGetPostCodeDetailsByPlaceName
	 */
	public function __construct($_request = null)
	{
		parent::__construct(array('request'=>$_request));
	}
	/**
	 * Set request
	 * @param string request
	 * @return string
	 */
	public function setRequest($_request)
	{
		return ($this->request = $_request);
	}
	/**
	 * Get request
	 * @return string
	 */
	public function getRequest()
	{
		return $this->request;
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