<?php
/**
 * Class file for UsgsGazettteerTypeSearchName
 * @date 08/07/2012
 */
/**
 * Class UsgsGazettteerTypeSearchName
 * @date 08/07/2012
 */
class UsgsGazettteerTypeSearchName extends UsgsGazettteerWsdlClass
{
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
	 * @param string PlaceName
	 * @param string PlaceType
	 * @param string inNumRecords
	 * @param string inFirstRecord
	 * @return UsgsGazettteerTypeSearchName
	 */
	public function __construct($_PlaceName = null,$_PlaceType = null,$_inNumRecords = null,$_inFirstRecord = null)
	{
		parent::__construct(array('PlaceName'=>$_PlaceName,'PlaceType'=>$_PlaceType,'inNumRecords'=>$_inNumRecords,'inFirstRecord'=>$_inFirstRecord));
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