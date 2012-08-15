<?php
/**
 * Class file for BioIDWSTypeDeleteClass
 * @date 15/08/2012
 */
/**
 * Class BioIDWSTypeDeleteClass
 * @date 15/08/2012
 */
class BioIDWSTypeDeleteClass extends BioIDWSWsdlClass
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
	 * Constructor
	 * @param BioIDWSTypeBiometricClassID classId
	 * @return BioIDWSTypeDeleteClass
	 */
	public function __construct($_classId = null)
	{
		parent::__construct(array('classId'=>$_classId));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>