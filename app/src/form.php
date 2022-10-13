<?php
include __DIR__ . '/../functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token'])) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = $recaptcha_server_secret;
    $recaptcha_response = $_POST['token'];
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    try {
        if ($recaptcha->score < 0.5) {
            throw new Exception('Low Score');
        }

        $to = $admin_email;

        $subject = "Message from " . $site;
        
        $abn_number = $_POST['abn_number'];
        $paying_equipment_loans = $_POST['paying_equipment_loans'];
        $paying_car_loans = $_POST['paying_car_loans'];
        $paying_home_loans = $_POST['paying_home_loans'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $finance_amount_required = $_POST['finance_amount_required'];
        $description_of_equipment = $_POST['description_of_equipment'];
        $verification_code = $_POST['verification_code'];

        $message = '<!DOCTYPE html>
                <html>
                    <head>
                        <style>
                            table {
                                font-family: arial, sans-serif;
                                border-collapse: collapse;
                                width: 100%;
                            }
                            
                            td, th {
                                border: 1px solid #dddddd;
                                text-align: left;
                                padding: 8px;
                            }
                            
                            tr:nth-child(even) {
                                background-color: #dddddd;
                            }
                        </style>
                    </head>
                <body><table><tbody>' .
            '<tr>' .
            '<td>Name</td>' .
            '<td><b>' . strip_tags($name) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Email Address</td>' .
            '<td><b>' . strip_tags($email) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>ABN Number</td>' .
            '<td><b>' . strip_tags($abn_number) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Paying Equipment Loans</td>' .
            '<td><b>' . strip_tags($paying_equipment_loans) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Paying Car Loans</td>' .
            '<td><b>' . strip_tags($paying_car_loans) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Finance Amount Required</td>' .
            '<td><b>' . strip_tags($finance_amount_required) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Description of Equipment</td>' .
            '<td><b>' . strip_tags($description_of_equipment) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>2 Digit Verification Code</td>' .
            '<td><b>' . strip_tags($verification_code) . '</b></td>' .
            '</tr>' .
            '</tbody></table></body></html>';

        $headers = "MIME-Version: 1.0\r\n" .
            "Content-type: text/html; charset=utf-8\r\n" .
            "From: " . $site . " <" . $no_reply_email . ">" . "\r\n" .
            // "Bcc: " . $bcc_email . "\r\n" .
            "Reply-To: " . $site . " <" . $no_reply_email . ">" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();
        $result = mail($to, $subject, $message, $headers);

        if ($result) {
            header('location:./../thankyou');
        } else {
            throw new Exception('Failed, please submit form again or call us directly.');
        }
    } catch (Exception $e) {
        echo '<script language="javascript">alert("' . $e->getMessage() . '")</script>';
        echo '<script language="javascript">history.go(-1);</script>';
    }
}
