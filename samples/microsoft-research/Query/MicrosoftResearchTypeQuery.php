<?php
/**
 * Class file for MicrosoftResearchTypeQuery
 * @date 05/07/2012
 */
/**
 * Class MicrosoftResearchTypeQuery
 * @date 05/07/2012
 */
class MicrosoftResearchTypeQuery extends MicrosoftResearchWsdlClass
{
	/**
	 * The queryXml
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $queryXml;
	/**
	 * Constructor
	 * @param string queryXml
	 * @return MicrosoftResearchTypeQuery
	 */
	public function __construct($_queryXml = null)
	{
		parent::__construct(array('queryXml'=>$_queryXml));
	}
	/**
	 * Set queryXml
	 * @param string queryXml
	 * @return string
	 */
	public function setQueryXml($_queryXml)
	{
		return ($this->queryXml = $_queryXml);
	}
	/**
	 * Get queryXml
	 * @return string
	 */
	public function getQueryXml()
	{
		return $this->queryXml;
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