<?php
/**
 * Class file for XiHoldingsTypeGetFormSC13XDetails
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeGetFormSC13XDetails
 * @date 08/07/2012
 */
class XiHoldingsTypeGetFormSC13XDetails extends XiHoldingsWsdlClass
{
	/**
	 * The HTMLUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $HTMLUrl;
	/**
	 * Constructor
	 * @param string HTMLUrl
	 * @return XiHoldingsTypeGetFormSC13XDetails
	 */
	public function __construct($_HTMLUrl = null)
	{
		parent::__construct(array('HTMLUrl'=>$_HTMLUrl));
	}
	/**
	 * Set HTMLUrl
	 * @param string HTMLUrl
	 * @return string
	 */
	public function setHTMLUrl($_HTMLUrl)
	{
		return ($this->HTMLUrl = $_HTMLUrl);
	}
	/**
	 * Get HTMLUrl
	 * @return string
	 */
	public function getHTMLUrl()
	{
		return $this->HTMLUrl;
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