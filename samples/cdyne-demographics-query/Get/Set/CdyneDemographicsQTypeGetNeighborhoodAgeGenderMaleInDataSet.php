<?php
/**
 * Class file for CdyneDemographicsQTypeGetNeighborhoodAgeGenderMaleInDataSet
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeGetNeighborhoodAgeGenderMaleInDataSet
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeGetNeighborhoodAgeGenderMaleInDataSet extends CdyneDemographicsQWsdlClass
{
	/**
	 * The StateAbbrev
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StateAbbrev;
	/**
	 * The PlaceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PlaceID;
	/**
	 * Constructor
	 * @param string StateAbbrev
	 * @param string PlaceID
	 * @return CdyneDemographicsQTypeGetNeighborhoodAgeGenderMaleInDataSet
	 */
	public function __construct($_StateAbbrev = null,$_PlaceID = null)
	{
		parent::__construct(array('StateAbbrev'=>$_StateAbbrev,'PlaceID'=>$_PlaceID));
	}
	/**
	 * Set StateAbbrev
	 * @param string StateAbbrev
	 * @return string
	 */
	public function setStateAbbrev($_StateAbbrev)
	{
		return ($this->StateAbbrev = $_StateAbbrev);
	}
	/**
	 * Get StateAbbrev
	 * @return string
	 */
	public function getStateAbbrev()
	{
		return $this->StateAbbrev;
	}
	/**
	 * Set PlaceID
	 * @param string PlaceID
	 * @return string
	 */
	public function setPlaceID($_PlaceID)
	{
		return ($this->PlaceID = $_PlaceID);
	}
	/**
	 * Get PlaceID
	 * @return string
	 */
	public function getPlaceID()
	{
		return $this->PlaceID;
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