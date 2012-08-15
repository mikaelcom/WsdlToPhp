<?php
/**
 * Class file for BioIDWSTypeEnroll
 * @date 15/08/2012
 */
/**
 * Class BioIDWSTypeEnroll
 * @date 15/08/2012
 */
class BioIDWSTypeEnroll extends BioIDWSWsdlClass
{
	/**
	 * The classId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BioIDWSTypeBiometricClassID
	 */
	public $classId;
	/**
	 * The samples
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BioIDWSTypeArrayOfSample
	 */
	public $samples;
	/**
	 * The flags
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var EnrollmentFlags
	 */
	public $flags;
	/**
	 * Constructor
	 * @param BioIDWSTypeBiometricClassID classId
	 * @param BioIDWSTypeArrayOfSample samples
	 * @param EnrollmentFlags flags
	 * @return BioIDWSTypeEnroll
	 */
	public function __construct($_classId = null,$_samples = null,$_flags = null)
	{
		parent::__construct(array('classId'=>$_classId,'samples'=>new BioIDWSTypeArrayOfSample($_samples),'flags'=>$_flags));
	}
	/**
	 * Set classId
	 * @param BiometricClassID classId
	 * @return BiometricClassID
	 */
	public function setClassId($_classId)
	{
		return ($this->classId = $_classId);
	}
	/**
	 * Get classId
	 * @return BioIDWSTypeBiometricClassID
	 */
	public function getClassId()
	{
		return $this->classId;
	}
	/**
	 * Set samples
	 * @param ArrayOfSample samples
	 * @return ArrayOfSample
	 */
	public function setSamples($_samples)
	{
		return ($this->samples = $_samples);
	}
	/**
	 * Get samples
	 * @return BioIDWSTypeArrayOfSample
	 */
	public function getSamples()
	{
		return $this->samples;
	}
	/**
	 * Set flags
	 * @param EnrollmentFlags flags
	 * @return EnrollmentFlags
	 */
	public function setFlags($_flags)
	{
		return ($this->flags = $_flags);
	}
	/**
	 * Get flags
	 * @return EnrollmentFlags
	 */
	public function getFlags()
	{
		return $this->flags;
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