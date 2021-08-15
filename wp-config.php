<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'A;+G8caCB#=@[8qpfsB_i{L^T`,1q)i~&tkfZ?g/4*</`V@|xOS$#jp-N9Ho@<i*' );
define( 'SECURE_AUTH_KEY',  '}B(zmbKTOt_7/w*q*oMusV<?[^8$L8uF;lNxXU<U`=ug FOR&wJ#Mr%)t^}d;WJW' );
define( 'LOGGED_IN_KEY',    '?Ln7@tfm[i_h+79EJBRC5046=[zCOgtl,i2teabbf/hf _3t,|!6#txo{PLF+(|3' );
define( 'NONCE_KEY',        'zWJO2sn>bz4;:wIRtQ8HNvN[.!,0UNFN$1lU>Ymw{:&{w5dDEp^<|B]v{2m.Y(b`' );
define( 'AUTH_SALT',        'c/diVDVsk#( CCO3B=;&GSNNLF~lld50iG<|q5Vo#] 5pSb|nsNhv[%eV~crj]pW' );
define( 'SECURE_AUTH_SALT', 'sqRpsDKnm|niAWV>At`P+h)XXaG_:&Nd[2*G H,T25x/j!.Sid4U1k#c)HDv;jxw' );
define( 'LOGGED_IN_SALT',   'L=%~05=I4 8G#bl$aq4mT)9+<K9p{yMp{Gj5I]D[eV{he4V$.5F-^b4%4(>.=?C6' );
define( 'NONCE_SALT',       'o~I+DIP7kHbx_q=WipfPQ%`ZwV5Cc5ADh}1PSU:FS`%V]]1<0a7!cz.=p~Q5toW8' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
