<?php
/**
 * Class file for YMailTypeFlagMessages
 * @date 02/07/2012
 */
/**
 * Class YMailTypeFlagMessages
 * @date 02/07/2012
 */
class YMailTypeFlagMessages extends YMailWsdlClass
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
	 * The mid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $mid;
	/**
	 * The setFlags
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var YMailTypeSetFlag
	 */
	public $setFlags;
	/**
	 * The selection
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var YMailTypeFlag
	 */
	public $selection;
	/**
	 * Constructor
	 * @param string fid
	 * @param string mid
	 * @param YMailTypeSetFlag setFlags
	 * @param YMailTypeFlag selection
	 * @return YMailTypeFlagMessages
	 */
	public function __construct($_fid,$_mid = null,$_setFlags = null,$_selection = null)
	{
		parent::__construct(array('fid'=>$_fid,'mid'=>$_mid,'setFlags'=>$_setFlags,'selection'=>$_selection));
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
	 * Set setFlags
	 * @param SetFlag setFlags
	 * @return SetFlag
	 */
	public function setSetFlags($_setFlags)
	{
		return ($this->setFlags = $_setFlags);
	}
	/**
	 * Get setFlags
	 * @return YMailTypeSetFlag
	 */
	public function getSetFlags()
	{
		return $this->setFlags;
	}
	/**
	 * Set selection
	 * @param Flag selection
	 * @return Flag
	 */
	public function setSelection($_selection)
	{
		return ($this->selection = $_selection);
	}
	/**
	 * Get selection
	 * @return YMailTypeFlag
	 */
	public function getSelection()
	{
		return $this->selection;
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