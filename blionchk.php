<?php
$user="zn.mahmud";
$pass="12345678";
$agent= 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0.1';
            $curlHeaders = array (
                    'Accept: application/xml, text/xml, */*; q=0.01',
                    'Accept-Encoding: gzip, deflate',
                    'Accept-Language: en-US,en;q=0.5',
                    'User-Agent: Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0.1',
                    'Connection: Keep-Alive',
                    'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
                    'Wicket-Ajax: true',
                    'Wicket-Ajax-BaseURL: L7ExSNbPC4sb6TPJDblCAkN0baRJxw3qqt9ErkZgoetbexguZOJ1K13kJjowRDi9zus9pCmpMedELy99QFKjgA/L7E59/JDb97/goebc',
					'X-Requested-With: XMLHttpRequest',
                    'Referer: http://care.banglalionwimax.com/alepowsrc/L7ExSNbPC4sb6TPJDblCAkN0baRJxw3qqt9ErkZgoetbexguZOJ1K13kJjowRDi9zus9pCmpMedELy99QFKjgA/L7E59/JDb97/goebc',
                    'Host: care.banglalionwimax.com',
                    'Content-Length: 98',
                    'Cache-Control: no-cache',
                    'Pragma: no-cache'
           );
            $ch = curl_init();
			curl_setopt($ch, CURLOPT_URL,"http://care.banglalionwimax.com/alepowsrc/fyBfZ9p6trMvaySZAwZKxa7fZsL5EYE3igsIsU1p9Vg7cVDWReIL2DddXdasgCpm1acnLMxyHfpTZC4I7NmK6boYxhmJXr6aiMgfmPPscC2Apll7i8BjZA/fyBce/EYE30");
			curl_setopt($ch, CURLOPT_HTTPHEADER, $curlHeaders);
			curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HEADER, TRUE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_USERAGENT, $agent);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, "idc_hf_0=&signInForm.username=".$user."&signInForm.password=".$pass."&signInContainer%3Asubmit=Sign%20In");
			$result=curl_exec($ch);
			file_put_contents("new.txt",$result);
			$curl_info = curl_getinfo($ch);
			echo '<br />';
			print_r($curl_info);
            
        
?>