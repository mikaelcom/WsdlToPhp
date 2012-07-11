<?php
/**
 * Class file for YMailTypeMoveMessages
 * @date 02/07/2012
 */
/**
 * Class YMailTypeMoveMessages
 * @date 02/07/2012
 */
class YMailTypeMoveMessages extends YMailWsdlClass
{
	/**
	 * The sourceFid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- nillable : false
	 * @var string
	 */
	public $sourceFid;
	/**
	 * The destinationFid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- nillable : false
	 * @var string
	 */
	public $destinationFid;
	/**
	 * The mid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $mid;
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
	 * @param string sourceFid
	 * @param string destinationFid
	 * @param string mid
	 * @param YMailTypeFlag selection
	 * @return YMailTypeMoveMessages
	 */
	public function __construct($_sourceFid,$_destinationFid,$_mid = null,$_selection = null)
	{
		parent::__construct(array('sourceFid'=>$_sourceFid,'destinationFid'=>$_destinationFid,'mid'=>$_mid,'selection'=>$_selection));
	}
	/**
	 * Set sourceFid
	 * @param string sourceFid
	 * @return string
	 */
	public function setSourceFid($_sourceFid)
	{
		return ($this->sourceFid = $_sourceFid);
	}
	/**
	 * Get sourceFid
	 * @return string
	 */
	public function getSourceFid()
	{
		return $this->sourceFid;
	}
	/**
	 * Set destinationFid
	 * @param string destinationFid
	 * @return string
	 */
	public function setDestinationFid($_destinationFid)
	{
		return ($this->destinationFid = $_destinationFid);
	}
	/**
	 * Get destinationFid
	 * @return string
	 */
	public function getDestinationFid()
	{
		return $this->destinationFid;
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