<?php
/**
 * Class file for CdyneDemographicsQTypeGetNeighborhoodLinguisticIsolation
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeGetNeighborhoodLinguisticIsolation
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeGetNeighborhoodLinguisticIsolation extends CdyneDemographicsQWsdlClass
{
	/**
	 * The StateAbbr
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StateAbbr;
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
	 * @param string StateAbbr
	 * @param string PlaceID
	 * @return CdyneDemographicsQTypeGetNeighborhoodLinguisticIsolation
	 */
	public function __construct($_StateAbbr = null,$_PlaceID = null)
	{
		parent::__construct(array('StateAbbr'=>$_StateAbbr,'PlaceID'=>$_PlaceID));
	}
	/**
	 * Set StateAbbr
	 * @param string StateAbbr
	 * @return string
	 */
	public function setStateAbbr($_StateAbbr)
	{
		return ($this->StateAbbr = $_StateAbbr);
	}
	/**
	 * Get StateAbbr
	 * @return string
	 */
	public function getStateAbbr()
	{
		return $this->StateAbbr;
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