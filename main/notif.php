<?php
$email1=$koneksi->query("SELECT * FROM email");
$email=$email1->fetch_assoc();
$domain=$email['domain'];
$email2=$email['email'];
if (isset($_POST['kirim'])) {
	$app = $_POST['artikel'];
	$judul =$_POST['judul'];
	$url =$_POST['url'];
    $response = sendMessage($app, $judul, $url);
    $return["allresponses"] = $response;
    $return = json_encode($return);

    $data = json_decode($response, true);
    print_r($data);
    $id = $data['id'];
    print_r($id);

    print("\n\nJSON received:\n");
    print($return);
    print("\n");    
}
function sendMessage($app, $judul, $url) {
    $content      = array(
        "en" => $judul
        

    );
    $headings      = array(
        "en" => $domain
    );
    
    $fields = array(
        'app_id' => $app,
        'included_segments' => array(
            'All'
        ),
        'data' => array(
            "foo" => "bar"
        ),
        'contents' => $content,
        'headings' => $headings,
        'url'      => $url,
    );
    
    $fields = json_encode($fields);
    print("\nJSON sent:\n");
    print($fields);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Basic MTE1Mzg2ZTgtOGFmMS00OGI1LTgyMDgtM2YxNjUzODMzMzI3'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    return $response;
}
echo "<script>alert('Notif Terkirim');</script>";
echo "<script>location='index?halaman=komentar';</script>";

?>