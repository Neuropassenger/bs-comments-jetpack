<?php
class Bs_Comments_JetPack_Sf {

    public static function logit( $data, $description ) {
        $filename = ABSPATH . 'bs-comments-jetpack_log.txt';

        $text = "===[ " . $description . " ]===\n";
        $text .= "===[ " . date( 'M d Y, G:i:s', time() ) . " ]===\n";
        $text .= print_r( $data, true ) . "\n";
        $file = fopen( $filename, 'a' );
        fwrite( $file, $text );
        fclose( $file );
    }

}