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
define('AUTH_KEY',         'VeTmk|k!|-7|??t1%i^8oj{lCv3 G-}),l?&uRrnI(|? 7y4/EE|Cz|R`2FJNO?e');
define('SECURE_AUTH_KEY',  '$ylor|61}{]6I$QzI9_hEP-)@R]ve:1rr;BzG?r_0Y(S*jl-p+_hur;BNc|E+c>j');
define('LOGGED_IN_KEY',    '@N/s|p9E-MXcH4zL(r3_>>uU6>XUacnu&|`=]P]gA:${R|#vYs{RA`w4dGQIr5`x');
define('NONCE_KEY',        'k--hOtl[*?)r|6Xc`3F~|XXy2>jY+YQ+vN4^Q16gXlMz&Pc9X)@bF)`Gj0+8}Hll');
define('AUTH_SALT',        ']`>Oc7|S@H6bh,M 1d+f66@zRxukj-}SIIwhBK/s+~{+y?yX8)C8I7sP7M(}x-y/');
define('SECURE_AUTH_SALT', '~sS46)|iu5j[ZNMGp/cn>G2<^N]TpUF*fk;N~Xbx=~~^r+r%=+}`},Vi8&ST[f+b');
define('LOGGED_IN_SALT',   ')sikgwOZFj_yO[+k-EZy*i6bfqB(&kh].<G[P`+}Q##o=GXOt$3F=)E8:@pu_XDx');
define('NONCE_SALT',       'n2F(iT:haC*|5o-d[#e<kaBc]&n!~ZW;F+QQ.Sda~(5a[+.!8`-!2Wv=iOo#9CR#');

/**#@-*/

/**
 * Awalan Tabel Basis Data WordPress.
 *
 * Anda dapat memiliki beberapa instalasi di dalam satu basis data jika Anda memberikan awalan unik
 * kepada masing-masing tabel. Harap hanya masukkan angka, huruf, dan garis bawah!
 */
$table_prefix  = 'wp_';

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
