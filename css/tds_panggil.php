<?

    $konek= mysqli_connect("localhost", "root", "", "tds_value");
    $sql=mysqli_query($konek, "SELECT * FROM tdsmonitoring ORDER BY ID DESC");
    $data= mysqli_fetch_array($sql);
    $tdsValue = $data[""];
    

    if( $tdsValue=="" ) $temperature = 0;
    
    
    echo $temperature;

?>