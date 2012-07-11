<?php
/**
 * Class file for CdyneDemographicsQTypeGenderPercentagesCls
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeGenderPercentagesCls
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeGenderPercentagesCls extends CdyneDemographicsQWsdlClass
{
	/**
	 * The Female
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $Female;
	/**
	 * The Male
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $Male;
	/**
	 * Constructor
	 * @param decimal Female
	 * @param decimal Male
	 * @return CdyneDemographicsQTypeGenderPercentagesCls
	 */
	public function __construct($_Female,$_Male)
	{
		parent::__construct(array('Female'=>$_Female,'Male'=>$_Male));
	}
	/**
	 * Set Female
	 * @param decimal Female
	 * @return decimal
	 */
	public function setFemale($_Female)
	{
		return ($this->Female = $_Female);
	}
	/**
	 * Get Female
	 * @return decimal
	 */
	public function getFemale()
	{
		return $this->Female;
	}
	/**
	 * Set Male
	 * @param decimal Male
	 * @return decimal
	 */
	public function setMale($_Male)
	{
		return ($this->Male = $_Male);
	}
	/**
	 * Get Male
	 * @return decimal
	 */
	public function getMale()
	{
		return $this->Male;
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