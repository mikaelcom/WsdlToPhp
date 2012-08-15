<?php
/**
 * Class file for BioIDWSTypeQualityCheck
 * @date 15/08/2012
 */
/**
 * Class BioIDWSTypeQualityCheck
 * @date 15/08/2012
 */
class BioIDWSTypeQualityCheck extends BioIDWSWsdlClass
{
	/**
	 * The samples
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BioIDWSTypeArrayOfSample
	 */
	public $samples;
	/**
	 * The flags
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var TestFlags
	 */
	public $flags;
	/**
	 * The issuer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $issuer;
	/**
	 * Constructor
	 * @param BioIDWSTypeArrayOfSample samples
	 * @param TestFlags flags
	 * @param string issuer
	 * @return BioIDWSTypeQualityCheck
	 */
	public function __construct($_samples = null,$_flags = null,$_issuer = null)
	{
		parent::__construct(array('samples'=>new BioIDWSTypeArrayOfSample($_samples),'flags'=>$_flags,'issuer'=>$_issuer));
	}
	/**
	 * Set samples
	 * @param ArrayOfSample samples
	 * @return ArrayOfSample
	 */
	public function setSamples($_samples)
	{
		return ($this->samples = $_samples);
	}
	/**
	 * Get samples
	 * @return BioIDWSTypeArrayOfSample
	 */
	public function getSamples()
	{
		return $this->samples;
	}
	/**
	 * Set flags
	 * @param TestFlags flags
	 * @return TestFlags
	 */
	public function setFlags($_flags)
	{
		return ($this->flags = $_flags);
	}
	/**
	 * Get flags
	 * @return TestFlags
	 */
	public function getFlags()
	{
		return $this->flags;
	}
	/**
	 * Set issuer
	 * @param string issuer
	 * @return string
	 */
	public function setIssuer($_issuer)
	{
		return ($this->issuer = $_issuer);
	}
	/**
	 * Get issuer
	 * @return string
	 */
	public function getIssuer()
	{
		return $this->issuer;
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