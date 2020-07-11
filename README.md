# AllTimeApi
Created for trial of composer packaging

This library will fetch you current time for any selected time zone. You just have to initialize the class and call the methods with proper parameters.

Method 1: getTimeZoneList();
Description: NO PARAMETERS REQUIRED. This methods will give you the entire list of time zones available so that you can choose and pass that to the other methods that feches its timezone.

Method 2: getCurrentTimeByZone();
Description: 
Parameter - The name of the timezone.
Type: Parameter should be in the form of string.
Details: This methods will give you the object of current time for your requested zone. You can access it using $yourObjectVar->datetime;
