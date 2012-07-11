<?php
/**
 * Class file for XiTranscriptsTypeGetLatestTranscripts
 * @date 08/07/2012
 */
/**
 * Class XiTranscriptsTypeGetLatestTranscripts
 * @date 08/07/2012
 */
class XiTranscriptsTypeGetLatestTranscripts extends XiTranscriptsWsdlClass
{
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Count;
	/**
	 * Constructor
	 * @param int Count
	 * @return XiTranscriptsTypeGetLatestTranscripts
	 */
	public function __construct($_Count)
	{
		parent::__construct(array('Count'=>$_Count));
	}
	/**
	 * Set Count
	 * @param int Count
	 * @return int
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return int
	 */
	public function getCount()
	{
		return $this->Count;
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