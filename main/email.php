<?php 
	  	include 'koneksi.php';
        $id =$_POST['id'];
        $pt=$koneksi->query("SELECT * FROM produk WHERE id_produk='$id'");
        $t= $pt->fetch_assoc();
        $toko=$koneksi->query("SELECT * FROM toko");
        $toko1= $toko->fetch_assoc();
        $domaintoko=$toko1['domain'];
        $namatoko=$toko1['namatoko'];
        $produk=$t['nama_produk'];
        $judul2 = preg_replace("/\s/","-",$t['nama_produk']);
        $url1 = "produkdetail".$t['id_produk']."-".$judul2.".html";
        $email1=$koneksi->query("SELECT * FROM email");
        $email=$email1->fetch_assoc();
        $host=$email['hostmail'];
        $kunci=$email['password'];
        $domain=$email['domain'];
        $email2=$email['email'];
	  	$data_r = array();
	      $select = $koneksi->query("SELECT * FROM pelanggan");
	      
	      while ($row=$select->fetch_assoc())
	      {
	          $data_r[]=$row;
	      }
	    
        require_once("../PHPMailer/src/PHPMailer.php");
        require_once("../PHPMailer/src/SMTP.php");

        foreach ($data_r as $key => $value) { //mengirim email untuk setiap baris data
            $nama=$value['nama_pelanggan'];
            $messages='<p>Halo '.$nama.' Ada produk Baru '.$produk.'</p><a href="'.$domaintoko.'/'.$url1.'"><img src="'.$domaintoko.'/fotoprofil/'.$produk.'" style="width:100%"></a> ';
            $subject='Produk Terbaru dari '.$namatoko.' Woles';
            $mail = new PHPMailer\PHPMailer\PHPMailer();

   

            $mail->SMTPDebug = 3;                               

            $mail->isSMTP();                                   

            $mail->Host = $host;

            $mail->SMTPAuth = true;                            

            $mail->Username = $email2;                 

            $mail->Password = $kunci;                           

            $mail->SMTPSecure = "ssl";                           

            $mail->Port = 465;                                   

             

            $mail->From = $email2;

            $mail->FromName = $domain;

             

            $mail->addAddress($value['email_pelanggan'], $value['nama_pelanggan']);

             

            $mail->isHTML(true);

             

            $mail->Subject = $subject;

            $mail->Body = $messages;

            $mail->AltBody = "This is the plain text version of the email content";

             

            if(!$mail->send()) 

            {

                echo "Mailer Error: " . $mail->ErrorInfo;

            } 

            else 

            {

                echo "Message has been sent successfully";

            }
            echo "<script>alert('Notif Email Terkirim Ke Pelanggan');</script>";
	        echo "<script>location='index?halaman=komentar';</script>";			
        }
      

      

      ?>