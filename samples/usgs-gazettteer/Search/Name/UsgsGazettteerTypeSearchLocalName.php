<?php
/**
 * Class file for UsgsGazettteerTypeSearchLocalName
 * @date 08/07/2012
 */
/**
 * Class UsgsGazettteerTypeSearchLocalName
 * @date 08/07/2012
 */
class UsgsGazettteerTypeSearchLocalName extends UsgsGazettteerWsdlClass
{
	/**
	 * The Min_X_Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Min_X_Value;
	/**
	 * The Min_Y_Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Min_Y_Value;
	/**
	 * The Max_X_Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Max_X_Value;
	/**
	 * The Max_Y_Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Max_Y_Value;
	/**
	 * The PlaceName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PlaceName;
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
	 * @param string Min_X_Value
	 * @param string Min_Y_Value
	 * @param string Max_X_Value
	 * @param string Max_Y_Value
	 * @param string PlaceName
	 * @param string PlaceType
	 * @param string inNumRecords
	 * @param string inFirstRecord
	 * @return UsgsGazettteerTypeSearchLocalName
	 */
	public function __construct($_Min_X_Value = null,$_Min_Y_Value = null,$_Max_X_Value = null,$_Max_Y_Value = null,$_PlaceName = null,$_PlaceType = null,$_inNumRecords = null,$_inFirstRecord = null)
	{
		parent::__construct(array('Min_X_Value'=>$_Min_X_Value,'Min_Y_Value'=>$_Min_Y_Value,'Max_X_Value'=>$_Max_X_Value,'Max_Y_Value'=>$_Max_Y_Value,'PlaceName'=>$_PlaceName,'PlaceType'=>$_PlaceType,'inNumRecords'=>$_inNumRecords,'inFirstRecord'=>$_inFirstRecord));
	}
	/**
	 * Set Min_X_Value
	 * @param string Min_X_Value
	 * @return string
	 */
	public function setMin_X_Value($_Min_X_Value)
	{
		return ($this->Min_X_Value = $_Min_X_Value);
	}
	/**
	 * Get Min_X_Value
	 * @return string
	 */
	public function getMin_X_Value()
	{
		return $this->Min_X_Value;
	}
	/**
	 * Set Min_Y_Value
	 * @param string Min_Y_Value
	 * @return string
	 */
	public function setMin_Y_Value($_Min_Y_Value)
	{
		return ($this->Min_Y_Value = $_Min_Y_Value);
	}
	/**
	 * Get Min_Y_Value
	 * @return string
	 */
	public function getMin_Y_Value()
	{
		return $this->Min_Y_Value;
	}
	/**
	 * Set Max_X_Value
	 * @param string Max_X_Value
	 * @return string
	 */
	public function setMax_X_Value($_Max_X_Value)
	{
		return ($this->Max_X_Value = $_Max_X_Value);
	}
	/**
	 * Get Max_X_Value
	 * @return string
	 */
	public function getMax_X_Value()
	{
		return $this->Max_X_Value;
	}
	/**
	 * Set Max_Y_Value
	 * @param string Max_Y_Value
	 * @return string
	 */
	public function setMax_Y_Value($_Max_Y_Value)
	{
		return ($this->Max_Y_Value = $_Max_Y_Value);
	}
	/**
	 * Get Max_Y_Value
	 * @return string
	 */
	public function getMax_Y_Value()
	{
		return $this->Max_Y_Value;
	}
	/**
	 * Set PlaceName
	 * @param string PlaceName
	 * @return string
	 */
	public function setPlaceName($_PlaceName)
	{
		return ($this->PlaceName = $_PlaceName);
	}
	/**
	 * Get PlaceName
	 * @return string
	 */
	public function getPlaceName()
	{
		return $this->PlaceName;
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