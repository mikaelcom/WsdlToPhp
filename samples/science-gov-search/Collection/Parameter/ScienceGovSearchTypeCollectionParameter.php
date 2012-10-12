<?php
/**
 * Class file for ScienceGovSearchTypeCollectionParameter
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeCollectionParameter
 * @date 13/10/2012
 */
class ScienceGovSearchTypeCollectionParameter extends ScienceGovSearchWsdlClass
{
	/**
	 * The parameters
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 1
	 * @var ScienceGovSearchTypeStringStringEntry
	 */
	public $parameters;
	/**
	 * The collectionCode
	 * @var string
	 */
	public $collectionCode;
	/**
	 * Constructor
	 * @param ScienceGovSearchTypeStringStringEntry parameters
	 * @param string collectionCode
	 * @return ScienceGovSearchTypeCollectionParameter
	 */
	public function __construct($_parameters,$_collectionCode = null)
	{
		parent::__construct(array('parameters'=>$_parameters,'collectionCode'=>$_collectionCode));
	}
	/**
	 * Set parameters
	 * @param StringStringEntry parameters
	 * @return StringStringEntry
	 */
	public function setParameters($_parameters)
	{
		return ($this->parameters = $_parameters);
	}
	/**
	 * Get parameters
	 * @return ScienceGovSearchTypeStringStringEntry
	 */
	public function getParameters()
	{
		return $this->parameters;
	}
	/**
	 * Set collectionCode
	 * @param string collectionCode
	 * @return string
	 */
	public function setCollectionCode($_collectionCode)
	{
		return ($this->collectionCode = $_collectionCode);
	}
	/**
	 * Get collectionCode
	 * @return string
	 */
	public function getCollectionCode()
	{
		return $this->collectionCode;
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