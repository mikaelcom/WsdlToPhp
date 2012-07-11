<?php
/**
 * Class file for OvhTypeRpsMigrationGetProgressStatusReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRpsMigrationGetProgressStatusReturn
 * @date 02/07/2012
 */
class OvhTypeRpsMigrationGetProgressStatusReturn extends OvhWsdlClass
{
	/**
	 * The step1
	 * @var OvhTypeRpsMigrationGetProgressStatusStepStruct
	 */
	public $step1;
	/**
	 * The step2
	 * @var OvhTypeRpsMigrationGetProgressStatusStepStruct
	 */
	public $step2;
	/**
	 * The step3
	 * @var OvhTypeRpsMigrationGetProgressStatusStepStruct
	 */
	public $step3;
	/**
	 * The step4
	 * @var OvhTypeRpsMigrationGetProgressStatusStepStruct
	 */
	public $step4;
	/**
	 * Constructor
	 * @param OvhTypeRpsMigrationGetProgressStatusStepStruct step1
	 * @param OvhTypeRpsMigrationGetProgressStatusStepStruct step2
	 * @param OvhTypeRpsMigrationGetProgressStatusStepStruct step3
	 * @param OvhTypeRpsMigrationGetProgressStatusStepStruct step4
	 * @return OvhTypeRpsMigrationGetProgressStatusReturn
	 */
	public function __construct($_step1 = null,$_step2 = null,$_step3 = null,$_step4 = null)
	{
		parent::__construct(array('step1'=>$_step1,'step2'=>$_step2,'step3'=>$_step3,'step4'=>$_step4));
	}
	/**
	 * Set step1
	 * @param rpsMigrationGetProgressStatusStepStruct step1
	 * @return rpsMigrationGetProgressStatusStepStruct
	 */
	public function setStep1($_step1)
	{
		return ($this->step1 = $_step1);
	}
	/**
	 * Get step1
	 * @return OvhTyperpsMigrationGetProgressStatusStepStruct
	 */
	public function getStep1()
	{
		return $this->step1;
	}
	/**
	 * Set step2
	 * @param rpsMigrationGetProgressStatusStepStruct step2
	 * @return rpsMigrationGetProgressStatusStepStruct
	 */
	public function setStep2($_step2)
	{
		return ($this->step2 = $_step2);
	}
	/**
	 * Get step2
	 * @return OvhTyperpsMigrationGetProgressStatusStepStruct
	 */
	public function getStep2()
	{
		return $this->step2;
	}
	/**
	 * Set step3
	 * @param rpsMigrationGetProgressStatusStepStruct step3
	 * @return rpsMigrationGetProgressStatusStepStruct
	 */
	public function setStep3($_step3)
	{
		return ($this->step3 = $_step3);
	}
	/**
	 * Get step3
	 * @return OvhTyperpsMigrationGetProgressStatusStepStruct
	 */
	public function getStep3()
	{
		return $this->step3;
	}
	/**
	 * Set step4
	 * @param rpsMigrationGetProgressStatusStepStruct step4
	 * @return rpsMigrationGetProgressStatusStepStruct
	 */
	public function setStep4($_step4)
	{
		return ($this->step4 = $_step4);
	}
	/**
	 * Get step4
	 * @return OvhTyperpsMigrationGetProgressStatusStepStruct
	 */
	public function getStep4()
	{
		return $this->step4;
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