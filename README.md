# AllTimeApi
Created for trial of composer packaging

This library will fetch you current time for any selected time zone. You just have to initialize the class and call the methods with proper parameters.

Initializing the library:
1 - Add "use jayeshchavda\alltime\AllTime" at the begining of the PHP file.
2 - Initilize the class using "$var = new AllTime()".
3 - Call any method on $var from the given below as per your need.

Method 1: getTimeZoneList();
Description: NO PARAMETERS REQUIRED. This methods will give you the entire list of time zones available so that you can choose and pass that to the other methods that feches its timezone.

Method 2: getCurrentTimeByZone();
Description: 
Parameter - The name of the timezone.
Type: Parameter should be in the form of string.
Details: This methods will give you the object of current time for your requested zone. You can access it using $yourObjectVar->datetime;
