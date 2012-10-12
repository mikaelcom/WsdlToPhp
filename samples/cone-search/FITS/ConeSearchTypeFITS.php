<?php
/**
 * Class file for ConeSearchTypeFITS
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeFITS
 * @date 13/10/2012
 */
class ConeSearchTypeFITS extends ConeSearchWsdlClass
{
	/**
	 * The STREAM
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypeSTREAM
	 */
	public $STREAM;
	/**
	 * The extnum
	 * @var positiveInteger
	 */
	public $extnum;
	/**
	 * Constructor
	 * @param ConeSearchTypeSTREAM STREAM
	 * @param positiveInteger extnum
	 * @return ConeSearchTypeFITS
	 */
	public function __construct($_STREAM = null,$_extnum = null)
	{
		parent::__construct(array('STREAM'=>$_STREAM,'extnum'=>$_extnum));
	}
	/**
	 * Set STREAM
	 * @param STREAM STREAM
	 * @return STREAM
	 */
	public function setSTREAM($_STREAM)
	{
		return ($this->STREAM = $_STREAM);
	}
	/**
	 * Get STREAM
	 * @return ConeSearchTypeSTREAM
	 */
	public function getSTREAM()
	{
		return $this->STREAM;
	}
	/**
	 * Set extnum
	 * @param positiveInteger extnum
	 * @return positiveInteger
	 */
	public function setExtnum($_extnum)
	{
		return ($this->extnum = $_extnum);
	}
	/**
	 * Get extnum
	 * @return positiveInteger
	 */
	public function getExtnum()
	{
		return $this->extnum;
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