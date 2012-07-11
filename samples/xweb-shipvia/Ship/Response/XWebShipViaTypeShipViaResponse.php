<?php
/**
 * Class file for XWebShipViaTypeShipViaResponse
 * @date 09/07/2012
 */
/**
 * Class XWebShipViaTypeShipViaResponse
 * @date 09/07/2012
 */
class XWebShipViaTypeShipViaResponse extends XWebShipViaWsdlClass
{
	/**
	 * The ResponseShipVia
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebShipViaTypeResponseShipViaType
	 */
	public $ResponseShipVia;
	/**
	 * Constructor
	 * @param XWebShipViaTypeResponseShipViaType ResponseShipVia
	 * @return XWebShipViaTypeShipViaResponse
	 */
	public function __construct($_ResponseShipVia)
	{
		parent::__construct(array('ResponseShipVia'=>$_ResponseShipVia));
	}
	/**
	 * Set ResponseShipVia
	 * @param ResponseShipViaType ResponseShipVia
	 * @return ResponseShipViaType
	 */
	public function setResponseShipVia($_ResponseShipVia)
	{
		return ($this->ResponseShipVia = $_ResponseShipVia);
	}
	/**
	 * Get ResponseShipVia
	 * @return XWebShipViaTypeResponseShipViaType
	 */
	public function getResponseShipVia()
	{
		return $this->ResponseShipVia;
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