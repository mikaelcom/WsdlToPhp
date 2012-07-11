<?php
/**
 * Class file for XiFundamentalsTypeListSectorsAndIndustriesResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeListSectorsAndIndustriesResponse
 * @date 08/07/2012
 */
class XiFundamentalsTypeListSectorsAndIndustriesResponse extends XiFundamentalsWsdlClass
{
	/**
	 * The ListSectorsAndIndustriesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeArrayOfSector
	 */
	public $ListSectorsAndIndustriesResult;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeArrayOfSector ListSectorsAndIndustriesResult
	 * @return XiFundamentalsTypeListSectorsAndIndustriesResponse
	 */
	public function __construct($_ListSectorsAndIndustriesResult = null)
	{
		parent::__construct(array('ListSectorsAndIndustriesResult'=>new XiFundamentalsTypeArrayOfSector($_ListSectorsAndIndustriesResult)));
	}
	/**
	 * Set ListSectorsAndIndustriesResult
	 * @param ArrayOfSector ListSectorsAndIndustriesResult
	 * @return ArrayOfSector
	 */
	public function setListSectorsAndIndustriesResult($_ListSectorsAndIndustriesResult)
	{
		return ($this->ListSectorsAndIndustriesResult = $_ListSectorsAndIndustriesResult);
	}
	/**
	 * Get ListSectorsAndIndustriesResult
	 * @return XiFundamentalsTypeArrayOfSector
	 */
	public function getListSectorsAndIndustriesResult()
	{
		return $this->ListSectorsAndIndustriesResult;
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