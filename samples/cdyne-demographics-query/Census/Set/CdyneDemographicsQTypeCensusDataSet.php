<?php
/**
 * Class file for CdyneDemographicsQTypeCensusDataSet
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeCensusDataSet
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeCensusDataSet extends CdyneDemographicsQWsdlClass
{
	/**
	 * The schema
	 * @var DOMDocument
	 */
	public $schema;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param DOMDocument schema
	 * @param DOMDocument any
	 * @return CdyneDemographicsQTypeCensusDataSet
	 */
	public function __construct($_schema = null,$_any = null)
	{
		parent::__construct(array('schema'=>$_schema,'any'=>$_any));
	}
	/**
	 * Set schema
	 * @param DOMDocument schema
	 * @return DOMDocument
	 */
	public function setSchema($_schema)
	{
		return ($this->schema = $_schema);
	}
	/**
	 * Get schema
	 * @return DOMDocument
	 */
	public function getSchema()
	{
		if(!($this->schema instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->schema);
			$this->setSchema($dom);
		}
		return $this->schema;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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