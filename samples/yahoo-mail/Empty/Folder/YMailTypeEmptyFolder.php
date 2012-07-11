<?php
/**
 * Class file for YMailTypeEmptyFolder
 * @date 02/07/2012
 */
/**
 * Class YMailTypeEmptyFolder
 * @date 02/07/2012
 */
class YMailTypeEmptyFolder extends YMailWsdlClass
{
	/**
	 * The fid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- nillable : false
	 * @var string
	 */
	public $fid;
	/**
	 * Constructor
	 * @param string fid
	 * @return YMailTypeEmptyFolder
	 */
	public function __construct($_fid)
	{
		parent::__construct(array('fid'=>$_fid));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>