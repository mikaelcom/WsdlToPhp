<?php
/**
 * Class file for AmazonEc2TypeImportInstanceType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeImportInstanceType
 * @date 10/07/2012
 */
class AmazonEc2TypeImportInstanceType extends AmazonEc2WsdlClass
{
	/**
	 * The description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $description;
	/**
	 * The launchSpecification
	 * @var AmazonEc2TypeImportInstanceLaunchSpecificationType
	 */
	public $launchSpecification;
	/**
	 * The diskImageSet
	 * @var AmazonEc2TypeDiskImageSetType
	 */
	public $diskImageSet;
	/**
	 * The keepPartialImports
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $keepPartialImports;
	/**
	 * The platform
	 * @var string
	 */
	public $platform;
	/**
	 * Constructor
	 * @param string description
	 * @param AmazonEc2TypeImportInstanceLaunchSpecificationType launchSpecification
	 * @param AmazonEc2TypeDiskImageSetType diskImageSet
	 * @param boolean keepPartialImports
	 * @param string platform
	 * @return AmazonEc2TypeImportInstanceType
	 */
	public function __construct($_description = null,$_launchSpecification = null,$_diskImageSet = null,$_keepPartialImports = null,$_platform = null)
	{
		parent::__construct(array('description'=>$_description,'launchSpecification'=>$_launchSpecification,'diskImageSet'=>$_diskImageSet,'keepPartialImports'=>$_keepPartialImports,'platform'=>$_platform));
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set launchSpecification
	 * @param ImportInstanceLaunchSpecificationType launchSpecification
	 * @return ImportInstanceLaunchSpecificationType
	 */
	public function setLaunchSpecification($_launchSpecification)
	{
		return ($this->launchSpecification = $_launchSpecification);
	}
	/**
	 * Get launchSpecification
	 * @return AmazonEc2TypeImportInstanceLaunchSpecificationType
	 */
	public function getLaunchSpecification()
	{
		return $this->launchSpecification;
	}
	/**
	 * Set diskImageSet
	 * @param DiskImageSetType diskImageSet
	 * @return DiskImageSetType
	 */
	public function setDiskImageSet($_diskImageSet)
	{
		return ($this->diskImageSet = $_diskImageSet);
	}
	/**
	 * Get diskImageSet
	 * @return AmazonEc2TypeDiskImageSetType
	 */
	public function getDiskImageSet()
	{
		return $this->diskImageSet;
	}
	/**
	 * Set keepPartialImports
	 * @param boolean keepPartialImports
	 * @return boolean
	 */
	public function setKeepPartialImports($_keepPartialImports)
	{
		return ($this->keepPartialImports = $_keepPartialImports);
	}
	/**
	 * Get keepPartialImports
	 * @return boolean
	 */
	public function getKeepPartialImports()
	{
		return $this->keepPartialImports;
	}
	/**
	 * Set platform
	 * @param string platform
	 * @return string
	 */
	public function setPlatform($_platform)
	{
		return ($this->platform = $_platform);
	}
	/**
	 * Get platform
	 * @return string
	 */
	public function getPlatform()
	{
		return $this->platform;
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