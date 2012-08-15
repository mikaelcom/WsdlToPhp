<?php
/**
 * Class file for BioIDWSTypeIdentify
 * @date 15/08/2012
 */
/**
 * Class BioIDWSTypeIdentify
 * @date 15/08/2012
 */
class BioIDWSTypeIdentify extends BioIDWSWsdlClass
{
	/**
	 * The partitionId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BioIDWSTypeBiometricClassID
	 */
	public $partitionId;
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
	 * @var ClassificationFlags
	 */
	public $flags;
	/**
	 * The maxResults
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $maxResults;
	/**
	 * Constructor
	 * @param BioIDWSTypeBiometricClassID partitionId
	 * @param BioIDWSTypeArrayOfSample samples
	 * @param ClassificationFlags flags
	 * @param int maxResults
	 * @return BioIDWSTypeIdentify
	 */
	public function __construct($_partitionId = null,$_samples = null,$_flags = null,$_maxResults = null)
	{
		parent::__construct(array('partitionId'=>$_partitionId,'samples'=>new BioIDWSTypeArrayOfSample($_samples),'flags'=>$_flags,'maxResults'=>$_maxResults));
	}
	/**
	 * Set partitionId
	 * @param BiometricClassID partitionId
	 * @return BiometricClassID
	 */
	public function setPartitionId($_partitionId)
	{
		return ($this->partitionId = $_partitionId);
	}
	/**
	 * Get partitionId
	 * @return BioIDWSTypeBiometricClassID
	 */
	public function getPartitionId()
	{
		return $this->partitionId;
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
	 * @param ClassificationFlags flags
	 * @return ClassificationFlags
	 */
	public function setFlags($_flags)
	{
		return ($this->flags = $_flags);
	}
	/**
	 * Get flags
	 * @return ClassificationFlags
	 */
	public function getFlags()
	{
		return $this->flags;
	}
	/**
	 * Set maxResults
	 * @param int maxResults
	 * @return int
	 */
	public function setMaxResults($_maxResults)
	{
		return ($this->maxResults = $_maxResults);
	}
	/**
	 * Get maxResults
	 * @return int
	 */
	public function getMaxResults()
	{
		return $this->maxResults;
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