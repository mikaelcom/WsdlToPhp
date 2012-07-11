<?php
/**
 * Class file for XiBondMasterTypeEarlyRedemptionScheduleComposite
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeEarlyRedemptionScheduleComposite
 * @date 08/07/2012
 */
class XiBondMasterTypeEarlyRedemptionScheduleComposite extends XiBondMasterTypeCommon
{
	/**
	 * The InstrumentIdentifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeInstrumentIdentifier
	 */
	public $InstrumentIdentifier;
	/**
	 * The EarlyRedemptionSchedules
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeArrayOfEarlyRedemptionSchedule
	 */
	public $EarlyRedemptionSchedules;
	/**
	 * Constructor
	 * @param XiBondMasterTypeInstrumentIdentifier InstrumentIdentifier
	 * @param XiBondMasterTypeArrayOfEarlyRedemptionSchedule EarlyRedemptionSchedules
	 * @return XiBondMasterTypeEarlyRedemptionScheduleComposite
	 */
	public function __construct($_InstrumentIdentifier = null,$_EarlyRedemptionSchedules = null)
	{
		XiBondMasterWsdlClass::__construct(array('InstrumentIdentifier'=>$_InstrumentIdentifier,'EarlyRedemptionSchedules'=>new XiBondMasterTypeArrayOfEarlyRedemptionSchedule($_EarlyRedemptionSchedules)));
	}
	/**
	 * Set InstrumentIdentifier
	 * @param InstrumentIdentifier InstrumentIdentifier
	 * @return InstrumentIdentifier
	 */
	public function setInstrumentIdentifier($_InstrumentIdentifier)
	{
		return ($this->InstrumentIdentifier = $_InstrumentIdentifier);
	}
	/**
	 * Get InstrumentIdentifier
	 * @return XiBondMasterTypeInstrumentIdentifier
	 */
	public function getInstrumentIdentifier()
	{
		return $this->InstrumentIdentifier;
	}
	/**
	 * Set EarlyRedemptionSchedules
	 * @param ArrayOfEarlyRedemptionSchedule EarlyRedemptionSchedules
	 * @return ArrayOfEarlyRedemptionSchedule
	 */
	public function setEarlyRedemptionSchedules($_EarlyRedemptionSchedules)
	{
		return ($this->EarlyRedemptionSchedules = $_EarlyRedemptionSchedules);
	}
	/**
	 * Get EarlyRedemptionSchedules
	 * @return XiBondMasterTypeArrayOfEarlyRedemptionSchedule
	 */
	public function getEarlyRedemptionSchedules()
	{
		return $this->EarlyRedemptionSchedules;
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