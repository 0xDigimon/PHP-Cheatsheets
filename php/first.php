<?php
    echo    "<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>";
    echo "echo<br/>";
    $x="Echo Echo";
    echo $x;
    $a=34545;
    $s=3.34;
    $d=true;
    $f=array("abdoo",435,"hdhfd");
    $g=null;
    echo"<br/>";
    var_dump($x);
    
    echo"<br/>";
    var_dump($a);
    
    echo"<br/>";
    var_dump($s);
    
    echo"<br/>";
    var_dump($d);
    
    echo"<br/>";
    var_dump($f);
    
    echo"<br/>";
    var_dump($g);
    echo"<br/>";
    //string Function
    echo"string function";
    echo"<br/>";
    echo strlen("string function");
    echo"<br/>";
    echo str_word_count("string function");
    echo"<br/>";
    echo strrev("string function");
    echo"<br/>";
    echo strpos("string function","function");
    echo"<br/>";
    echo str_replace("function","PHP","string function");
    /*php numbers
    types of numbers
    1-integer
    2-float for decimal point
    3-infinity for finite numbers and its larger than PHP_float_MAX
    4-NaN for NOT a number and is used for impossible mathematical operations ex $x =acos(4);
    5-Numerical string for check if this is a number (true)or not (false) ex is_numeric();
    
    */
    //integer numbers
    echo "<br/>";
    $k=5;
    $t=3;
    echo $k+$t;
    echo "<br/>";
    echo PHP_INT_MAX;
    echo "<br/>";
    echo PHP_INT_MIN;
    echo "<br/>";
    echo PHP_INT_SIZE;
    echo "<br/>";
    
    //is_int()=is_integer()=is_long() all these are aliases together
    
    
    //float 
    $i=4.6;
    echo $i;
    echo "<br/>";
    //infinity numbers
    $q=45.64e545;
    var_dump($q);
    echo "<br/>";
    //NAN Not A Number 
    $p=acos(3);
    echo $p;
    echo "<br/>";
    //numeric numbers >> check numbers
    $x = 5985;
    var_dump(is_numeric($x));
    echo "<br/>";
    $x = "5985";
    var_dump(is_numeric($x));
    echo "<br/>";
    $x = "59.85" + 100;
    var_dump(is_numeric($x));
    echo "<br/>";
    $x = "Hello";
    var_dump(is_numeric($x));
    echo "<br/>";
    //PHP casting for converting between different data types
    // Cast float to int
    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;
    echo "<br>";
    // Cast string to int
    $x = "23465.768";
    $int_cast = (int)$x;
    echo $int_cast;
    echo "<br/>";
    $u = "23465.768";
    $float_cast = (float)$u;
    echo $float_cast;
    echo "<br/>";
    //constant PHP values
    //define(name, value, case-insensitive)
    //case-insensitive by Default is false


    /*
    PHP Operators
    1- Arithmetic Operators + - * / % **
    2- Assignment Operators = += -= *= /= %=
    3- Comparison Operators > < >= <= == (!= <>) === !== <=>
    4- increment / Decrement Operators ++ --  (pre or post)
    5- Logical Operators and or xor && || !
    6- string operators . .= 
    7- Array Operators + == === (!= <>) !== 
    8- Conditional Operators ?: for condition $x= e? 1:2 (like as if (?) and else (:) )      ??  $x=e??1 if e not null so $x =e else e is null so $x= 1 
    */


    // if statement
    /* 
    if (condition)
    elseif ( condition)
    else
    */


    //switch statement
    $l=99;
    switch ($l)
    {
        case $l>90:
            echo "Exlante";
            break;
        //any number of statements
        default:
            echo "Unknown";
    }
    echo "<br/>";


    //Loop 
    /*
    for and while and do while 

    while (true){
        output
    }
    do {
        output
                    >>>>>> its will be executed at least one time

    }while (true)

    for (variable ; condition; increment/Decrement){
        output
    }
    we can call for with different ways
    $x=0;
    for (;;) >>> infinite loop
    { 
        $x++    
    }
    variable
    for (;$x<=4(condition);)
    {
        increment/Decrement
    }
    for(variable ; condition;)
    {
        increment/Decrement;
    }
    #continue and break in loop
    break for end loop
    continue for skip (hide) one case from condition 




    foreach ($array as $key => $value) in key case
    {
        output;
    }
    
    foreach ($array as $value) in without key case
    {
        output;
    }

    */
    $array = array("Elamrosy","Abdelmawla","6-4-200",22);//array without key
    foreach($array as $value)
    {
        echo "$value<br/>";
    }
    $array = array("Elamrosy"=>"my sir name","Abdelmawla"=>"my great name","6-4-200"=>"my birthday",22=>"my old");//array with key
    foreach($array as $anything => $value)//any names 
    {
        echo "$anything = $value <br/>";
    }
    foreach($array as $anything => $value)//any names 
    {
        echo "$value = $anything <br/>"; //reverse output
    }

    //user defined *function*
    /*
    function funcName(){
        anything you want ;
    }
    */
    
    function firstPHP($myname = "Abdoo"){
        echo "Hello PHP iam ".$myname." and its very amazing to learn PHP <br>";
    }
    firstPHP();
    $myname = "Abdoo";
    function secondPHP($name){
        echo "Hello PHP iam ".$name." and its very amazing to learn PHP <br/>";
    }
    firstPHP($myname);

    function sumNumbers($x,$y){
        echo $x+$y;
        echo"<br/>";
    }    
    sumNumbers(4,6);
    
    function sum2Numbers($x,$y){
        return $x+$y;
        echo"<br/>";
    }    
    sum2numbers(4,6); // still not return thing 
    echo sum2numbers(6,4);
    echo"<br/>";

    //other way
    $total = sum2numbers(4,6);
    echo $total ; // or we can use total in any other operator
    echo"<br/>";


    // variable scope 
    /* 
    local scope 
    global scope
    */

    $x;
    function test(){
        $x=4;
        echo "local scope x = ".$x."<br/>";
        echo "global scope x = ".$GLOBALS['x']."<br/>";  // get x from above
        global $x;
        echo $x ."<br/>";  // get x from above
    }
    test();


    // array and Associative Arrays
    /*
    TO print array we use print_r(arraynam)
    variable = array("string","string","string",number,number);
    array consists of (key=>"value") 
    where when key is not exist we can called index (index=>"value")
    where key is exist  so we called key (key=>"value")
    */
    $arr = array("Elamrosy","Abdelmawla","6-4-200",22);//array without key
    foreach($arr as $val)
    {
        echo "$val<br/>";
        
    }
    echo "$arr<br/>";// just Print "Array" 
        print_r($arr);
        echo "<br/>";
    $arr = array("Elamrosy"=>"my sir name","Abdelmawla"=>"my great name","6-4-200"=>"my birthday",22=>"my old");//array with key (Associative Arrays)
    foreach($arr as $val=>$any) {
        echo "$any = $val <br/>"; 
    }
    print_r($arr);    
    echo "<br/>";
    //to access on array item 
    /*
    Arrayname [index number u want to access] ="new item";
    or 
    Arrayname [] ="new item"; for add new item in end of array
    
    */
    $arr[]="new item";
    print_r($arr);
    echo "<br/>";
    $arr +=["new2"=>"item2"];
    print_r($arr);
    echo "<br/>";
    $arr ["new3"]="item3";
    print_r($arr);
    echo "<br/>";
    // Summarization 
    /*
    #First Method
    $demo_array = array('Jack' => '10');
    $demo_array['Michelle'] = '11'; // adding elements by pushing method
    $demo_array['Shawn'] = '12';
    echo "By Simple Method: <br>";
    print_r($demo_array);
    echo "<br>";
    echo "Replacing the value: <br>";
    $demo_array['Jack'] = '13'; // replaces the value at Jack
    print_r($demo_array);
    echo "<br>";
    #Second method
    $demo_array += [$key => $value];
    $demo_array += ['John' => '14'];
    echo "By Concating Method: <br>";
    print_r($demo_array);
    >>>>>>output<<<<<<
    By Simple Method:
    Array ( [Jack] => 10 [Michelle] => 11 [Shawn] => 12 )
    Replacing the value:
    Array ( [Jack] => 13 [Michelle] => 11 [Shawn] => 12 )
    By Concating Method:
    Array ( [Jack] => 13 [Michelle] => 11 [Shawn] => 12 [John] => 14 )
    */





    //tow dimension array and two dimension Associative array
    /*
    #two dimension array 
    $arrayName=array(
        array(data),        can we use any or different number of row in the array 
        array(data),
        array(data)

    );
    #tow dimension Associative array
    $arrayName=array(
        data => array(data=>data,data=>data,data=>data,data=>data),
        data => array(data=>data,data=>data,data=>data,data=>data),
        data => array(data=>data,data=>data,data=>data,data=>data)
    );
    */
    echo "<br/>";
    $names = array(
        array('Ahmed', 'abdoo','Elamrosy','Tarek',44,33,22),
        array('Toqa', 'saad','Alaa',54,32),
        array('Dina', 'samar','Reham')
    );
    print_r($names);
    echo "<br/>";
    for($i=0;$i<count($names,COUNT_RECURSIVE);) //for count size of array elements
    {
    for($j=0;$j<count($names,COUNT_RECURSIVE);){
        
        echo$names[$i][$j]." ";
        $j++;
    }
    $i++;
}
    echo "<br/>";
    $names = array(
        array('Ahmed'=>45, 'abdoo'=>22,'Elamrosy'=>32,'Tarek'=>44,33,22),
        array('Toqa'=>30, 'saad'=>34,'Alaa'=>22,54,32),
        array('Dina'=>34, 'samar'=>66,'Reham'=>28)

    );
    print_r($names);

    echo "<br/>";
    $names = array(
        'Elmoghazy sir name for ' => array('Ahmed'=>45, 'abdoo'=>22,'Elamrosy'=>32,'Tarek'=>44,33,22),
        "ELamrosy sir name for " =>array('Toqa'=>30, 'saad'=>34,'Alaa'=>22,54,32),
        "Soliman sir name for " =>array('Dina'=>34, 'samar'=>66,'Reham'=>28)

    );
    print_r($names);
    echo "<br/>";
    echo $names["ELamrosy sir name for "];//its mistake and i try to correct it
    //correct >>> i want to print each sir name and names followed this sir name
    echo "<br/>";
    foreach($names as $index => $internalArrays)//each sir name or index referred internalArray containning  some names
    {
        echo $index." > ";
        foreach($internalArrays as $name=>$val)
        {
            echo $name." = ".$val . " -- ";
        }
    }



    //PHP - Sort Functions For Arrays

    /*
    sort() - sort arrays in ascending order
    rsort() - sort arrays in descending order
    asort() - sort associative arrays in ascending order, according to the value
    ksort() - sort associative arrays in ascending order, according to the key
    arsort() - sort associative arrays in descending order, according to the value
    krsort() - sort associative arrays in descending order, according to the key
    */

    //PHP Global Variables - Superglobals
    /*
    $GLOBALS['variable']
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
    */





    //Superglobals in details 
    // all superglobals are defined as arrays so we writ it like this globalName ['']

    /*
    1- $_SERVER['element']
        $_SERVER['PHP_SELF'] >>	Returns the filename of the currently executing script
        $_SERVER['GATEWAY_INTERFACE']  >>	Returns the version of the Common Gateway Interface (CGI) the server is using
        $_SERVER['SERVER_ADDR']   >>  Returns the IP address of the host server
        $_SERVER['SERVER_NAME']	   >>>  Returns the name of the host server (such as www.w3schools.com)
        $_SERVER['SERVER_SOFTWARE']	  >>>  Returns the server identification string (such as Apache/2.2.24)
        $_SERVER['SERVER_PROTOCOL']  >>>  	Returns the name and revision of the information protocol (such as HTTP/1.1)
        $_SERVER['REQUEST_METHOD']  >>>  	Returns the request method used to access the page (such as POST)
        $_SERVER['REQUEST_TIME']  >>  	Returns the timestamp of the start of the request (such as 1377687496)
        $_SERVER['QUERY_STRING']  >>  	Returns the query string if the page is accessed via a query string
        $_SERVER['HTTP_ACCEPT']	   >>>>   Returns the Accept header from the current request
        $_SERVER['HTTP_ACCEPT_CHARSET']	  >>>   Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
        $_SERVER['HTTP_HOST']  >>> 	Returns the Host header from the current request
        $_SERVER['HTTP_REFERER']   >>>   	Returns the complete URL of the current page (not reliable because not all user-agents support it)
        $_SERVER['HTTPS']  >>>   	Is the script queried through a secure HTTP protocol
        $_SERVER['REMOTE_ADDR']	  >>>  Returns the IP address from where the user is viewing the current page
        $_SERVER['REMOTE_HOST']	    >>  Returns the Host name from where the user is viewing the current page
        $_SERVER['REMOTE_PORT']	   >>  Returns the port being used on the user's machine to communicate with the web server
        $_SERVER['SCRIPT_FILENAME']	  >>  Returns the absolute pathname of the currently executing script
        $_SERVER['SERVER_ADMIN']  >>  	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
        $_SERVER['SERVER_PORT']	   >>  Returns the port on the server machine being used by the web server for communication (such as 80)
        $_SERVER['SERVER_SIGNATURE']  >>> Returns the server version and virtual host name which are added to server-generated pages
        $_SERVER['PATH_TRANSLATED']	   >>  Returns the file system based path to the current script
        $_SERVER['SCRIPT_NAME']	     >>> Returns the path of the current script
        $_SERVER['SCRIPT_URI']    >>>  	Returns the URI of the current page





     */
    echo "<br>";
    echo "<br>";
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br>";
    echo $_SERVER['SCRIPT_FILENAME'];
    echo "<br>";
    echo $_SERVER['REMOTE_ADDR'];
    echo "<br>";
    //================================
    //very important
    print_r($_SERVER); //print all things about $_SERVER

    echo "<br/>";

    echo$_SERVER['REQUEST_METHOD']."<br>";
    echo "<br>"; 
    echo $_REQUEST['m'];
    echo "<br>"; 
    echo "<br>";
//next section is an important
    if ($_SERVER["REQUEST_METHOD"] == "post") {
        echo $_REQUEST['hello'];
        echo $_REQUEST['hello1'];
    }
    else echo "no data intery";
    echo "<br/>";
    // include and require
    /*
        include and require are used for call other php script 

        include case:
            include('phphfile.php');
            if we have error in include, all script will be running as normal but include section not be running
        
        require case:
            require('phphfile.php');
            if we have error in require, all script under require not running

    */  

    /*  
    echo "test include and require";
    include ('first.php');
    require ('first.php');
    echo "end test include And require <br/>";
     */








?>




<html>
        <body>
            <form method="post"action="Hello.php?great1=Hello" >

                <input name="hello1" >
                <input type="submit">
            
            </form>
            <form method="post" action="Hello.php?great=Hello Admin" >

                <input type="text" name="hello" >
                <input type="submit" >
            
            </form>
            <form method="get" action="includeAndreqiure.php" >

                
                <input type="submit" value="click to test include and require" >
            
            </form>
        </body>
</html>