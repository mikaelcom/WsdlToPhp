<?php
/**
 * Class file for XiMetalsTypeGetHistoricalMetalFutureRange
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetHistoricalMetalFutureRange
 * @date 08/07/2012
 */
class XiMetalsTypeGetHistoricalMetalFutureRange extends XiMetalsWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeMetalFutureTypes
	 */
	public $Type;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * Constructor
	 * @param XiMetalsTypeMetalFutureTypes Type
	 * @param string StartDate
	 * @param string EndDate
	 * @return XiMetalsTypeGetHistoricalMetalFutureRange
	 */
	public function __construct($_Type,$_StartDate = null,$_EndDate = null)
	{
		parent::__construct(array('Type'=>$_Type,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate));
	}
	/**
	 * Set Type
	 * @param MetalFutureTypes Type
	 * @return MetalFutureTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiMetalsTypeMetalFutureTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiMetalsTypeMetalFutureTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
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