<?php
/**
 * Class file for UsgsGazettteerTypeShowGazetteerData
 * @date 08/07/2012
 */
/**
 * Class UsgsGazettteerTypeShowGazetteerData
 * @date 08/07/2012
 */
class UsgsGazettteerTypeShowGazetteerData extends UsgsGazettteerWsdlClass
{
	/**
	 * The X_Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $X_Value;
	/**
	 * The Y_Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Y_Value;
	/**
	 * The PlaceType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PlaceType;
	/**
	 * The inNumRecords
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $inNumRecords;
	/**
	 * The inFirstRecord
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $inFirstRecord;
	/**
	 * Constructor
	 * @param string X_Value
	 * @param string Y_Value
	 * @param string PlaceType
	 * @param string inNumRecords
	 * @param string inFirstRecord
	 * @return UsgsGazettteerTypeShowGazetteerData
	 */
	public function __construct($_X_Value = null,$_Y_Value = null,$_PlaceType = null,$_inNumRecords = null,$_inFirstRecord = null)
	{
		parent::__construct(array('X_Value'=>$_X_Value,'Y_Value'=>$_Y_Value,'PlaceType'=>$_PlaceType,'inNumRecords'=>$_inNumRecords,'inFirstRecord'=>$_inFirstRecord));
	}
	/**
	 * Set X_Value
	 * @param string X_Value
	 * @return string
	 */
	public function setX_Value($_X_Value)
	{
		return ($this->X_Value = $_X_Value);
	}
	/**
	 * Get X_Value
	 * @return string
	 */
	public function getX_Value()
	{
		return $this->X_Value;
	}
	/**
	 * Set Y_Value
	 * @param string Y_Value
	 * @return string
	 */
	public function setY_Value($_Y_Value)
	{
		return ($this->Y_Value = $_Y_Value);
	}
	/**
	 * Get Y_Value
	 * @return string
	 */
	public function getY_Value()
	{
		return $this->Y_Value;
	}
	/**
	 * Set PlaceType
	 * @param string PlaceType
	 * @return string
	 */
	public function setPlaceType($_PlaceType)
	{
		return ($this->PlaceType = $_PlaceType);
	}
	/**
	 * Get PlaceType
	 * @return string
	 */
	public function getPlaceType()
	{
		return $this->PlaceType;
	}
	/**
	 * Set inNumRecords
	 * @param string inNumRecords
	 * @return string
	 */
	public function setInNumRecords($_inNumRecords)
	{
		return ($this->inNumRecords = $_inNumRecords);
	}
	/**
	 * Get inNumRecords
	 * @return string
	 */
	public function getInNumRecords()
	{
		return $this->inNumRecords;
	}
	/**
	 * Set inFirstRecord
	 * @param string inFirstRecord
	 * @return string
	 */
	public function setInFirstRecord($_inFirstRecord)
	{
		return ($this->inFirstRecord = $_inFirstRecord);
	}
	/**
	 * Get inFirstRecord
	 * @return string
	 */
	public function getInFirstRecord()
	{
		return $this->inFirstRecord;
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