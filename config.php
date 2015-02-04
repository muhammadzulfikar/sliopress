<?php
/**
 * Konfigurasi dasar SlioPress.
 *
 * Berkas ini berisi konfigurasi-konfigurasi berikut: Pengaturan MySQL, Awalan Tabel,
 * Kunci Rahasia, Bahasa SlioPress, dan ABSPATH. Anda dapat menemukan informasi lebih
 * lanjut dengan mengunjungi Halaman Codex {@link http://codex.wordpress.org/Editing_config.php
 * Menyunting config.php}. Anda dapat memperoleh pengaturan MySQL dari web host Anda.
 *
 * Berkas ini digunakan oleh skrip penciptaan config.php selama proses instalasi.
 * Anda tidak perlu menggunakan situs web, Anda dapat langsung menyalin berkas ini ke
 * "config.php" dan mengisi nilai-nilainya.
 *
 * @package SlioPress
 */

// ** Pengaturan MySQL - Anda dapat memperoleh informasi ini dari web host Anda ** //
/** Nama basis data untuk SlioPress */
define('DB_NAME', 'wordpress');

/** Nama pengguna basis data MySQL */
define('DB_USER', 'root');

/** Kata sandi basis data MySQL */
define('DB_PASSWORD', '');

/** Nama host MySQL */
define('DB_HOST', 'localhost');

/** Set Karakter Basis Data yang digunakan untuk menciptakan tabel basis data. */
define('DB_CHARSET', 'utf8');

/** Jenis Collate Basis Data. Jangan ubah ini jika ragu. */
define('DB_COLLATE', '');

/**#@+
 * Kunci Otentifikasi Unik dan Garam.
 *
 * Ubah baris berikut menjadi frase unik!
 * Anda dapat menciptakan frase-frase ini menggunakan {@link https://api.wordpress.org/secret-key/1.1/salt/ Layanan kunci-rahasia SlioPress.org}
 * Anda dapat mengubah baris-baris berikut kapanpun untuk mencabut validasi seluruh cookies. Hal ini akan memaksa seluruh pengguna untuk masuk log ulang.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'x?P:;O[u:1z,_Y-3i]juTSVMccg!;`G4%73q+`Hf9Ix6}+iF[= $NV})CvIH^_oA');
define('SECURE_AUTH_KEY',  'y}m-^j9%<P/ 4-F-+u!dS3e7{loUP6@j%H>M||;lA{1+<JFTEK6#Lv}RBvGww-JH');
define('LOGGED_IN_KEY',    'Sqp6N!D3YoCq~x/L.DuQ^>IV7AAQ~jXLdb}c]TRgVF#IC8Qn5.3@|FFF_ospNQxB');
define('NONCE_KEY',        '+@YVlqH+:O.iU(b&vZ,|;OM0ryzh+I>8.r,~2->U?^v0wF>TRI=@}5Ud0b8Q|~{D');
define('AUTH_SALT',        'Jv_IjdZ+Fc=: |7 oCKHZ4.AT)S*p)wL>!x%6Xty><1+xO03l|vWc~7T;#,hgJkw');
define('SECURE_AUTH_SALT', '+S3A@OJ8:j8I+{P.P;!ymI5,;Kdj:(:jAUS&52-eq@_.q<fa=iprWyY({$uMi2C&');
define('LOGGED_IN_SALT',   'x0-12!fF6l_f|09oTSWx1{F+ ML<|J2IHx<3 ,bBYG$=)cYJSp+X|!0[lb;-uAM8');
define('NONCE_SALT',       '2~*W;VLrQ/KMBO=P%nbBiea>0(BimmVp.0FsN)X42Pd?Ea9s(-9-RK:xzXAaRYEp');

/**#@-*/

/**
 * Awalan Tabel Basis Data SlioPress.
 *
 * Anda dapat memiliki beberapa instalasi di dalam satu basis data jika Anda memberikan awalan unik
 * kepada masing-masing tabel. Harap hanya masukkan angka, huruf, dan garis bawah!
 */
$table_prefix  = 'tb_';

/**
 * Untuk pengembang: Moda pengawakutuan SlioPress.
 *
 * Ubah ini menjadi "true" untuk mengaktifkan tampilan peringatan selama pengembangan.
 * Sangat disarankan agar pengembang plugin dan tema menggunakan WP_DEBUG
 * di lingkungan pengembangan mereka.
 */
define('WP_DEBUG', false);

/* Cukup, berhenti menyunting! Selamat ngeblog. */

/** Lokasi absolut direktori SlioPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Menentukan variabel-variabel SlioPress berkas-berkas yang disertakan. */
require_once(ABSPATH . 'settings.php');
