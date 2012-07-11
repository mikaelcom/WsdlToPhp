<?php
/**
 * Class file for XiIndicesTypeListIndicesBySector
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeListIndicesBySector
 * @date 08/07/2012
 */
class XiIndicesTypeListIndicesBySector extends XiIndicesWsdlClass
{
	/**
	 * The Sector
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Sector;
	/**
	 * Constructor
	 * @param string Sector
	 * @return XiIndicesTypeListIndicesBySector
	 */
	public function __construct($_Sector = null)
	{
		parent::__construct(array('Sector'=>$_Sector));
	}
	/**
	 * Set Sector
	 * @param string Sector
	 * @return string
	 */
	public function setSector($_Sector)
	{
		return ($this->Sector = $_Sector);
	}
	/**
	 * Get Sector
	 * @return string
	 */
	public function getSector()
	{
		return $this->Sector;
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