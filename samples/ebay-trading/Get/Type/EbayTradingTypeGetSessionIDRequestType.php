<?php
/**
 * Class file for EbayTradingTypeGetSessionIDRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSessionIDRequestType
 * Documentation : Retrieves a session ID that identifies a user and your application when you make a FetchToken request.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSessionIDRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The RuName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The runame provided must match the one that will be used for validation during the creation of a user token.
	 * @var string
	 */
	public $RuName;
	/**
	 * Constructor
	 * @param string RuName
	 * @return EbayTradingTypeGetSessionIDRequestType
	 */
	public function __construct($_RuName = null)
	{
		EbayTradingWsdlClass::__construct(array('RuName'=>$_RuName));
	}
	/**
	 * Set RuName
	 * @param string RuName
	 * @return string
	 */
	public function setRuName($_RuName)
	{
		return ($this->RuName = $_RuName);
	}
	/**
	 * Get RuName
	 * @return string
	 */
	public function getRuName()
	{
		return $this->RuName;
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