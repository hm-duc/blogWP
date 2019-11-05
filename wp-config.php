
<?php
    /**
     * The base configuration for WordPress
     *
     * The wp-config.php creation script uses this file during the
     * installation. You don't have to use the web site, you can
     * copy this file to "wp-config.php" and fill in the values.
     *
     * This file contains the following configurations:
     *
     * * MySQL settings
     * * Secret keys
     * * Database table prefix
     * * ABSPATH
     *
     * @link https://codex.wordpress.org/Editing_wp-config.php
     *
     * @package WordPress
     */
    
    // ** MySQL settings - You can get this info from your web host ** //
    /** The name of the database for WordPress */
    define( 'DB_NAME', 'blogWP' );
    
    /** MySQL database username */
    define( 'DB_USER', 'blogWP' );
    
    /** MySQL database password */
    define( 'DB_PASSWORD', '123456' );
    
    /** MySQL hostname */
    define( 'DB_HOST', 'localhost' );
    
    /** Database Charset to use in creating database tables. */
    define( 'DB_CHARSET', 'utf8mb4' );
    
    /** The Database Collate type. Don't change this if in doubt. */
    define( 'DB_COLLATE', '' );
    
    define('FS_METHOD', 'direct');
    
    /**#@+
     * Authentication Unique Keys and Salts.
     *
     * Change these to different unique phrases!
     * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
     * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
     *
     * @since 2.6.0
     */
    define( 'AUTH_KEY',         'FO7bCtZP?b2U$,k~eg)u#?v-8CE<FzA*qK&Pg7HwfP*EICA75b{8WE_=c8;3fu`o' );
    define( 'SECURE_AUTH_KEY',  'x5d?]Nf(a<Q26Cov0$5+Lx+9?XS*W{K1l}G+F)L%pa(0TI^ve?= sh5}YdxY[Wzs' );
    define( 'LOGGED_IN_KEY',    'hI=ud^i(XCAvYG?3sn+yZrMR56Z)45.6^3Oxo)m/2zI3rnrt=q0N`IVd8>;cs{^O' );
    define( 'NONCE_KEY',        'O)j;I:W#=E;@W=Y%9X{`PRZN*0{JZ6_QNi!@]fQOAv>3;^!|!df/3F2/R]Y:vfOr' );
    define( 'AUTH_SALT',        '8H_=AK4X8vFCC([7Gn,?O-vbnvx3*6KvG~k@2]3on]ul~CvP+6VF<wLH:;<FH2[X' );
    define( 'SECURE_AUTH_SALT', '/# |.[G|@aN O;q#%Qim=,2yOb%2@+|dN;17n{4yY8vw[)2{$J^95{nKh[rC)lvP' );
    define( 'LOGGED_IN_SALT',   'bECt^Va|MfQC[d|b81ZEr@dJJmX][7<[h9TSd_#wr.;ti, Q+@=ev`b2>_Jg&A02' );
    define( 'NONCE_SALT',       'W1]Nz;gm*f^p_g2u)|+6/trO9;V}Km6@m1@Pz[dN0v2vYc: EwL?&p_Pgd#5Pej[' );
    
    /**#@-*/
    
    /**
     * WordPress Database Table prefix.
     *
     * You can have multiple installations in one database if you give each
     * a unique prefix. Only numbers, letters, and underscores please!
     */
    $table_prefix = 'wp_';
    
    /**
     * For developers: WordPress debugging mode.
     *
     * Change this to true to enable the display of notices during development.
     * It is strongly recommended that plugin and theme developers use WP_DEBUG
     * in their development environments.
     *
     * For information on other constants that can be used for debugging,
     * visit the Codex.
     *
     * @link https://codex.wordpress.org/Debugging_in_WordPress
     */
    define( 'WP_DEBUG', true );
    
    /* That's all, stop editing! Happy publishing. */
    
    /** Absolute path to the WordPress directory. */
    if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', dirname( __FILE__ ) . '/' );
    }
    
    /** Sets up WordPress vars and included files. */
    require_once( ABSPATH . 'wp-settings.php' );
