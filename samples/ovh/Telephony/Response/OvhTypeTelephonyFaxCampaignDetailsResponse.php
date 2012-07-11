<?php
/**
 * Class file for OvhTypeTelephonyFaxCampaignDetailsResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyFaxCampaignDetailsResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyFaxCampaignDetailsResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyFaxCampaignDetailsStruct
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyFaxCampaignDetailsStruct return
	 * @return OvhTypeTelephonyFaxCampaignDetailsResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyFaxCampaignDetailsStruct return
	 * @return telephonyFaxCampaignDetailsStruct
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyFaxCampaignDetailsStruct
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