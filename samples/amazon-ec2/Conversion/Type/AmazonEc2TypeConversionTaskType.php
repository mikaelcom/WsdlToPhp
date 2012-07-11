<?php
/**
 * Class file for AmazonEc2TypeConversionTaskType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeConversionTaskType
 * @date 10/07/2012
 */
class AmazonEc2TypeConversionTaskType extends AmazonEc2WsdlClass
{
	/**
	 * The conversionTaskId
	 * @var string
	 */
	public $conversionTaskId;
	/**
	 * The expirationTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $expirationTime;
	/**
	 * The importVolume
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeImportVolumeTaskDetailsType
	 */
	public $importVolume;
	/**
	 * The importInstance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeImportInstanceTaskDetailsType
	 */
	public $importInstance;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * The statusMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $statusMessage;
	/**
	 * The tagSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeResourceTagSetType
	 */
	public $tagSet;
	/**
	 * Constructor
	 * @param string conversionTaskId
	 * @param string expirationTime
	 * @param AmazonEc2TypeImportVolumeTaskDetailsType importVolume
	 * @param AmazonEc2TypeImportInstanceTaskDetailsType importInstance
	 * @param string state
	 * @param string statusMessage
	 * @param AmazonEc2TypeResourceTagSetType tagSet
	 * @return AmazonEc2TypeConversionTaskType
	 */
	public function __construct($_conversionTaskId = null,$_expirationTime = null,$_importVolume = null,$_importInstance = null,$_state = null,$_statusMessage = null,$_tagSet = null)
	{
		parent::__construct(array('conversionTaskId'=>$_conversionTaskId,'expirationTime'=>$_expirationTime,'importVolume'=>$_importVolume,'importInstance'=>$_importInstance,'state'=>$_state,'statusMessage'=>$_statusMessage,'tagSet'=>$_tagSet));
	}
	/**
	 * Set conversionTaskId
	 * @param string conversionTaskId
	 * @return string
	 */
	public function setConversionTaskId($_conversionTaskId)
	{
		return ($this->conversionTaskId = $_conversionTaskId);
	}
	/**
	 * Get conversionTaskId
	 * @return string
	 */
	public function getConversionTaskId()
	{
		return $this->conversionTaskId;
	}
	/**
	 * Set expirationTime
	 * @param string expirationTime
	 * @return string
	 */
	public function setExpirationTime($_expirationTime)
	{
		return ($this->expirationTime = $_expirationTime);
	}
	/**
	 * Get expirationTime
	 * @return string
	 */
	public function getExpirationTime()
	{
		return $this->expirationTime;
	}
	/**
	 * Set importVolume
	 * @param ImportVolumeTaskDetailsType importVolume
	 * @return ImportVolumeTaskDetailsType
	 */
	public function setImportVolume($_importVolume)
	{
		return ($this->importVolume = $_importVolume);
	}
	/**
	 * Get importVolume
	 * @return AmazonEc2TypeImportVolumeTaskDetailsType
	 */
	public function getImportVolume()
	{
		return $this->importVolume;
	}
	/**
	 * Set importInstance
	 * @param ImportInstanceTaskDetailsType importInstance
	 * @return ImportInstanceTaskDetailsType
	 */
	public function setImportInstance($_importInstance)
	{
		return ($this->importInstance = $_importInstance);
	}
	/**
	 * Get importInstance
	 * @return AmazonEc2TypeImportInstanceTaskDetailsType
	 */
	public function getImportInstance()
	{
		return $this->importInstance;
	}
	/**
	 * Set state
	 * @param string state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Get state
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
	}
	/**
	 * Set statusMessage
	 * @param string statusMessage
	 * @return string
	 */
	public function setStatusMessage($_statusMessage)
	{
		return ($this->statusMessage = $_statusMessage);
	}
	/**
	 * Get statusMessage
	 * @return string
	 */
	public function getStatusMessage()
	{
		return $this->statusMessage;
	}
	/**
	 * Set tagSet
	 * @param ResourceTagSetType tagSet
	 * @return ResourceTagSetType
	 */
	public function setTagSet($_tagSet)
	{
		return ($this->tagSet = $_tagSet);
	}
	/**
	 * Get tagSet
	 * @return AmazonEc2TypeResourceTagSetType
	 */
	public function getTagSet()
	{
		return $this->tagSet;
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