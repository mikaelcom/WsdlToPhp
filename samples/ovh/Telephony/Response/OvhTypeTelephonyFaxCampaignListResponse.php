<?php
/**
 * Class file for OvhTypeTelephonyFaxCampaignListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyFaxCampaignListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyFaxCampaignListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyFaxCampaignListReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyFaxCampaignListReturn return
	 * @return OvhTypeTelephonyFaxCampaignListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyFaxCampaignListReturn return
	 * @return telephonyFaxCampaignListReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyFaxCampaignListReturn
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