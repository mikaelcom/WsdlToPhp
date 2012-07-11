<?php
/**
 * Class file for XiBondMasterTypeEarlyRedemptionSchedule
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeEarlyRedemptionSchedule
 * @date 08/07/2012
 */
class XiBondMasterTypeEarlyRedemptionSchedule extends XiBondMasterWsdlClass
{
	/**
	 * The EarlyRedemptionStartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EarlyRedemptionStartDate;
	/**
	 * The EarlyRedemptionEndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EarlyRedemptionEndDate;
	/**
	 * The RedemptionAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RedemptionAmount;
	/**
	 * The AmountQuotationType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AmountQuotationType;
	/**
	 * The ReasonForRedemption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReasonForRedemption;
	/**
	 * The EntitledParty
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EntitledParty;
	/**
	 * The ScheduleDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ScheduleDescription;
	/**
	 * Constructor
	 * @param string EarlyRedemptionStartDate
	 * @param string EarlyRedemptionEndDate
	 * @param string RedemptionAmount
	 * @param string AmountQuotationType
	 * @param string ReasonForRedemption
	 * @param string EntitledParty
	 * @param string ScheduleDescription
	 * @return XiBondMasterTypeEarlyRedemptionSchedule
	 */
	public function __construct($_EarlyRedemptionStartDate = null,$_EarlyRedemptionEndDate = null,$_RedemptionAmount = null,$_AmountQuotationType = null,$_ReasonForRedemption = null,$_EntitledParty = null,$_ScheduleDescription = null)
	{
		parent::__construct(array('EarlyRedemptionStartDate'=>$_EarlyRedemptionStartDate,'EarlyRedemptionEndDate'=>$_EarlyRedemptionEndDate,'RedemptionAmount'=>$_RedemptionAmount,'AmountQuotationType'=>$_AmountQuotationType,'ReasonForRedemption'=>$_ReasonForRedemption,'EntitledParty'=>$_EntitledParty,'ScheduleDescription'=>$_ScheduleDescription));
	}
	/**
	 * Set EarlyRedemptionStartDate
	 * @param string EarlyRedemptionStartDate
	 * @return string
	 */
	public function setEarlyRedemptionStartDate($_EarlyRedemptionStartDate)
	{
		return ($this->EarlyRedemptionStartDate = $_EarlyRedemptionStartDate);
	}
	/**
	 * Get EarlyRedemptionStartDate
	 * @return string
	 */
	public function getEarlyRedemptionStartDate()
	{
		return $this->EarlyRedemptionStartDate;
	}
	/**
	 * Set EarlyRedemptionEndDate
	 * @param string EarlyRedemptionEndDate
	 * @return string
	 */
	public function setEarlyRedemptionEndDate($_EarlyRedemptionEndDate)
	{
		return ($this->EarlyRedemptionEndDate = $_EarlyRedemptionEndDate);
	}
	/**
	 * Get EarlyRedemptionEndDate
	 * @return string
	 */
	public function getEarlyRedemptionEndDate()
	{
		return $this->EarlyRedemptionEndDate;
	}
	/**
	 * Set RedemptionAmount
	 * @param string RedemptionAmount
	 * @return string
	 */
	public function setRedemptionAmount($_RedemptionAmount)
	{
		return ($this->RedemptionAmount = $_RedemptionAmount);
	}
	/**
	 * Get RedemptionAmount
	 * @return string
	 */
	public function getRedemptionAmount()
	{
		return $this->RedemptionAmount;
	}
	/**
	 * Set AmountQuotationType
	 * @param string AmountQuotationType
	 * @return string
	 */
	public function setAmountQuotationType($_AmountQuotationType)
	{
		return ($this->AmountQuotationType = $_AmountQuotationType);
	}
	/**
	 * Get AmountQuotationType
	 * @return string
	 */
	public function getAmountQuotationType()
	{
		return $this->AmountQuotationType;
	}
	/**
	 * Set ReasonForRedemption
	 * @param string ReasonForRedemption
	 * @return string
	 */
	public function setReasonForRedemption($_ReasonForRedemption)
	{
		return ($this->ReasonForRedemption = $_ReasonForRedemption);
	}
	/**
	 * Get ReasonForRedemption
	 * @return string
	 */
	public function getReasonForRedemption()
	{
		return $this->ReasonForRedemption;
	}
	/**
	 * Set EntitledParty
	 * @param string EntitledParty
	 * @return string
	 */
	public function setEntitledParty($_EntitledParty)
	{
		return ($this->EntitledParty = $_EntitledParty);
	}
	/**
	 * Get EntitledParty
	 * @return string
	 */
	public function getEntitledParty()
	{
		return $this->EntitledParty;
	}
	/**
	 * Set ScheduleDescription
	 * @param string ScheduleDescription
	 * @return string
	 */
	public function setScheduleDescription($_ScheduleDescription)
	{
		return ($this->ScheduleDescription = $_ScheduleDescription);
	}
	/**
	 * Get ScheduleDescription
	 * @return string
	 */
	public function getScheduleDescription()
	{
		return $this->ScheduleDescription;
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