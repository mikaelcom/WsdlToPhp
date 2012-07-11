<?php
/**
 * Class file for SOGeoCensusTypeCensus
 * @date 06/07/2012
 */
/**
 * Class SOGeoCensusTypeCensus
 * @date 06/07/2012
 */
class SOGeoCensusTypeCensus extends SOGeoCensusWsdlClass
{
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCensusTypeErr
	 */
	public $Error;
	/**
	 * The CensusElements
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var SOGeoCensusTypeCensusElements
	 */
	public $CensusElements;
	/**
	 * Constructor
	 * @param SOGeoCensusTypeErr Error
	 * @param SOGeoCensusTypeCensusElements CensusElements
	 * @return SOGeoCensusTypeCensus
	 */
	public function __construct($_Error = null,$_CensusElements = null)
	{
		parent::__construct(array('Error'=>$_Error,'CensusElements'=>$_CensusElements));
	}
	/**
	 * Set Error
	 * @param Err Error
	 * @return Err
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOGeoCensusTypeErr
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Set CensusElements
	 * @param CensusElements CensusElements
	 * @return CensusElements
	 */
	public function setCensusElements($_CensusElements)
	{
		return ($this->CensusElements = $_CensusElements);
	}
	/**
	 * Get CensusElements
	 * @return SOGeoCensusTypeCensusElements
	 */
	public function getCensusElements()
	{
		return $this->CensusElements;
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