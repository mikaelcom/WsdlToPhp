<?php
/**
 * Class file for XiBondMasterTypeSinkingFundScheduleComposite
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeSinkingFundScheduleComposite
 * @date 08/07/2012
 */
class XiBondMasterTypeSinkingFundScheduleComposite extends XiBondMasterTypeCommon
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
	 * The SinkingFundSchedules
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeArrayOfSinkingFundSchedule
	 */
	public $SinkingFundSchedules;
	/**
	 * Constructor
	 * @param XiBondMasterTypeInstrumentIdentifier InstrumentIdentifier
	 * @param XiBondMasterTypeArrayOfSinkingFundSchedule SinkingFundSchedules
	 * @return XiBondMasterTypeSinkingFundScheduleComposite
	 */
	public function __construct($_InstrumentIdentifier = null,$_SinkingFundSchedules = null)
	{
		XiBondMasterWsdlClass::__construct(array('InstrumentIdentifier'=>$_InstrumentIdentifier,'SinkingFundSchedules'=>new XiBondMasterTypeArrayOfSinkingFundSchedule($_SinkingFundSchedules)));
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
	 * Set SinkingFundSchedules
	 * @param ArrayOfSinkingFundSchedule SinkingFundSchedules
	 * @return ArrayOfSinkingFundSchedule
	 */
	public function setSinkingFundSchedules($_SinkingFundSchedules)
	{
		return ($this->SinkingFundSchedules = $_SinkingFundSchedules);
	}
	/**
	 * Get SinkingFundSchedules
	 * @return XiBondMasterTypeArrayOfSinkingFundSchedule
	 */
	public function getSinkingFundSchedules()
	{
		return $this->SinkingFundSchedules;
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