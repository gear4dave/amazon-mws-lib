<?php
/**
 * Orders.class.php
 * 
 * @author David Wilcock <dave.wilcock@gmail.com>
 * @copyright David Wilcock (roflcopter.cc) 2014, 2016
 */

namespace DawgUK\AmazonMWS\apis;

use DawgUK\AmazonMWS;

class Orders extends AmazonMWS {

   protected $strApiVersion = '2013-09-01';
   protected $strApiName = 'Orders';

   /**
    * Gets the name of the API, e.g. "Orders" or "Feeds"
    *
    * @return mixed
    */
   protected function getApiName() {
      return $this->strApiName;
   }

   /**
    * Returns the API version
    *
    * @return string
    */
   protected function getApiVersion() {
      return $this->strApiVersion;
   }

   /**
    * Does this API prepend version information in the URL?
    *
    * @return bool
    */
   protected function usesApiVersionInURL() {
      return TRUE;
   }

   /**
    * Returns a list of all Orders based on filtering parameters.
    *
    * @param $arrPayloadConfig
    * @return \SimpleXMLElement
    */
   public function listOrders($arrPayloadConfig) {
      $this->arrMessagePayload['Action'] = 'ListOrders';
      return $this->processPayload($arrPayloadConfig);
   }

   /**
    * Pagination version of listOrders
    *
    * @param $arrPayloadConfig
    * @return \SimpleXMLElement
    */
   public function listOrdersByNextToken($arrPayloadConfig) {
      $this->arrMessagePayload['Action'] = 'ListOrdersByNextToken';
      return $this->processPayload($arrPayloadConfig);
   }

   /**
    * Returns detailed information about an Order
    *
    * @param $arrPayloadConfig
    * @return \SimpleXMLElement
    */
   public function getOrder($arrPayloadConfig) {
      $this->arrMessagePayload['Action'] = 'GetOrder';
      return $this->processPayload($arrPayloadConfig);
   }

   /**
    * Returns detailed information about items on an Order
    *
    * @param $arrPayloadConfig
    * @return \SimpleXMLElement
    */
   public function listOrderItems($arrPayloadConfig) {
      $this->arrMessagePayload['Action'] = 'ListOrderItems';
      return $this->processPayload($arrPayloadConfig);
   }

   /**
    * Pagination version of listOrderItems - rarely used!
    *
    * @param $arrPayloadConfig
    * @return \SimpleXMLElement
    */
   public function listOrderItemsByNextToken($arrPayloadConfig) {
      $this->arrMessagePayload['Action'] = 'ListOrderItemsByNextToken';
      return $this->processPayload($arrPayloadConfig);
   }

}