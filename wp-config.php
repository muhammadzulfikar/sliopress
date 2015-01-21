<?php
/**
 * Konfigurasi dasar WordPress.
 *
 * Berkas ini berisi konfigurasi-konfigurasi berikut: Pengaturan MySQL, Awalan Tabel,
 * Kunci Rahasia, Bahasa WordPress, dan ABSPATH. Anda dapat menemukan informasi lebih
 * lanjut dengan mengunjungi Halaman Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Menyunting wp-config.php}. Anda dapat memperoleh pengaturan MySQL dari web host Anda.
 *
 * Berkas ini digunakan oleh skrip penciptaan wp-config.php selama proses instalasi.
 * Anda tidak perlu menggunakan situs web, Anda dapat langsung menyalin berkas ini ke
 * "wp-config.php" dan mengisi nilai-nilainya.
 *
 * @package WordPress
 */

// ** Pengaturan MySQL - Anda dapat memperoleh informasi ini dari web host Anda ** //
/** Nama basis data untuk WordPress */
define('DB_NAME', 'mcdb');

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
 * Anda dapat menciptakan frase-frase ini menggunakan {@link https://api.wordpress.org/secret-key/1.1/salt/ Layanan kunci-rahasia WordPress.org}
 * Anda dapat mengubah baris-baris berikut kapanpun untuk mencabut validasi seluruh cookies. Hal ini akan memaksa seluruh pengguna untuk masuk log ulang.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GV am9Kq5hcnLz_~E3Qvc$brhIGjN?lSeYm)JTL}I)0p:C!7-FK7:qXPZWit1~7K');
define('SECURE_AUTH_KEY',  'b6L{y%xu]Gckc],~k%Vt8/$(z@O!wco!cI@wZ!k_Olv=vmGo1CY+}3focY,u!B4R');
define('LOGGED_IN_KEY',    '!WSuX&tn^Qf;OFKZT6=^YNO^wx^+S@]+}b-~<5=rK}k]889Fdd.P$NYwUzk+sL<7');
define('NONCE_KEY',        '^EJ-8S8| nB1:h#aZ-OteKA^I0Hk$+D1:`R`6{-a,@BeZ]G@QQ+}s0|=o]Pad*g]');
define('AUTH_SALT',        '5~liq1noGyPO#*!={<rHM<o=|bx$TX1,fqg]WwTSGT({V|kmX;a;,{8/%#|]$DhT');
define('SECURE_AUTH_SALT', 'NsEf_2E,OH(aAEwVk]pB(~mTHo- snfiIOYsnkQM~-4>)-0ow&Li}}L#^J!@=Q6J');
define('LOGGED_IN_SALT',   '1iX4;mH ]LE;nx){)v~/S{v(+{-48OS$.M(Rr,@>3#jY]0PuLT}}8nSN;a9Ctsn_');
define('NONCE_SALT',       'ZjR!9[ey1d),! LU=>~f!_+Ps^U_1?C~oT-.zwq:x$)4eDo?(.+b~|s}MXcWK?TO');

/**#@-*/

/**
 * Awalan Tabel Basis Data WordPress.
 *
 * Anda dapat memiliki beberapa instalasi di dalam satu basis data jika Anda memberikan awalan unik
 * kepada masing-masing tabel. Harap hanya masukkan angka, huruf, dan garis bawah!
 */
$table_prefix  = 'tb_';

/**
 * Untuk pengembang: Moda pengawakutuan WordPress.
 *
 * Ubah ini menjadi "true" untuk mengaktifkan tampilan peringatan selama pengembangan.
 * Sangat disarankan agar pengembang plugin dan tema menggunakan WP_DEBUG
 * di lingkungan pengembangan mereka.
 */
define('WP_DEBUG', false);

/* Cukup, berhenti menyunting! Selamat ngeblog. */

/** Lokasi absolut direktori WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Menentukan variabel-variabel WordPress berkas-berkas yang disertakan. */
require_once(ABSPATH . 'wp-settings.php');
