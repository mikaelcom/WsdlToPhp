<?php
/**
 * Class file for BingTypeMobileWebRequest
 * @date 02/07/2012
 */
/**
 * Class BingTypeMobileWebRequest
 * @date 02/07/2012
 */
class BingTypeMobileWebRequest extends BingWsdlClass
{
	/**
	 * The Offset
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $Offset;
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $Count;
	/**
	 * The Options
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeArrayOfMobileWebSearchOption
	 */
	public $Options;
	/**
	 * Constructor
	 * @param unsignedInt Offset
	 * @param unsignedInt Count
	 * @param BingTypeArrayOfMobileWebSearchOption Options
	 * @return BingTypeMobileWebRequest
	 */
	public function __construct($_Offset = null,$_Count = null,$_Options = null)
	{
		parent::__construct(array('Offset'=>$_Offset,'Count'=>$_Count,'Options'=>new BingTypeArrayOfMobileWebSearchOption($_Options)));
	}
	/**
	 * Set Offset
	 * @param unsignedInt Offset
	 * @return unsignedInt
	 */
	public function setOffset($_Offset)
	{
		return ($this->Offset = $_Offset);
	}
	/**
	 * Get Offset
	 * @return unsignedInt
	 */
	public function getOffset()
	{
		return $this->Offset;
	}
	/**
	 * Set Count
	 * @param unsignedInt Count
	 * @return unsignedInt
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return unsignedInt
	 */
	public function getCount()
	{
		return $this->Count;
	}
	/**
	 * Set Options
	 * @param ArrayOfMobileWebSearchOption Options
	 * @return ArrayOfMobileWebSearchOption
	 */
	public function setOptions($_Options)
	{
		return ($this->Options = $_Options);
	}
	/**
	 * Get Options
	 * @return BingTypeArrayOfMobileWebSearchOption
	 */
	public function getOptions()
	{
		return $this->Options;
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