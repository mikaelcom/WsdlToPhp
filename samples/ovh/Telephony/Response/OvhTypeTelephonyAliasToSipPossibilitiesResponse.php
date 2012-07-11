<?php
/**
 * Class file for OvhTypeTelephonyAliasToSipPossibilitiesResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyAliasToSipPossibilitiesResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyAliasToSipPossibilitiesResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyAliasToLinePossibilityPriceStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyAliasToLinePossibilityPriceStructType return
	 * @return OvhTypeTelephonyAliasToSipPossibilitiesResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyAliasToLinePossibilityPriceStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyAliasToLinePossibilityPriceStructType return
	 * @return MyArrayOfTelephonyAliasToLinePossibilityPriceStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyAliasToLinePossibilityPriceStructType
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