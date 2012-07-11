<?php
/**
 * Class file for XiFundDataTypePortfolioSeries
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypePortfolioSeries
 * @date 08/07/2012
 */
class XiFundDataTypePortfolioSeries extends XiFundDataWsdlClass
{
	/**
	 * The Number
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Number;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The LastFiling
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $LastFiling;
	/**
	 * Constructor
	 * @param string Number
	 * @param string Name
	 * @param boolean LastFiling
	 * @return XiFundDataTypePortfolioSeries
	 */
	public function __construct($_Number = null,$_Name = null,$_LastFiling)
	{
		parent::__construct(array('Number'=>$_Number,'Name'=>$_Name,'LastFiling'=>$_LastFiling));
	}
	/**
	 * Set Number
	 * @param string Number
	 * @return string
	 */
	public function setNumber($_Number)
	{
		return ($this->Number = $_Number);
	}
	/**
	 * Get Number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->Number;
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set LastFiling
	 * @param boolean LastFiling
	 * @return boolean
	 */
	public function setLastFiling($_LastFiling)
	{
		return ($this->LastFiling = $_LastFiling);
	}
	/**
	 * Get LastFiling
	 * @return boolean
	 */
	public function getLastFiling()
	{
		return $this->LastFiling;
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