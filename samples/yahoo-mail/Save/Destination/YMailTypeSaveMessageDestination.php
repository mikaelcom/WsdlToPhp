<?php
/**
 * Class file for YMailTypeSaveMessageDestination
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSaveMessageDestination
 * @date 02/07/2012
 */
class YMailTypeSaveMessageDestination extends YMailWsdlClass
{
	/**
	 * The fid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $fid;
	/**
	 * The mid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var string
	 */
	public $mid;
	/**
	 * Constructor
	 * @param string fid
	 * @param string mid
	 * @return YMailTypeSaveMessageDestination
	 */
	public function __construct($_fid,$_mid = null)
	{
		parent::__construct(array('fid'=>$_fid,'mid'=>$_mid));
	}
	/**
	 * Set fid
	 * @param string fid
	 * @return string
	 */
	public function setFid($_fid)
	{
		return ($this->fid = $_fid);
	}
	/**
	 * Get fid
	 * @return string
	 */
	public function getFid()
	{
		return $this->fid;
	}
	/**
	 * Set mid
	 * @param string mid
	 * @return string
	 */
	public function setMid($_mid)
	{
		return ($this->mid = $_mid);
	}
	/**
	 * Get mid
	 * @return string
	 */
	public function getMid()
	{
		return $this->mid;
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