<?php
/**
 * Class file for YMailTypeListMessagesFromIds
 * @date 02/07/2012
 */
/**
 * Class YMailTypeListMessagesFromIds
 * @date 02/07/2012
 */
class YMailTypeListMessagesFromIds extends YMailWsdlClass
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
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $mid;
	/**
	 * The charsetHint
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var string
	 */
	public $charsetHint;
	/**
	 * Constructor
	 * @param string fid
	 * @param string mid
	 * @param string charsetHint
	 * @return YMailTypeListMessagesFromIds
	 */
	public function __construct($_fid,$_mid,$_charsetHint = null)
	{
		parent::__construct(array('fid'=>$_fid,'mid'=>$_mid,'charsetHint'=>$_charsetHint));
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
	 * Set charsetHint
	 * @param string charsetHint
	 * @return string
	 */
	public function setCharsetHint($_charsetHint)
	{
		return ($this->charsetHint = $_charsetHint);
	}
	/**
	 * Get charsetHint
	 * @return string
	 */
	public function getCharsetHint()
	{
		return $this->charsetHint;
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