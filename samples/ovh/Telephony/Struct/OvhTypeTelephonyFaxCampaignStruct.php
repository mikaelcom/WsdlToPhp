<?php
/**
 * Class file for OvhTypeTelephonyFaxCampaignStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyFaxCampaignStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyFaxCampaignStruct extends OvhWsdlClass
{
	/**
	 * The campaignName
	 * @var string
	 */
	public $campaignName;
	/**
	 * The campaignStatus
	 * @var string
	 */
	public $campaignStatus;
	/**
	 * The dateStart
	 * @var string
	 */
	public $dateStart;
	/**
	 * The dateEnd
	 * @var string
	 */
	public $dateEnd;
	/**
	 * The total
	 * @var int
	 */
	public $total;
	/**
	 * The success
	 * @var int
	 */
	public $success;
	/**
	 * The failed
	 * @var int
	 */
	public $failed;
	/**
	 * The reference
	 * @var string
	 */
	public $reference;
	/**
	 * Constructor
	 * @param string campaignName
	 * @param string campaignStatus
	 * @param string dateStart
	 * @param string dateEnd
	 * @param int total
	 * @param int success
	 * @param int failed
	 * @param string reference
	 * @return OvhTypeTelephonyFaxCampaignStruct
	 */
	public function __construct($_campaignName = null,$_campaignStatus = null,$_dateStart = null,$_dateEnd = null,$_total = null,$_success = null,$_failed = null,$_reference = null)
	{
		parent::__construct(array('campaignName'=>$_campaignName,'campaignStatus'=>$_campaignStatus,'dateStart'=>$_dateStart,'dateEnd'=>$_dateEnd,'total'=>$_total,'success'=>$_success,'failed'=>$_failed,'reference'=>$_reference));
	}
	/**
	 * Set campaignName
	 * @param string campaignName
	 * @return string
	 */
	public function setCampaignName($_campaignName)
	{
		return ($this->campaignName = $_campaignName);
	}
	/**
	 * Get campaignName
	 * @return string
	 */
	public function getCampaignName()
	{
		return $this->campaignName;
	}
	/**
	 * Set campaignStatus
	 * @param string campaignStatus
	 * @return string
	 */
	public function setCampaignStatus($_campaignStatus)
	{
		return ($this->campaignStatus = $_campaignStatus);
	}
	/**
	 * Get campaignStatus
	 * @return string
	 */
	public function getCampaignStatus()
	{
		return $this->campaignStatus;
	}
	/**
	 * Set dateStart
	 * @param string dateStart
	 * @return string
	 */
	public function setDateStart($_dateStart)
	{
		return ($this->dateStart = $_dateStart);
	}
	/**
	 * Get dateStart
	 * @return string
	 */
	public function getDateStart()
	{
		return $this->dateStart;
	}
	/**
	 * Set dateEnd
	 * @param string dateEnd
	 * @return string
	 */
	public function setDateEnd($_dateEnd)
	{
		return ($this->dateEnd = $_dateEnd);
	}
	/**
	 * Get dateEnd
	 * @return string
	 */
	public function getDateEnd()
	{
		return $this->dateEnd;
	}
	/**
	 * Set total
	 * @param int total
	 * @return int
	 */
	public function setTotal($_total)
	{
		return ($this->total = $_total);
	}
	/**
	 * Get total
	 * @return int
	 */
	public function getTotal()
	{
		return $this->total;
	}
	/**
	 * Set success
	 * @param int success
	 * @return int
	 */
	public function setSuccess($_success)
	{
		return ($this->success = $_success);
	}
	/**
	 * Get success
	 * @return int
	 */
	public function getSuccess()
	{
		return $this->success;
	}
	/**
	 * Set failed
	 * @param int failed
	 * @return int
	 */
	public function setFailed($_failed)
	{
		return ($this->failed = $_failed);
	}
	/**
	 * Get failed
	 * @return int
	 */
	public function getFailed()
	{
		return $this->failed;
	}
	/**
	 * Set reference
	 * @param string reference
	 * @return string
	 */
	public function setReference($_reference)
	{
		return ($this->reference = $_reference);
	}
	/**
	 * Get reference
	 * @return string
	 */
	public function getReference()
	{
		return $this->reference;
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