<?php
/**
 * Class file for OvhTypeTelephonyAbbreviatedNumberListPaginatedResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyAbbreviatedNumberListPaginatedResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyAbbreviatedNumberListPaginatedResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyAbbreviatedNumberListPaginatedReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyAbbreviatedNumberListPaginatedReturn return
	 * @return OvhTypeTelephonyAbbreviatedNumberListPaginatedResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyAbbreviatedNumberListPaginatedReturn return
	 * @return telephonyAbbreviatedNumberListPaginatedReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyAbbreviatedNumberListPaginatedReturn
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