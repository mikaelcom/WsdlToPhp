<?php
/**
 * Class file for XiOFACTypeSearchVesselResponse
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeSearchVesselResponse
 * @date 08/07/2012
 */
class XiOFACTypeSearchVesselResponse extends XiOFACWsdlClass
{
	/**
	 * The SearchVesselResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiOFACTypeSearchResults
	 */
	public $SearchVesselResult;
	/**
	 * Constructor
	 * @param XiOFACTypeSearchResults SearchVesselResult
	 * @return XiOFACTypeSearchVesselResponse
	 */
	public function __construct($_SearchVesselResult = null)
	{
		parent::__construct(array('SearchVesselResult'=>$_SearchVesselResult));
	}
	/**
	 * Set SearchVesselResult
	 * @param SearchResults SearchVesselResult
	 * @return SearchResults
	 */
	public function setSearchVesselResult($_SearchVesselResult)
	{
		return ($this->SearchVesselResult = $_SearchVesselResult);
	}
	/**
	 * Get SearchVesselResult
	 * @return XiOFACTypeSearchResults
	 */
	public function getSearchVesselResult()
	{
		return $this->SearchVesselResult;
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