<?php
/**
 * Class file for XiIndicesTypeListIndicesByFamily
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeListIndicesByFamily
 * @date 08/07/2012
 */
class XiIndicesTypeListIndicesByFamily extends XiIndicesWsdlClass
{
	/**
	 * The Family
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Family;
	/**
	 * Constructor
	 * @param string Family
	 * @return XiIndicesTypeListIndicesByFamily
	 */
	public function __construct($_Family = null)
	{
		parent::__construct(array('Family'=>$_Family));
	}
	/**
	 * Set Family
	 * @param string Family
	 * @return string
	 */
	public function setFamily($_Family)
	{
		return ($this->Family = $_Family);
	}
	/**
	 * Get Family
	 * @return string
	 */
	public function getFamily()
	{
		return $this->Family;
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