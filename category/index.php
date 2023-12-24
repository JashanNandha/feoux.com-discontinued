<div><p><?php 
if($handle = opendir('.')){
    while(false !== ($entry = readdir($handle))){
        if($entry !=="." && $entry != ".."){
            $rand= str_pad(dechex(rand(0x929292, 0xFFFFFF)),6,0,STR_PAD_LEFT);
            echo "<p><button style='background-color:#$rand;outline:none;border:none;padding:8px;font-family:sans-serif;border-radius:5px;' onclick='location.href=`$entry`'>$entry</button><p>";
        }
    }
}
?></p></div>