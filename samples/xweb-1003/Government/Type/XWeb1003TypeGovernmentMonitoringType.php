<?php
/**
 * Class file for XWeb1003TypeGovernmentMonitoringType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeGovernmentMonitoringType
 * @date 09/07/2012
 */
class XWeb1003TypeGovernmentMonitoringType extends XWeb1003WsdlClass
{
	/**
	 * The Race
	 * @var Race
	 */
	public $Race;
	/**
	 * The Sex
	 * @var Sex
	 */
	public $Sex;
	/**
	 * Constructor
	 * @param Race Race
	 * @param Sex Sex
	 * @return XWeb1003TypeGovernmentMonitoringType
	 */
	public function __construct($_Race = null,$_Sex = null)
	{
		parent::__construct(array('Race'=>$_Race,'Sex'=>$_Sex));
	}
	/**
	 * Set Race
	 * @param Race Race
	 * @return Race
	 */
	public function setRace($_Race)
	{
		return ($this->Race = $_Race);
	}
	/**
	 * Get Race
	 * @return Race
	 */
	public function getRace()
	{
		return $this->Race;
	}
	/**
	 * Set Sex
	 * @param Sex Sex
	 * @return Sex
	 */
	public function setSex($_Sex)
	{
		return ($this->Sex = $_Sex);
	}
	/**
	 * Get Sex
	 * @return Sex
	 */
	public function getSex()
	{
		return $this->Sex;
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