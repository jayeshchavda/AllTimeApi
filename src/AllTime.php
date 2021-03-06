<?php
namespace jayeshchavda\alltime;
/**
 * Description: This is a library which fetches current time as per request from WorldTimeApi.
 * Author: Jayesh Chavda
 * Date: 11-07-2020
 */
class AllTime
{

    public function getTimeZoneList() {
        $allTimeZones = file_get_contents("http://worldtimeapi.org/api/timezone/");

        if( is_array( json_decode( $allTimeZones ) ) ) {
            header("HTTP/1.1 200 OK");
            return $allTimeZones;
        }
        return json_encode( ['error' => 'List not found.'] );
    }

    public function getCurrentTimeByZone( $timezone ) {
        
        if( strlen( $timezone ) < 0 ) {
            return json_encode( ['error' => 'Invalid Time Zone passed'] );
        } 

        $currentTime = file_get_contents('http://worldtimeapi.org/api/timezone/'.$timezone);

        if( is_array( json_decode( $currentTime, true ) ) ) {
            header("HTTP/1.1 200 OK");
            return $currentTime;
        }

        return json_encode( ['error' => 'No Time Zone found'] );
    }
}