<?php
/**
 * Class file for QuakemlTypeEvents
 * @date 10/07/2012
 */
/**
 * Class QuakemlTypeEvents
 * @date 10/07/2012
 */
class QuakemlTypeEvents extends QuakemlWsdlClass
{
	/**
	 * The uri
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $uri;
	/**
	 * The dateMin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var dateTime
	 */
	public $dateMin;
	/**
	 * The dateMax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var dateTime
	 */
	public $dateMax;
	/**
	 * The latMin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var float
	 */
	public $latMin;
	/**
	 * The latMax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var float
	 */
	public $latMax;
	/**
	 * The lonMin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var float
	 */
	public $lonMin;
	/**
	 * The lonMax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var float
	 */
	public $lonMax;
	/**
	 * The depthMin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var float
	 */
	public $depthMin;
	/**
	 * The depthMax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var float
	 */
	public $depthMax;
	/**
	 * The netMagMin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var float
	 */
	public $netMagMin;
	/**
	 * The netMagMax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var float
	 */
	public $netMagMax;
	/**
	 * The netMagType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $netMagType;
	/**
	 * The author
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $author;
	/**
	 * The startRow
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var int
	 */
	public $startRow;
	/**
	 * The limit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $limit;
	/**
	 * Constructor
	 * @param string uri
	 * @param dateTime dateMin
	 * @param dateTime dateMax
	 * @param float latMin
	 * @param float latMax
	 * @param float lonMin
	 * @param float lonMax
	 * @param float depthMin
	 * @param float depthMax
	 * @param float netMagMin
	 * @param float netMagMax
	 * @param string netMagType
	 * @param string author
	 * @param int startRow
	 * @param string limit
	 * @return QuakemlTypeEvents
	 */
	public function __construct($_uri = null,$_dateMin = null,$_dateMax = null,$_latMin = null,$_latMax = null,$_lonMin = null,$_lonMax = null,$_depthMin = null,$_depthMax = null,$_netMagMin = null,$_netMagMax = null,$_netMagType = null,$_author = null,$_startRow = null,$_limit = null)
	{
		parent::__construct(array('uri'=>$_uri,'dateMin'=>$_dateMin,'dateMax'=>$_dateMax,'latMin'=>$_latMin,'latMax'=>$_latMax,'lonMin'=>$_lonMin,'lonMax'=>$_lonMax,'depthMin'=>$_depthMin,'depthMax'=>$_depthMax,'netMagMin'=>$_netMagMin,'netMagMax'=>$_netMagMax,'netMagType'=>$_netMagType,'author'=>$_author,'startRow'=>$_startRow,'limit'=>$_limit));
	}
	/**
	 * Set uri
	 * @param string uri
	 * @return string
	 */
	public function setUri($_uri)
	{
		return ($this->uri = $_uri);
	}
	/**
	 * Get uri
	 * @return string
	 */
	public function getUri()
	{
		return $this->uri;
	}
	/**
	 * Set dateMin
	 * @param dateTime dateMin
	 * @return dateTime
	 */
	public function setDateMin($_dateMin)
	{
		return ($this->dateMin = $_dateMin);
	}
	/**
	 * Get dateMin
	 * @return dateTime
	 */
	public function getDateMin()
	{
		return $this->dateMin;
	}
	/**
	 * Set dateMax
	 * @param dateTime dateMax
	 * @return dateTime
	 */
	public function setDateMax($_dateMax)
	{
		return ($this->dateMax = $_dateMax);
	}
	/**
	 * Get dateMax
	 * @return dateTime
	 */
	public function getDateMax()
	{
		return $this->dateMax;
	}
	/**
	 * Set latMin
	 * @param float latMin
	 * @return float
	 */
	public function setLatMin($_latMin)
	{
		return ($this->latMin = $_latMin);
	}
	/**
	 * Get latMin
	 * @return float
	 */
	public function getLatMin()
	{
		return $this->latMin;
	}
	/**
	 * Set latMax
	 * @param float latMax
	 * @return float
	 */
	public function setLatMax($_latMax)
	{
		return ($this->latMax = $_latMax);
	}
	/**
	 * Get latMax
	 * @return float
	 */
	public function getLatMax()
	{
		return $this->latMax;
	}
	/**
	 * Set lonMin
	 * @param float lonMin
	 * @return float
	 */
	public function setLonMin($_lonMin)
	{
		return ($this->lonMin = $_lonMin);
	}
	/**
	 * Get lonMin
	 * @return float
	 */
	public function getLonMin()
	{
		return $this->lonMin;
	}
	/**
	 * Set lonMax
	 * @param float lonMax
	 * @return float
	 */
	public function setLonMax($_lonMax)
	{
		return ($this->lonMax = $_lonMax);
	}
	/**
	 * Get lonMax
	 * @return float
	 */
	public function getLonMax()
	{
		return $this->lonMax;
	}
	/**
	 * Set depthMin
	 * @param float depthMin
	 * @return float
	 */
	public function setDepthMin($_depthMin)
	{
		return ($this->depthMin = $_depthMin);
	}
	/**
	 * Get depthMin
	 * @return float
	 */
	public function getDepthMin()
	{
		return $this->depthMin;
	}
	/**
	 * Set depthMax
	 * @param float depthMax
	 * @return float
	 */
	public function setDepthMax($_depthMax)
	{
		return ($this->depthMax = $_depthMax);
	}
	/**
	 * Get depthMax
	 * @return float
	 */
	public function getDepthMax()
	{
		return $this->depthMax;
	}
	/**
	 * Set netMagMin
	 * @param float netMagMin
	 * @return float
	 */
	public function setNetMagMin($_netMagMin)
	{
		return ($this->netMagMin = $_netMagMin);
	}
	/**
	 * Get netMagMin
	 * @return float
	 */
	public function getNetMagMin()
	{
		return $this->netMagMin;
	}
	/**
	 * Set netMagMax
	 * @param float netMagMax
	 * @return float
	 */
	public function setNetMagMax($_netMagMax)
	{
		return ($this->netMagMax = $_netMagMax);
	}
	/**
	 * Get netMagMax
	 * @return float
	 */
	public function getNetMagMax()
	{
		return $this->netMagMax;
	}
	/**
	 * Set netMagType
	 * @param string netMagType
	 * @return string
	 */
	public function setNetMagType($_netMagType)
	{
		return ($this->netMagType = $_netMagType);
	}
	/**
	 * Get netMagType
	 * @return string
	 */
	public function getNetMagType()
	{
		return $this->netMagType;
	}
	/**
	 * Set author
	 * @param string author
	 * @return string
	 */
	public function setAuthor($_author)
	{
		return ($this->author = $_author);
	}
	/**
	 * Get author
	 * @return string
	 */
	public function getAuthor()
	{
		return $this->author;
	}
	/**
	 * Set startRow
	 * @param int startRow
	 * @return int
	 */
	public function setStartRow($_startRow)
	{
		return ($this->startRow = $_startRow);
	}
	/**
	 * Get startRow
	 * @return int
	 */
	public function getStartRow()
	{
		return $this->startRow;
	}
	/**
	 * Set limit
	 * @param string limit
	 * @return string
	 */
	public function setLimit($_limit)
	{
		return ($this->limit = $_limit);
	}
	/**
	 * Get limit
	 * @return string
	 */
	public function getLimit()
	{
		return $this->limit;
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