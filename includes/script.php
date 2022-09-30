<?php 
    class LastFM {

        public $apikey;

        function __construct($api) {
            $this->apiKey = $api;
        }

        function getTopArtists() {
            $curl = curl_init("http://ws.audioscrobbler.com/2.0/?method=chart.gettopartists&api_key=$this->apiKey");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_TIMEOUT, 3);
            $data = curl_exec($curl);
            curl_close($curl);
            $xml = new SimpleXMLElement($data);
            // print_r($xml);
            return $xml->topartists;
        }
    }
?>