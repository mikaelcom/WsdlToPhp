<?php
/**
 * Class file for XWebShipViaTypeShipViaRequest
 * @date 09/07/2012
 */
/**
 * Class XWebShipViaTypeShipViaRequest
 * @date 09/07/2012
 */
class XWebShipViaTypeShipViaRequest extends XWebShipViaWsdlClass
{
	/**
	 * The RequestShipVia
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebShipViaTypeRequestShipViaType
	 */
	public $RequestShipVia;
	/**
	 * Constructor
	 * @param XWebShipViaTypeRequestShipViaType RequestShipVia
	 * @return XWebShipViaTypeShipViaRequest
	 */
	public function __construct($_RequestShipVia)
	{
		parent::__construct(array('RequestShipVia'=>$_RequestShipVia));
	}
	/**
	 * Set RequestShipVia
	 * @param RequestShipViaType RequestShipVia
	 * @return RequestShipViaType
	 */
	public function setRequestShipVia($_RequestShipVia)
	{
		return ($this->RequestShipVia = $_RequestShipVia);
	}
	/**
	 * Get RequestShipVia
	 * @return XWebShipViaTypeRequestShipViaType
	 */
	public function getRequestShipVia()
	{
		return $this->RequestShipVia;
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