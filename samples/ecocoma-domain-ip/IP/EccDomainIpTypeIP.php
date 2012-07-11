<?php
/**
 * Class file for EccDomainIpTypeIP
 * @date 03/07/2012
 */
/**
 * Class EccDomainIpTypeIP
 * @date 03/07/2012
 */
class EccDomainIpTypeIP extends EccDomainIpWsdlClass
{
	/**
	 * The Results
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccDomainIpTypeArrayOfResult
	 */
	public $Results;
	/**
	 * Constructor
	 * @param EccDomainIpTypeArrayOfResult Results
	 * @return EccDomainIpTypeIP
	 */
	public function __construct($_Results = null)
	{
		parent::__construct(array('Results'=>new EccDomainIpTypeArrayOfResult($_Results)));
	}
	/**
	 * Set Results
	 * @param ArrayOfResult Results
	 * @return ArrayOfResult
	 */
	public function setResults($_Results)
	{
		return ($this->Results = $_Results);
	}
	/**
	 * Get Results
	 * @return EccDomainIpTypeArrayOfResult
	 */
	public function getResults()
	{
		return $this->Results;
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