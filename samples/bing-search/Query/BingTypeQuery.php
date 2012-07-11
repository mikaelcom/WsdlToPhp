<?php
/**
 * Class file for BingTypeQuery
 * @date 02/07/2012
 */
/**
 * Class BingTypeQuery
 * @date 02/07/2012
 */
class BingTypeQuery extends BingWsdlClass
{
	/**
	 * The SearchTerms
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SearchTerms;
	/**
	 * The AlteredQuery
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AlteredQuery;
	/**
	 * The AlterationOverrideQuery
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AlterationOverrideQuery;
	/**
	 * Constructor
	 * @param string SearchTerms
	 * @param string AlteredQuery
	 * @param string AlterationOverrideQuery
	 * @return BingTypeQuery
	 */
	public function __construct($_SearchTerms = null,$_AlteredQuery = null,$_AlterationOverrideQuery = null)
	{
		parent::__construct(array('SearchTerms'=>$_SearchTerms,'AlteredQuery'=>$_AlteredQuery,'AlterationOverrideQuery'=>$_AlterationOverrideQuery));
	}
	/**
	 * Set SearchTerms
	 * @param string SearchTerms
	 * @return string
	 */
	public function setSearchTerms($_SearchTerms)
	{
		return ($this->SearchTerms = $_SearchTerms);
	}
	/**
	 * Get SearchTerms
	 * @return string
	 */
	public function getSearchTerms()
	{
		return $this->SearchTerms;
	}
	/**
	 * Set AlteredQuery
	 * @param string AlteredQuery
	 * @return string
	 */
	public function setAlteredQuery($_AlteredQuery)
	{
		return ($this->AlteredQuery = $_AlteredQuery);
	}
	/**
	 * Get AlteredQuery
	 * @return string
	 */
	public function getAlteredQuery()
	{
		return $this->AlteredQuery;
	}
	/**
	 * Set AlterationOverrideQuery
	 * @param string AlterationOverrideQuery
	 * @return string
	 */
	public function setAlterationOverrideQuery($_AlterationOverrideQuery)
	{
		return ($this->AlterationOverrideQuery = $_AlterationOverrideQuery);
	}
	/**
	 * Get AlterationOverrideQuery
	 * @return string
	 */
	public function getAlterationOverrideQuery()
	{
		return $this->AlterationOverrideQuery;
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