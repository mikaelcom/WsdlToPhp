<?php
/**
 * Class file for XiGlobalmasterTypeListSectorsResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeListSectorsResponse
 * @date 08/07/2012
 */
class XiGlobalmasterTypeListSectorsResponse extends XiGlobalmasterWsdlClass
{
	/**
	 * The ListSectorsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypePossibleValues
	 */
	public $ListSectorsResult;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypePossibleValues ListSectorsResult
	 * @return XiGlobalmasterTypeListSectorsResponse
	 */
	public function __construct($_ListSectorsResult = null)
	{
		parent::__construct(array('ListSectorsResult'=>$_ListSectorsResult));
	}
	/**
	 * Set ListSectorsResult
	 * @param PossibleValues ListSectorsResult
	 * @return PossibleValues
	 */
	public function setListSectorsResult($_ListSectorsResult)
	{
		return ($this->ListSectorsResult = $_ListSectorsResult);
	}
	/**
	 * Get ListSectorsResult
	 * @return XiGlobalmasterTypePossibleValues
	 */
	public function getListSectorsResult()
	{
		return $this->ListSectorsResult;
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