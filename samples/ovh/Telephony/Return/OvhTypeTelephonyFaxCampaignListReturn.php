<?php
/**
 * Class file for OvhTypeTelephonyFaxCampaignListReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyFaxCampaignListReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonyFaxCampaignListReturn extends OvhWsdlClass
{
	/**
	 * The totalRecords
	 * @var int
	 */
	public $totalRecords;
	/**
	 * The list
	 * @var OvhTypeMyArrayOfTelephonyFaxCampaignStructType
	 */
	public $list;
	/**
	 * Constructor
	 * @param int totalRecords
	 * @param OvhTypeMyArrayOfTelephonyFaxCampaignStructType list
	 * @return OvhTypeTelephonyFaxCampaignListReturn
	 */
	public function __construct($_totalRecords = null,$_list = null)
	{
		parent::__construct(array('totalRecords'=>$_totalRecords,'list'=>new OvhTypeMyArrayOfTelephonyFaxCampaignStructType($_list)));
	}
	/**
	 * Set totalRecords
	 * @param int totalRecords
	 * @return int
	 */
	public function setTotalRecords($_totalRecords)
	{
		return ($this->totalRecords = $_totalRecords);
	}
	/**
	 * Get totalRecords
	 * @return int
	 */
	public function getTotalRecords()
	{
		return $this->totalRecords;
	}
	/**
	 * Set list
	 * @param MyArrayOfTelephonyFaxCampaignStructType list
	 * @return MyArrayOfTelephonyFaxCampaignStructType
	 */
	public function setList($_list)
	{
		return ($this->list = $_list);
	}
	/**
	 * Get list
	 * @return OvhTypeMyArrayOfTelephonyFaxCampaignStructType
	 */
	public function getList()
	{
		return $this->list;
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