<?php
    $site_key = '6LcgdCYUAAAAANOgxHfRF7yybAEOHNivMmEuuvT6'; // Diisi dengan site_key API Google reCapthca yang sobat miliki
    $secret_key = '6LcgdCYUAAAAAEaGhmpBWm-0layGgTp_I0VpYjWV'; // Diisi dengan secret_key API Google reCapthca yang sobat miliki

    if (isset($_POST['submit']))
    {
        if(isset($_POST['g-recaptcha-response']))
        {
            $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response='.$_POST['g-recaptcha-response'];
            $response = @file_get_contents($api_url);
            $data = json_decode($response, true);

            if($data['success'])
            {
                echo "<meta http-equiv='refresh' content='0;url=do_register.php'>";
                $success = true;
            }
            else
            {
                $success = false;
            }
        }
        else
        {
            $success = false;
        }
    }
?>