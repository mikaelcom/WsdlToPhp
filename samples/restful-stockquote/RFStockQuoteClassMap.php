<?php
/**
 * ClassMap 
 * @date 15/08/2012
 */
/**
 * ClassMap
 * @date 15/08/2012
 */
class RFStockQuoteClassMap
{
	final public static function classMap()
	{
		return array (
  'StockQuote' => 'RFStockQuoteTypeStockQuote',
  'ArrayOfStockQuote' => 'RFStockQuoteTypeArrayOfStockQuote',
  'GetStockQuote' => 'RFStockQuoteTypeGetStockQuote',
  'GetStockQuoteResponse' => 'RFStockQuoteTypeGetStockQuoteResponse',
  'GetWorldMajorIndices' => 'RFStockQuoteTypeGetWorldMajorIndices',
  'GetWorldMajorIndicesResponse' => 'RFStockQuoteTypeGetWorldMajorIndicesResponse',
  'DefaultFaultContract' => 'RFStockQuoteTypeDefaultFaultContract',
  'char' => 'RFStockQuoteTypeChar',
  'duration' => 'RFStockQuoteTypeDuration',
  'guid' => 'RFStockQuoteTypeGuid',
);
	}
}
?>