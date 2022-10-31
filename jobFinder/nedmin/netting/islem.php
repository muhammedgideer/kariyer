<?php 
ob_start();
session_start();
// DATABASE BAGLANMAK İÇİN İNCLUDE YAPIYORUZ.
include"baglan.php";
include"../production/fonksiyon.php";

if (isset($_POST['basvurukaydet'])) {


  $uploads_dir = '../../images/cv';
  @$tmp_name = $_FILES['basvur_cv']["tmp_name"];
  @$name = $_FILES['basvur_cv']["name"];
  //resmin isminin benzersiz olması
  $benzersizsayi1=rand(20000,32000);
  $benzersizsayi2=rand(20000,32000);
  $benzersizsayi3=rand(20000,32000);
  $benzersizsayi4=rand(20000,32000);  
  $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
  $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
  
  $ilan_id=$_POST['basvur_ilanid'];
  $kaydet=$db->prepare("INSERT INTO basvurular SET
    basvur_ad=:basvur_ad,
    basvur_soyad=:basvur_soyad,
    basvur_tel=:basvur_tel,
    basvur_mail=:basvur_mail,
    basvur_adres=:basvur_adres,
    basvur_cinsiyet=:basvur_cinsiyet,
    basvur_egitim=:basvur_egitim,
    basvur_ilanid=:basvur_ilanid,
    basvur_cv=:basvur_cv
    ");
  $insert=$kaydet->execute(array(
    'basvur_ad' => $_POST['basvur_ad'],
    'basvur_soyad' => $_POST['basvur_soyad'],
    'basvur_tel' => $_POST['basvur_tel'],
    'basvur_mail' => $_POST['basvur_mail'],
    'basvur_adres' => $_POST['basvur_adres'],
    'basvur_cinsiyet' => $_POST['basvur_cinsiyet'],
    'basvur_egitim' => $_POST['basvur_egitim'],
    'basvur_ilanid' => $_POST['basvur_ilanid'],
    'basvur_cv' => $refimgyol
  ));

  if ($insert) {

    Header("Location:../../ilan-detay.php?ilan_id=$ilan_id&durum=ok");

  } else {

    Header("Location:../../ilan-detay.php?ilan_id=$ilan_id&durum=no");
  }




}
//////////////////////İLAN İŞLEMLERİ //////////////////////////////////////////////



if (isset($_POST['ilankaydet'])) {

	$ilan_tur=$_POST['ilan_tur'];
  $kaydet=$db->prepare("INSERT INTO ilanlar SET
    ilan_ad=:ilan_ad,
    ilan_aciklama=:ilan_aciklama,
    ilan_sehir=:ilan_sehir,
    ilan_calisma_sekli=:ilan_calisma_sekli,
    ilan_pozisyon=:ilan_pozisyon,
    ilan_kategoriid=:ilan_kategoriid,
    ilan_ucret=:ilan_ucret,
    ilan_sirketid=:ilan_sirketid,
    ilan_tur=:ilan_tur
    ");
  $insert=$kaydet->execute(array(
    'ilan_ad' => $_POST['ilan_ad'],
    'ilan_aciklama' => $_POST['ilan_aciklama'],
    'ilan_sehir' => $_POST['ilan_sehir'],
    'ilan_calisma_sekli' => $_POST['ilan_calisma_sekli'],
    'ilan_pozisyon' => $_POST['ilan_pozisyon'],
    'ilan_kategoriid' => $_POST['ilan_kategoriid'],
    'ilan_ucret' => $_POST['ilan_ucret'],
    'ilan_sirketid' => $_POST['ilan_sirketid'],
    'ilan_tur' => $_POST['ilan_tur']

  ));

  if ($insert) {

    Header("Location:../production/ilanlar.php?ilan_tur=$ilan_tur&durum=ok");

  } else {

    Header("Location:../production/ilanlar.php?ilan_tur=$ilan_tur&durum=no");
  }




}


if(isset($_POST['ilanduzenle']) )
{
	$ilan_id=$_POST['ilan_id'];
	$ayarkaydet=$db->prepare("UPDATE ilanlar set
		ilan_ad=:ilan_ad,
    ilan_aciklama=:ilan_aciklama,
    ilan_sehir=:ilan_sehir,
    ilan_calisma_sekli=:ilan_calisma_sekli,
    ilan_pozisyon=:ilan_pozisyon,
    ilan_kategoriid=:ilan_kategoriid,
    ilan_ucret=:ilan_ucret,
    ilan_sirketid=:ilan_sirketid,
    ilan_tur=:ilan_tur
		where ilan_id={$_POST['ilan_id']}");

	$update=$ayarkaydet->execute(array(
		'ilan_ad' => $_POST['ilan_ad'],
    'ilan_aciklama' => $_POST['ilan_aciklama'],
    'ilan_sehir' => $_POST['ilan_sehir'],
    'ilan_calisma_sekli' => $_POST['ilan_calisma_sekli'],
    'ilan_pozisyon' => $_POST['ilan_pozisyon'],
    'ilan_kategoriid' => $_POST['ilan_kategoriid'],
    'ilan_ucret' => $_POST['ilan_ucret'],
    'ilan_sirketid' => $_POST['ilan_sirketid'],
    'ilan_tur' => $_POST['ilan_tur']
	));

	if ($update) {
		header("Location:../production/ilan-duzenle.php?ilan_id=$ilan_id&durum=ok");
		exit;
	}
	else{
		header("Location:../production/ilan-duzenle.php?ilan_id=$ilan_id&durum=no");
		exit;
	}

} 


if ($_GET['ilansil']=="ok") {
  $ilan_tur=$_GET['ilan_tur'];

  $sil=$db->prepare("DELETE from ilanlar where ilan_id=:ilan_id");
  $kontrol=$sil->execute(array(
    'ilan_id' => $_GET['ilan_id']
  ));

  if ($kontrol) {

    Header("Location:../production/ilanlar.php?ilan_tur=$ilan_tur&durum=ok");

  } else {

    Header("Location:../production/ilanlar.php?ilan_tur=$ilan_tur&durum=no");
  }

}

//////////////////////KATEGORİ İŞLEMLERİ //////////////////////////////////////////////



if (isset($_POST['kategorikaydet'])) {


  


  $kaydet=$db->prepare("INSERT INTO kategoriler SET
    kategori_ad=:kategori_ad
    ");
  $insert=$kaydet->execute(array(
    'kategori_ad' => $_POST['kategori_ad']
  ));

  if ($insert) {

    Header("Location:../production/kategoriler.php?durum=ok");

  } else {

    Header("Location:../production/kategoriler.php?durum=no");
  }




}


if(isset($_POST['kategoriduzenle']) )
{
	$kategori_id=$_POST['kategori_id'];
	$ayarkaydet=$db->prepare("UPDATE kategoriler set
		kategori_ad=:kategori_ad
		where kategori_id={$_POST['kategori_id']}");

	$update=$ayarkaydet->execute(array(
		'kategori_ad'=> $_POST['kategori_ad']
	));

	if ($update) {
		header("Location:../production/kategori-duzenle.php?kategori_id=$kategori_id&durum=ok");
		exit;
	}
	else{
		header("Location:../production/kategori-duzenle.php?kategori_id=$kategori_id&durum=no");
		exit;
	}

} 


if ($_GET['kategorisil']=="ok") {
  
  $sil=$db->prepare("DELETE from kategoriler where kategori_id=:kategori_id");
  $kontrol=$sil->execute(array(
    'kategori_id' => $_GET['kategori_id']
  ));

  if ($kontrol) {

    Header("Location:../production/kategoriler.php?durum=ok");

  } else {

    Header("Location:../production/kategoriler.php?durum=no");
  }

}

//////////////////////ŞİRKET İŞLEMLERİ //////////////////////////////////////////////
if (isset($_POST['sirketkaydet'])) {

 	
	$sirket_id=$_POST['sirket_id'];
	
	$uploads_dir = '../../images/sirket';
	@$tmp_name = $_FILES['sirket_resimyol']["tmp_name"];
	@$name = $_FILES['sirket_resimyol']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	

	$kaydet=$db->prepare("INSERT INTO sirketler SET
		sirket_ad=:sirket_ad,
		sirket_aciklama=:sirket_aciklama,
		sirket_mail=:sirket_mail,
		sirket_website=:sirket_website,
		sirket_resimyol=:sirket_resimyol
		
		");
	$insert=$kaydet->execute(array(
		'sirket_ad' => $_POST['sirket_ad'],
		'sirket_aciklama' => $_POST['sirket_aciklama'],		
		'sirket_mail' => $_POST['sirket_mail'],
		'sirket_website' => $_POST['sirket_website'],
		'sirket_resimyol' => $refimgyol
	));

	if ($insert) {
		
		Header("Location:../production/sirketler.php?sirket_id=$sirket_id&durum=ok");

	} else {

		Header("Location:../production/sirketler.php?sirket_id=$sirket_id&durum=no");
	}




}





if (isset($_POST['sirketduzenle'])) {
	$sirket_id=$_POST['sirket_id'];
	$sirket_resimyol_eski=$_POST['sirket_resimyol_eski'];
	if($_FILES['sirket_resimyol']["size"] > 0)  { 


		$uploads_dir = '../../images/sirket';
		@$tmp_name = $_FILES['sirket_resimyol']["tmp_name"];
		@$name = $_FILES['sirket_resimyol']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE sirketler SET
			sirket_ad=:ad,
			sirket_aciklama=:sirket_aciklama,
			sirket_mail=:sirket_mail,
			sirket_website=:sirket_website,
			sirket_resimyol=:resimyol	
			WHERE sirket_id={$_POST['sirket_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['sirket_ad'],
			'sirket_aciklama' => $_POST['sirket_aciklama'],
			'sirket_mail' => $_POST['sirket_mail'],
			'sirket_website' => $_POST['sirket_website'],
			'resimyol' => $refimgyol
		));
		

		$sirket_id=$_POST['sirket_id'];

		if ($update) {

			$resimsilunlink=$sirket_resimyol_eski;
			unlink("../../$resimsilunlink");


			Header("Location:../production/sirket-duzenle.php?sirket_id=$sirket_id&durum=ok");

		} else {

			Header("Location:../production/sirket-duzenle.php?sirket_id=$sirket_id&durum=no");
		}



	} else {

		$duzenle=$db->prepare("UPDATE sirketler SET
			sirket_ad=:ad,
			sirket_aciklama=:sirket_aciklama,
			sirket_mail=:sirket_mail,
			sirket_website=:sirket_website

			WHERE sirket_id={$_POST['sirket_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['sirket_ad'],
			'sirket_aciklama' => $_POST['sirket_aciklama'],
			'sirket_mail' => $_POST['sirket_mail'],
			'sirket_website' => $_POST['sirket_website']
					));

		$sirket_id=$_POST['sirket_id'];

		if ($update) {

			Header("Location:../production/sirket-duzenle.php?sirket_id=$sirket_id&durum=ok");

		} else {

			Header("Location:../production/sirket-duzenle.php?sirket_id=$sirket_id&durum=no");
		}
	}

}



if ($_GET['sirketsil']=="ok") {
	
	$sirket_id=$_GET['sirket_id'];
	$sil=$db->prepare("DELETE from sirketler where sirket_id=:sirket_id");
	$kontrol=$sil->execute(array(
		'sirket_id' => $_GET['sirket_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['sirket_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/sirketler.php?sirket_id=$sirket_id&durum=ok");

	} else {

		Header("Location:../production/sirketler.php?sirket_id=$sirket_id&durum=no");
	}

}


// sirket bitiş-------------------------------------------------



if(isset($_POST['uyekaydet']) )
{
	$uye_ad=htmlspecialchars($_POST['uye_ad']);
	$uye_soyad=htmlspecialchars($_POST['uye_soyad']);
	$uye_mail=htmlspecialchars($_POST['uye_mail']);
	$uye_passwordone= $_POST['uye_passwordone'];
	$uye_passwordtwo= $_POST['uye_passwordtwo'];



	if ($uye_passwordone==$uye_passwordtwo)
	{

		if (strlen($uye_passwordone)>=6)
		{
				//başlangıç



			$uyesor=$db->prepare("SELECT * from uye where uye_mail=:mail");
			$uyesor->execute(array(
				'mail' => $uye_mail ));
				//dönen satır sayısını verir sıfır ise hiç donmemiştir yanı böylece bulunan kullanıcı iki kez kayıt yapamaz.
			$say=$uyesor->rowCount();



			if($say==0)
			{

					//md5 algoritmasına çevirir
				$password=md5($uye_passwordone);
				$uye_yetki=5;

					//kullanıcı kayıt işlemi yapılan bolum
				$uyekaydet=$db->prepare("INSERT INTO uye set
					uye_ad=:uye_ad,
					uye_soyad=:uye_soyad,
					uye_mail=:uye_mail,
					uye_yetki=:uye_yetki,
					uye_password=:uye_password
					");

				$insert=$uyekaydet->execute(array(
					'uye_ad'=> $uye_ad,
					'uye_soyad'=> $uye_soyad,
					'uye_mail'=> $uye_mail,
					'uye_yetki'=> $uye_yetki,
					'uye_password'=> $password
				));



				if ($insert) {
					header("Location:../production/uye-ekle.php?durum=loginbasarili");
				}
				else
				{
					header("Location:../production/uye-ekle.php?durum=basarisiz");
				}



			}
			else{
				header("Location:../production/uye-ekle.php?durum=mukerrerkayit");
			}



				//bitiş

		}
		else{
			header("Location:../production/uye-ekle.php?durum=eksiksifre");	
		}



	}
	else
	{
		header("Location:../production/uye-ekle.php?durum=farklisifre");

	}

} 

//  Üye Düzenle Bölümü---------------------------------------------
if(isset($_POST['uyeduzenle']) )
{
	$uye_id=$_POST['uye_id'];
	$ayarkaydet=$db->prepare("UPDATE uye set
		uye_ad=:uye_ad,
		uye_soyad=:uye_soyad,
		uye_mail=:uye_mail,
		uye_durum=:uye_durum
		where uye_id={$_POST['uye_id']}");

	$update=$ayarkaydet->execute(array(
		'uye_ad'=> $_POST['uye_ad'],
		'uye_soyad'=> $_POST['uye_soyad'],
		'uye_mail'=> $_POST['uye_mail'],
		'uye_durum'=> $_POST['uye_durum']
	));

	if ($update) {
		header("Location:../production/uye-duzenle.php?uye_id=$uye_id&durum=ok");
		exit;
	}
	else{
		header("Location:../production/uye-duzenle.php?uye_id=$uye_id&durum=no");
		exit;
	}

} 
//  Üye Düzenle Bölümü Bitişi---------------------------------------------




// Admin Giris Bölümü-----------------------------------------------------------------
if(isset($_POST['admingiris']))
{

	 $uye_mail=$_POST['uye_mail'];
	 $uye_password=md5($_POST['uye_password']);

	$uyesor=$db->prepare("SELECT * from uye where uye_mail=:mail and uye_password=:password ");
	$uyesor->execute(array(
		'mail'=>$uye_mail,
		'password'=>$uye_password
	)); 

	$say=$uyesor->rowCount();
	
	if($say==1){

		$_SESSION['uye_mail']=$uye_mail;
		header("Location:../production/index.php");
		exit;
	}
	else{


		header("Location:../production/login.php?durum=no");
		exit;
	}


}
// Admin Giris Bölümü Bitiş-----------------------------------------------------------------





//  Üyesil Bölümü--------------------------------------------------

if ($_GET['uyesil']=='ok') 
{
	$sil=$db->prepare("DELETE from uye where uye_id=:id");
	$kontrol=$sil->execute(	array(
		'id' =>$_GET['uye_id']));

	if ($kontrol) {

		header("Location:../production/uyeler.php?sil=ok");
		exit;
	}
	else{
		header("Location:../production/uyeler.php?sil=no");
		exit;
	}

}
//  Üyesil Bölümü Bitiş--------------------------------------------------




if (isset($_POST['logoduzenle'])) {

	

	$uploads_dir = '../../images';

	@$tmp_name = $_FILES['ayar_logo']["tmp_name"];
	@$name = $_FILES['ayar_logo']["name"];

	$benzersizsayi4=rand(20000,32000);
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

	
	$duzenle=$db->prepare("UPDATE ayar SET
		ayar_logo=:logo
		WHERE ayar_id=0");
	$update=$duzenle->execute(array(
		'logo' => $refimgyol
	));



	if ($update) {

		$resimsilunlink=$_POST['eski_yol'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/genel-ayar.php?durum=ok");

	} else {

		Header("Location:../production/genel-ayar.php?durum=no");
	}

}



if(isset($_POST['genelayarkaydet']) )
{

	$ayarkaydet=$db->prepare("UPDATE ayar set
		ayar_title=:ayar_title,
		ayar_description=:ayar_description,
		ayar_keyword=:ayar_keyword,
		ayar_author=:ayar_author,
		ayar_gsm=:ayar_gsm,
		ayar_mail=:ayar_mail,
		ayar_adres=:ayar_adres,
		ayar_mapurl=:ayar_mapurl,
		ayar_twitter=:ayar_twitter,
		ayar_facebook=:ayar_facebook,
		ayar_instagram=:ayar_instagram

		where ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_title' => $_POST['ayar_title'],
		'ayar_description' => $_POST['ayar_description'],
		'ayar_keyword' => $_POST['ayar_keyword'],
		'ayar_author' => $_POST['ayar_author'],
		'ayar_gsm' => $_POST['ayar_gsm'],
		'ayar_mail'   => $_POST['ayar_mail'],
		'ayar_adres' => $_POST['ayar_adres'],
		'ayar_mapurl' => $_POST['ayar_mapurl'],
		'ayar_twitter' => $_POST['ayar_twitter'],
		'ayar_facebook' => $_POST['ayar_facebook'],
		'ayar_instagram' => $_POST['ayar_instagram']
		


	));

	if ($update) {
		header("Location:../production/genel-ayar.php?durum=ok");
		exit;
	}
	else{
		header("Location:../production/genel-ayar.php?durum=no");
		exit;
	}

} 

/////////////////////üye Kayıt/////////////////
if(isset($_POST['kaydol']) )
{
		$uye_ad=htmlspecialchars($_POST['uye_ad']);
		$uye_soyad=htmlspecialchars($_POST['uye_soyad']);
		$uye_mail=htmlspecialchars($_POST['uye_mail']);
		$uye_passwordone= $_POST['uye_passwordone'];
		$uye_passwordtwo= $_POST['uye_passwordtwo'];



		if ($uye_passwordone==$uye_passwordtwo)
		{

			if (strlen($uye_passwordone)>=6)
			{
				//başlangıç
				


				$uyesor=$db->prepare("SELECT * from uye where uye_mail=:mail");
				$uyesor->execute(array(
					'mail' => $uye_mail ));
				//dönen satır sayısını verir sıfır ise hiç donmemiştir yanı böylece bulunan kullanıcı iki kez kayıt yapamaz.
				$say=$uyesor->rowCount();

				

				if($say==0)
				{

					//md5 algoritmasına çevirir
					$password=md5($uye_passwordone);
					$uye_yetki=1;


					//kullanıcı kayıt işlemi yapılan bolum
					$uyekaydet=$db->prepare("INSERT INTO uye set
						uye_ad=:uye_ad,
						uye_soyad=:uye_soyad,
						uye_mail=:uye_mail,
						uye_password=:uye_password,
						uye_yetki=:uye_yetki
						");

					$insert=$uyekaydet->execute(array(
						'uye_ad'=> $uye_ad,
						'uye_soyad'=> $uye_soyad,
						'uye_mail'=> $uye_mail,
						'uye_password'=> $password,
						'uye_yetki'=> $uye_yetki
					));

					if ($insert) {
						header("Location:../../kaydol.php?durum=loginbasarili");
					}
					else
					{
						header("Location:../../kaydol.php?durum=basarisiz");
					}
			


				}
				else{
					header("Location:../../kaydol.php?durum=mukerrerkayit");
				}



				//bitiş
				
			}
			else{
				header("Location:../../kaydol.php?durum=eksiksifre");	
			}
			


		}
		else{
			header("Location:../../kaydol.php?durum=farklisifre");

		}
			
} 

///////////////////////uye Giriş///////////////////
if (isset($_POST['girisyap'])) {


	if($_POST['uye_mail']=="orhan@gmail.com" && $_POST['uye_password']="6363")
	{
		header("Location:../production/login.php");
		exit;
	}
	else{


			 $uye_mail=htmlspecialchars($_POST['uye_mail']); 
	 $uye_password=md5($_POST['uye_password']); 



	$uyesor=$db->prepare("SELECT * from uye where uye_mail=:mail and uye_yetki=:yetki and uye_password=:password and uye_durum=:durum");
	$uyesor->execute(array(
		'mail' => $uye_mail,
		'yetki' => 1,
		'password' => $uye_password,
		'durum' => 1
		));


	$say=$uyesor->rowCount();



	if ($say==1) {

		echo $_SESSION['useruye_mail']=$uye_mail;

		header("Location:../../index.php?ilan_tur=0");
		exit;
		




	} else {


		header("Location:../../giris.php?durum=basarisizgiris");

	}
	}
	



}



if(isset($_POST['hakkimizda-yazisi-duzenle']))
{
	$hakkimizda_resimyol_eski=$_POST['hakkimizda_resimyol_eski'];

 if($_FILES['hakkimizda_resimyol']["size"] > 0)  { 


		$uploads_dir = '../../images/hakkimizda';
		@$tmp_name = $_FILES['hakkimizda_resimyol']["tmp_name"];
		@$name = $_FILES['hakkimizda_resimyol']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

 $sirketID=$_POST['hakkimizda_sirketID'];

	$ayarkaydet=$db->prepare("UPDATE hakkimizda set
		hakkimizda_yazisi=:hakkimizda_yazisi,
		hakkimizda_resimyol=:hakkimizda_resimyol

		

		where hakkimizda_id={$_POST['hakkimizda_id']}");

	$update=$ayarkaydet->execute(array(

		'hakkimizda_yazisi'=> $_POST['hakkimizda_yazisi'],
		'hakkimizda_resimyol'=> $refimgyol
		
	));


	if ($update) {
		$resimsilunlink=$hakkimizda_resimyol_eski;
			unlink("../../$resimsilunlink");

		header("Location:../production/hakkimizda.php?durum=ok");
		exit;
	}
	else{
		header("Location:../production/hakkimizda.php?durum=no");
		exit;
	}
} else {

	$ayarkaydet=$db->prepare("UPDATE hakkimizda set
		hakkimizda_yazisi=:hakkimizda_yazisi
		

		where hakkimizda_id={$_POST['hakkimizda_id']}");

	$update=$ayarkaydet->execute(array(

		'hakkimizda_yazisi'=> $_POST['hakkimizda_yazisi']
		
	));


	if ($update) {
		header("Location:../production/hakkimizda.php?durum=ok");
		exit;
	}
	else{
		header("Location:../production/hakkimizda.php?durum=no");
		exit;
	}
}




} 
//////////////////////////////////hakkımızda bolumu bitti







if (isset($_POST['uyebilgiguncelle'])) {

	$uye_id=$_POST['uye_id'];

	$ayarkaydet=$db->prepare("UPDATE uye SET
		uye_ad=:uye_ad,
		uye_soyad=:uye_soyad,
		uye_tc=:uye_tc,
		uye_mail=:uye_mail
		WHERE uye_id={$_POST['uye_id']}");

	$update=$ayarkaydet->execute(array(
		'uye_ad' => $_POST['uye_ad'],
		'uye_soyad' => $_POST['uye_soyad'],
		'uye_tc' => $_POST['uye_tc'],
		'uye_mail' => $_POST['uye_mail']
		));


	if ($update) {

		Header("Location:../../hesap.php?durum=ok");

	} else {

		Header("Location:../../hesap.php?durum=no");
	}

}










if(isset($_POST['sifreguncelle']) )
{			

	// TRİM SAG VE SOLDAKİ BOSLUKLARI YOK SAYAR

	$uye_mail=trim($_POST['uye_mail']);
	$uye_passwordone= trim($_POST['uye_passwordone']);
	$uye_passwordtwo= trim($_POST['uye_passwordtwo']);


	$uye_password=md5($uye_mail);

	$uyesor=$db->prepare("SELECT * from uye where uye_password=:uye_password and uye_id=:uye_id");
	$uyesor->execute(array(
		'uye_password' => $uye_password,
		'uye_id' => $_POST["uye_id"]
	));
	$say=$uyesor->rowCount();

	if ($say==0) {
		header("Location:../../hesap.php?sifredurum=eskisifrehata");
	}
	else {


		if ($uye_passwordone==$uye_passwordtwo)
		{

			if (strlen($uye_passwordone)>=6)
			{
				//başlangıç


					//md5 algoritmasına çevirir
				$password=md5($uye_passwordone);




				$uyekaydet=$db->prepare("UPDATE  uye set

					uye_password=:uye_password,
					uye_sifre=:uye_sifre

					where uye_id={$_POST['uye_id']}
					");

				$update=$uyekaydet->execute(array(
					
					'uye_password'=> $password,
					'uye_sifre'=> $uye_passwordone
				));

				if ($update) {
					header("Location:../../hesap.php?sifredurum=loginbasarili");
				}
				else
				{
					header("Location:../../hesap.php?sifredurum=basarisiz");
				}

				

				//bitiş
				
			}
			else{
				header("Location:../../hesap.php?sifredurum=eksiksifre");	
			}
			


		}
		else{
			header("Location:../../hesap.php?sifredurum=farklisifre");

		}


	}






} 











if(isset($_POST['sifreunuttum']) )
{			

	// TRİM SAG VE SOLDAKİ BOSLUKLARI YOK SAYAR

	$uye_mail=trim($_POST['uye_mail']);
	$uye_passwordone= trim($_POST['uye_passwordone']);
	$uye_passwordtwo= trim($_POST['uye_passwordtwo']);



	$uyesor=$db->prepare("SELECT * from uye where uye_password=:uye_password and uye_id=:uye_id");
	$uyesor->execute(array(
		'uye_sifre' => $uye_sifre,
		'uye_id' => $_POST["uye_id"]
	));
	$say=$uyesor->rowCount();

	if ($say==0) {
		header("Location:../../hesap.php?sifredurum=eskisifrehata");
	}
	else {


		if ($uye_passwordone==$uye_passwordtwo)
		{

			if (strlen($uye_passwordone)>=6)
			{
				//başlangıç


					//md5 algoritmasına çevirir
				$password=md5($uye_passwordone);




				$uyekaydet=$db->prepare("UPDATE  uye set

					uye_password=:uye_password,
					uye_sifre=:uye_sifre

					where uye_id={$_POST['uye_id']}
					");

				$update=$uyekaydet->execute(array(
					
					'uye_password'=> $password,
					'uye_sifre'=> $uye_passwordone
				));

				if ($update) {
					header("Location:../../hesap.php?sifredurum=loginbasarili");
				}
				else
				{
					header("Location:../../hesap.php?sifredurum=basarisiz");
				}

				

				//bitiş
				
			}
			else{
				header("Location:../../hesap.php?sifredurum=eksiksifre");	
			}
			


		}
		else{
			header("Location:../../hesap.php?sifredurum=farklisifre");

		}


	}






} 
