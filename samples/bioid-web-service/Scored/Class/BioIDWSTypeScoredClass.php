<?php
/**
 * Class file for BioIDWSTypeScoredClass
 * @date 15/08/2012
 */
/**
 * Class BioIDWSTypeScoredClass
 * @date 15/08/2012
 */
class BioIDWSTypeScoredClass extends BioIDWSTypeBiometricClassID
{
	/**
	 * The Score
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var double
	 */
	public $Score;
	/**
	 * Constructor
	 * @param double Score
	 * @return BioIDWSTypeScoredClass
	 */
	public function __construct($_Score = null)
	{
		BioIDWSWsdlClass::__construct(array('Score'=>$_Score));
	}
	/**
	 * Set Score
	 * @param double Score
	 * @return double
	 */
	public function setScore($_Score)
	{
		return ($this->Score = $_Score);
	}
	/**
	 * Get Score
	 * @return double
	 */
	public function getScore()
	{
		return $this->Score;
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