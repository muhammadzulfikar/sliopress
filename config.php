<?php
/**
 * Konfigurasi dasar WordPress.
 *
 * Berkas ini berisi konfigurasi-konfigurasi berikut: Pengaturan MySQL, Awalan Tabel,
 * Kunci Rahasia, Bahasa WordPress, dan ABSPATH. Anda dapat menemukan informasi lebih
 * lanjut dengan mengunjungi Halaman Codex {@link http://codex.wordpress.org/Editing_config.php
 * Menyunting config.php}. Anda dapat memperoleh pengaturan MySQL dari web host Anda.
 *
 * Berkas ini digunakan oleh skrip penciptaan config.php selama proses instalasi.
 * Anda tidak perlu menggunakan situs web, Anda dapat langsung menyalin berkas ini ke
 * "config.php" dan mengisi nilai-nilainya.
 *
 * @package WordPress
 */

// ** Pengaturan MySQL - Anda dapat memperoleh informasi ini dari web host Anda ** //
/** Nama basis data untuk WordPress */
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
 * Anda dapat menciptakan frase-frase ini menggunakan {@link https://api.wordpress.org/secret-key/1.1/salt/ Layanan kunci-rahasia WordPress.org}
 * Anda dapat mengubah baris-baris berikut kapanpun untuk mencabut validasi seluruh cookies. Hal ini akan memaksa seluruh pengguna untuk masuk log ulang.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'EHw-f G63dC3KsF:X]|PZ#Pn.n5v`:Yv;xu0[z*0(;&hBRmX#DpoxxwUaW>6_d{S');
define('SECURE_AUTH_KEY',  '>5I^hfug>bhZ,|riBR:7IunEi7aT~Sy;z>`)wuKz!XY<)HZh49=$QbGM$*Kht4Z]');
define('LOGGED_IN_KEY',    'P#!<mS/;;f|!(10Y=R;VtS>s|&l<I)x|xAUj:e[c1:K_=GiYhDYUUB(~hm9Tz B{');
define('NONCE_KEY',        '0MUn5~ID[fJqL[m,zc^hXupMb.N@Rjjp3x90afSZWMauoH~w*dPDiNuN4k{R0m,f');
define('AUTH_SALT',        'W9tT9zPp%Tur. [#&HP:tad=-AX-71x>474D6GYu6[wtP/~G=hf|PIf2KMcd |o5');
define('SECURE_AUTH_SALT', '|8F%vb=V$Sb:Jv&;]u-*VGXaux$ENKC!N!WS{,]2T3Uy/Rgmisj=:Q9qh=t|M9jt');
define('LOGGED_IN_SALT',   '%g{S~esDh ~}#V^_fUMCwW(7)G(KVxzmph};e!r<]gsXFx^f#HE:ibzogN3BI=X&');
define('NONCE_SALT',       ':,9nE 8sW|1$iiT@^IE+>>x52R(*EN&[ca8Ph{ ;v,>F$;tT+|FPh8U8Q5u_np+0');

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
require_once(ABSPATH . 'settings.php');
