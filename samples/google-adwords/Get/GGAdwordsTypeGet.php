<?php
/**
 * Class file for GGAdwordsTypeGet
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeGet
 * Documentation : Returns the list of campaigns that meet the selector criteria. @param serviceSelector the selector specifying the {@link Campaign}s to return. @return A list of campaigns. @throws ApiException if problems occurred while fetching campaign information.
 * @date 03/07/2012
 */
class GGAdwordsTypeGet extends GGAdwordsWsdlClass
{
	/**
	 * The serviceSelector
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 * @var GGAdwordsTypeSelector
	 */
	public $serviceSelector;
	/**
	 * Constructor
	 * @param GGAdwordsTypeSelector serviceSelector
	 * @return GGAdwordsTypeGet
	 */
	public function __construct($_serviceSelector = null)
	{
		parent::__construct(array('serviceSelector'=>$_serviceSelector));
	}
	/**
	 * Set serviceSelector
	 * @param Selector serviceSelector
	 * @return Selector
	 */
	public function setServiceSelector($_serviceSelector)
	{
		return ($this->serviceSelector = $_serviceSelector);
	}
	/**
	 * Get serviceSelector
	 * @return GGAdwordsTypeSelector
	 */
	public function getServiceSelector()
	{
		return $this->serviceSelector;
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